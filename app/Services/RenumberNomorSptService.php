<?php

namespace App\Services;

use Carbon\Carbon;

class RenumberNomorSptService
{
    /**
     * Renumber nomor SPT untuk satu bulan sesuai urutan tanggal.
     * Mengembalikan daftar perubahan yang dilakukan atau yang akan dilakukan (dry-run).
     *
     * @param string $tipe 'DD' atau 'LD'
     * @param int $year
     * @param int $month 1-12
     * @param bool $apply true untuk menerapkan perubahan
     * @return array<int, array{id:int, old:?string, new:string, date:string}>
     */
    public function renumberMonth(string $tipe, int $year, int $month, bool $apply = false): array
    {
        $tipe = strtoupper($tipe);
        if (! in_array($tipe, ['DD', 'LD'], true)) {
            throw new \InvalidArgumentException('Tipe harus DD atau LD');
        }
        if ($year < 2000 || $year > 2100) {
            throw new \InvalidArgumentException('Tahun tidak valid');
        }
        if ($month < 1 || $month > 12) {
            throw new \InvalidArgumentException('Bulan tidak valid');
        }

        $modelClass = $tipe === 'DD' ? \App\Models\SppdDalamDaerah::class : \App\Models\SppdLuarDaerah::class;
        $dateField = $tipe === 'DD' ? 'tanggal_spt' : 'tanggal_berangkat';

        $records = $modelClass::query()
            ->whereYear($dateField, $year)
            ->whereMonth($dateField, $month)
            ->orderBy($dateField, 'asc')
            ->orderBy('id', 'asc')
            ->get();

        if ($records->isEmpty()) {
            return [];
        }

        $parseBase = static function (?string $nomor): ?int {
            if (empty($nomor)) {
                return null;
            }
            $parts = explode('/', $nomor);
            if (count($parts) < 2) {
                return null;
            }
            $numberPart = $parts[1];
            if (preg_match('/^(\d+)$/', $numberPart, $m)) {
                return (int) $m[1];
            }
            if (preg_match('/^(\d+)\.[a-z]$/', $numberPart, $m)) {
                return (int) $m[1];
            }
            return null;
        };

        // Tentukan starting base number sesuai aturan masing-masing tipe
        $startingBase = null;
        if ($tipe === 'DD') {
            // Kontinuitas tahunan: mulai dari base number terbesar sebelum awal bulan + 1
            $firstDayOfMonth = Carbon::create($year, $month, 1)->startOfDay();
            $prevRecords = $modelClass::query()
                ->whereYear($dateField, $year)
                ->where($dateField, '<', $firstDayOfMonth)
                ->get(['nomor_spt']);

            $maxBefore = 0;
            foreach ($prevRecords as $r) {
                $b = $parseBase($r->nomor_spt);
                if ($b !== null) {
                    $maxBefore = max($maxBefore, $b);
                }
            }

            $startingBase = $maxBefore + 1;
        } else {
            $firstDayOfMonth = Carbon::create($year, $month, 1)->startOfDay();
            $prevRecords = $modelClass::query()
                ->whereYear($dateField, $year)
                ->where($dateField, '<', $firstDayOfMonth)
                ->get(['nomor_spt']);
            $maxBefore = 0;
            foreach ($prevRecords as $r) {
                $b = $parseBase($r->nomor_spt);
                if ($b !== null) {
                    $maxBefore = max($maxBefore, $b);
                }
            }
            $startingBase = $maxBefore + 1;
        }

        // Kelompok per tanggal
        $byDate = [];
        foreach ($records as $r) {
            $dateKey = Carbon::parse($r->{$dateField})->format('Y-m-d');
            $byDate[$dateKey] = $byDate[$dateKey] ?? [];
            $byDate[$dateKey][] = $r;
        }
        ksort($byDate);

        $currentBase = $startingBase;
        $changes = [];
        $prefix = '800.1.11.1';

        foreach ($byDate as $dateKey => $rows) {
            usort($rows, fn ($a, $b) => $a->id <=> $b->id);

            $letters = range('a', 'z');
            $letterIdx = 0;

            foreach ($rows as $idx => $row) {
                $baseStr = str_pad((string) $currentBase, 3, '0', STR_PAD_LEFT);
                $numberPart = $idx === 0 ? $baseStr : ($baseStr . '.' . $letters[$letterIdx++]);

                $recYear = Carbon::parse($row->{$dateField})->format('Y');
                $newNomor = sprintf('%s/%s/%s/%s', $prefix, $numberPart, $tipe, $recYear);

                if ($row->nomor_spt !== $newNomor) {
                    $changes[] = [
                        'id' => $row->id,
                        'old' => $row->nomor_spt,
                        'new' => $newNomor,
                        'date' => $dateKey,
                    ];
                    if ($apply) {
                        $row->nomor_spt = $newNomor;
                        $row->save();
                    }
                }
            }
            $currentBase++;
        }

        return $changes;
    }
}



