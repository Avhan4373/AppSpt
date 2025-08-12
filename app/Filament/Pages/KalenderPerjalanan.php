<?php

namespace App\Filament\Pages;

use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use Carbon\Carbon;
use Filament\Pages\Page;

class KalenderPerjalanan extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = 'Perjalanan Dinas';

    protected static ?string $title = 'Kalender Perjalanan';

    protected static string $view = 'filament.pages.kalender-perjalanan';

    public static function canAccess(): bool
    {
        return auth()->check();
    }

    protected function getViewData(): array
    {
        $user = auth()->user();
        $isAdminOrSuper = $user->hasRole(['super_admin', 'admin']);

        $monthParam = request()->query('month'); // format: YYYY-MM
        try {
            $currentMonth = $monthParam
                ? Carbon::createFromFormat('Y-m', $monthParam)->startOfMonth()
                : now()->startOfMonth();
        } catch (\Throwable $e) {
            $currentMonth = now()->startOfMonth();
        }

        $monthStart = $currentMonth->copy()->startOfMonth();
        $monthEnd = $currentMonth->copy()->endOfMonth();

        // Jenis filter: all | dalam | luar
        $jenis = (string) request()->query('jenis', 'all');
        $includeDalam = in_array($jenis, ['all', 'dalam'], true);
        $includeLuar = in_array($jenis, ['all', 'luar'], true);

        $dalam = collect();
        $luar = collect();

        if ($includeDalam) {
            // Query SPT Dalam Daerah (single date)
            $dalamQuery = SppdDalamDaerah::query()
                ->whereBetween('tanggal_spt', [$monthStart->toDateString(), $monthEnd->toDateString()]);

            if (!$isAdminOrSuper) {
                $userId = $user->id;
                $dalamQuery->where(function ($q) use ($userId) {
                    $q->where('user_id', $userId)
                        ->orWhereRaw('JSON_CONTAINS(user_ids, ?)', ['"' . $userId . '"']);
                });
            }

            $dalam = $dalamQuery->get(['tanggal_spt']);
        }

        if ($includeLuar) {
            // Query SPT Luar Daerah (date range overlaps month)
            $luarQuery = SppdLuarDaerah::query()
                ->where(function ($q) use ($monthStart, $monthEnd) {
                    $q->whereBetween('tanggal_berangkat', [$monthStart->toDateString(), $monthEnd->toDateString()])
                        ->orWhereBetween('tanggal_kembali', [$monthStart->toDateString(), $monthEnd->toDateString()])
                        ->orWhere(function ($q2) use ($monthStart, $monthEnd) {
                            $q2->where('tanggal_berangkat', '<', $monthStart->toDateString())
                                ->where('tanggal_kembali', '>', $monthEnd->toDateString());
                        });
                });

            if (!$isAdminOrSuper) {
                $userId = $user->id;
                $luarQuery->where(function ($q) use ($userId) {
                    $q->where('user_id', $userId)
                        ->orWhereRaw('JSON_CONTAINS(user_ids, ?)', ['"' . $userId . '"']);
                });
            }

            $luar = $luarQuery->get(['tanggal_berangkat', 'tanggal_kembali']);
        }

        // Kumpulkan tanggal terpakai
        $usedDates = [];
        foreach ($dalam as $item) {
            if (!empty($item->tanggal_spt)) {
                $date = Carbon::parse($item->tanggal_spt)->toDateString();
                $usedDates[$date] = true;
            }
        }

        foreach ($luar as $item) {
            if (empty($item->tanggal_berangkat) || empty($item->tanggal_kembali)) {
                continue;
            }
            $start = Carbon::parse($item->tanggal_berangkat)->startOfDay();
            $end = Carbon::parse($item->tanggal_kembali)->startOfDay();

            $cursor = $start->copy();
            while ($cursor->lte($end)) {
                if ($cursor->between($monthStart, $monthEnd)) {
                    $usedDates[$cursor->toDateString()] = true;
                }
                $cursor->addDay();
            }
        }

        // Susun grid kalender
        $firstDayOfMonth = $monthStart->copy();
        $daysInMonth = $firstDayOfMonth->daysInMonth;
        // Sunday-first calendar: Carbon::dayOfWeek => 0 (Sun) .. 6 (Sat)
        $weekdayIndexSun0 = (int) $firstDayOfMonth->dayOfWeek;
        $leadingEmpty = $weekdayIndexSun0; // 0..6 leading blanks when week starts on Sunday

        $cells = [];
        for ($i = 0; $i < $leadingEmpty; $i++) {
            $cells[] = null;
        }

        for ($day = 1; $day <= $daysInMonth; $day++) {
            $dateStr = $firstDayOfMonth->copy()->day($day)->toDateString();
            $cells[] = [
                'day' => $day,
                'date' => $dateStr,
                'used' => isset($usedDates[$dateStr]),
            ];
        }

        while (count($cells) % 7 !== 0) {
            $cells[] = null;
        }

        $weeks = array_chunk($cells, 7);

        $prevMonth = $currentMonth->copy()->subMonth()->format('Y-m');
        $nextMonth = $currentMonth->copy()->addMonth()->format('Y-m');

        return [
            'currentMonth' => $currentMonth,
            'weeks' => $weeks,
            'prevMonth' => $prevMonth,
            'nextMonth' => $nextMonth,
            'jenis' => $jenis,
        ];
    }
}


