<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class RenumberNomorSpt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Options:
     *  --tipe=DD|LD        Jenis SPT (DD: Dalam Daerah, LD: Luar Daerah)
     *  --year=YYYY         Tahun target (wajib)
     *  --month=MM          Bulan target 1-12 (wajib)
     *  --apply             Terapkan perubahan (tanpa opsi ini hanya dry-run)
     */
    protected $signature = 'spt:renumber {--tipe=DD} {--year=} {--month=} {--apply}';

    /**
     * The console command description.
     */
    protected $description = 'Renumber nomor SPT untuk satu bulan berdasarkan urutan tanggal (menangani penyisipan tanggal di tengah).';

    public function handle(): int
    {
        $tipe = strtoupper((string) $this->option('tipe'));
        $year = (int) ($this->option('year') ?? 0);
        $month = (int) ($this->option('month') ?? 0);
        $apply = (bool) $this->option('apply');

        if (! in_array($tipe, ['DD', 'LD'], true)) {
            $this->error('Opsi --tipe harus DD atau LD');
            return self::INVALID;
        }
        if ($year < 2000 || $year > 2100) {
            $this->error('Opsi --year tidak valid. Contoh: --year=2025');
            return self::INVALID;
        }
        if ($month < 1 || $month > 12) {
            $this->error('Opsi --month tidak valid. Contoh: --month=7');
            return self::INVALID;
        }

        // Tentukan model dan field tanggal
        $modelClass = $tipe === 'DD' ? \App\Models\SppdDalamDaerah::class : \App\Models\SppdLuarDaerah::class;
        $dateField = $tipe === 'DD' ? 'tanggal_spt' : 'tanggal_berangkat';

        // Ambil semua record di bulan yang dituju
        $records = $modelClass::query()
            ->whereYear($dateField, $year)
            ->whereMonth($dateField, $month)
            ->orderBy($dateField, 'asc')
            ->orderBy('id', 'asc')
            ->get();

        if ($records->isEmpty()) {
            $this->info('Tidak ada data pada bulan tersebut.');
            return self::SUCCESS;
        }

        // Helper: parse base number (e.g., 080 from 080.a)
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

        // Tentukan starting base number
        $startingBase = null;
        if ($tipe === 'DD') {
            // DD: reset bulanan. Mulai dari minimum base number bulan berjalan jika ada, selain itu 1
            foreach ($records as $r) {
                $b = $parseBase($r->nomor_spt);
                if ($b !== null) {
                    $startingBase = $startingBase === null ? $b : min($startingBase, $b);
                }
            }
            if ($startingBase === null) {
                $startingBase = 1;
            }
        } else {
            // LD: lanjutkan dari nomor terbesar sebelum awal bulan (kontinuitas tahunan)
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

        // Proses renumber: kelompokkan per tanggal
        $byDate = [];
        foreach ($records as $r) {
            $dateKey = Carbon::parse($r->{$dateField})->format('Y-m-d');
            $byDate[$dateKey] = $byDate[$dateKey] ?? [];
            $byDate[$dateKey][] = $r;
        }

        ksort($byDate); // memastikan urut tanggal

        $currentBase = $startingBase;
        $changes = [];
        $prefix = '800.1.11.1';

        foreach ($byDate as $dateKey => $rows) {
            // urutkan stabil per ID agar deterministik
            usort($rows, fn ($a, $b) => $a->id <=> $b->id);

            $letters = range('a', 'z');
            $letterIdx = 0;

            foreach ($rows as $idx => $row) {
                $baseStr = str_pad((string) $currentBase, 3, '0', STR_PAD_LEFT);
                $numberPart = $idx === 0 ? $baseStr : ($baseStr . '.' . $letters[$letterIdx++]);

                // Tahun mengikuti tahun tanggal record
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

        if (empty($changes)) {
            $this->info('Tidak ada perubahan diperlukan. Nomor sudah konsisten.');
        } else {
            $this->line(($apply ? 'Diterapkan' : 'Dry-run') . ' perubahan:');
            foreach ($changes as $c) {
                $this->line(sprintf(' - ID %s [%s]: %s => %s', $c['id'], $c['date'], $c['old'] ?? '(null)', $c['new']));
            }
            if (! $apply) {
                $this->warn('Tambahkan opsi --apply untuk menerapkan perubahan.');
            }
        }

        return self::SUCCESS;
    }
}


