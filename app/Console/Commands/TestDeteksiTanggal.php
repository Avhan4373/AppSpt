<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use App\Helpers\NomorSuratHelper;
use Carbon\Carbon;

class TestDeteksiTanggal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:deteksi-tanggal {--tipe=DD} {--tanggal=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test deteksi tanggal yang sama untuk penambahan huruf';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tipe = $this->option('tipe'); // DD atau LD
        $tanggal = $this->option('tanggal') ?: '2025-04-11';
        
        $this->info("Test deteksi tanggal yang sama untuk penambahan huruf");
        $this->info("Tipe: {$tipe}");
        $this->info("Tanggal: {$tanggal}");
        $this->line('');
        
        // Tentukan model berdasarkan tipe
        $modelClass = $tipe === 'DD' ? SppdDalamDaerah::class : SppdLuarDaerah::class;
        $tanggalField = $tipe === 'DD' ? 'tanggal_spt' : 'tanggal_berangkat';
        
        $tanggalObj = Carbon::parse($tanggal);
        
        // Cari data untuk tanggal yang sama
        $sameDateRecords = $modelClass::whereDate($tanggalField, $tanggal)
            ->orderBy('id', 'asc')
            ->get();
            
        if ($sameDateRecords->count() > 0) {
            $this->info("Data yang ada untuk tanggal {$tanggal}:");
            $this->line('');
            
            $this->table(['ID', 'Nomor SPT', 'Tanggal'], $sameDateRecords->map(function ($record) use ($tanggalField) {
                return [
                    $record->id,
                    $record->nomor_spt,
                    $record->$tanggalField->format('Y-m-d')
                ];
            })->toArray());
            
            $this->line('');
            
            // Analisis nomor yang sama pada tanggal yang sama
            $this->info("Analisis nomor yang sama pada tanggal {$tanggal}:");
            $this->line('');
            
            $sameDateNumbers = [];
            
            foreach ($sameDateRecords as $record) {
                if (!$record->nomor_spt) continue;
                
                $parts = explode('/', $record->nomor_spt);
                if (count($parts) >= 2) {
                    $numberPart = $parts[1];
                    
                    if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $matches)) {
                        // Format dengan huruf
                        $baseNumber = $matches[1];
                        $letter = $matches[2];
                        
                        if (!isset($sameDateNumbers[$baseNumber])) {
                            $sameDateNumbers[$baseNumber] = [];
                        }
                        $sameDateNumbers[$baseNumber][] = $letter;
                    } else {
                        // Format tanpa huruf
                        $baseNumber = $numberPart;
                        if (!isset($sameDateNumbers[$baseNumber])) {
                            $sameDateNumbers[$baseNumber] = [];
                        }
                    }
                }
            }
            
            // Tampilkan analisis
            foreach ($sameDateNumbers as $baseNumber => $letters) {
                if (empty($letters)) {
                    $this->line("Nomor {$baseNumber}: (tanpa huruf)");
                } else {
                    sort($letters);
                    $this->line("Nomor {$baseNumber}: " . implode(', ', $letters));
                }
            }
            
            $this->line('');
            
            // Cari nomor yang paling sering digunakan
            $mostUsedNumber = null;
            $maxCount = 0;
            
            foreach ($sameDateNumbers as $baseNumber => $letters) {
                $count = count($letters);
                if ($count > $maxCount) {
                    $maxCount = $count;
                    $mostUsedNumber = $baseNumber;
                }
            }
            
            if ($mostUsedNumber) {
                $this->info("Nomor yang paling sering digunakan pada tanggal {$tanggal}: {$mostUsedNumber}");
                $letters = $sameDateNumbers[$mostUsedNumber];
                
                if (empty($letters)) {
                    $this->line("Status: Tanpa huruf");
                    $this->line("Nomor berikutnya: {$mostUsedNumber}.a");
                } else {
                    sort($letters);
                    $lastLetter = end($letters);
                    $this->line("Status: Dengan huruf " . implode(', ', $letters));
                    
                    if ($lastLetter === 'z') {
                        $newBaseNumber = intval($mostUsedNumber) + 1;
                        $this->line("Nomor berikutnya: {$newBaseNumber}.a (karena huruf terakhir adalah 'z')");
                    } else {
                        $nextLetter = chr(ord($lastLetter) + 1);
                        $this->line("Nomor berikutnya: {$mostUsedNumber}.{$nextLetter}");
                    }
                }
            }
            
        } else {
            $this->line("Tidak ada data untuk tanggal {$tanggal}");
            $this->line("Akan mencari nomor terakhir untuk bulan " . $tanggalObj->format('F Y'));
            
            // Cari data untuk bulan yang sama
            $monthRecords = $modelClass::whereYear($tanggalField, $tanggalObj->year)
                ->whereMonth($tanggalField, $tanggalObj->month)
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get();
                
            if ($monthRecords->count() > 0) {
                $this->line('');
                $this->info("Data terakhir untuk bulan " . $tanggalObj->format('F Y') . ":");
                $this->line('');
                
                $this->table(['ID', 'Nomor SPT', 'Tanggal'], $monthRecords->map(function ($record) use ($tanggalField) {
                    return [
                        $record->id,
                        $record->nomor_spt,
                        $record->$tanggalField->format('Y-m-d')
                    ];
                })->toArray());
            }
        }
        
        $this->line('');
        
        // Test generate nomor menggunakan helper
        $generatedNomor = NomorSuratHelper::generateNomorSurat($tanggal, $tipe, $modelClass);
        $this->info("Nomor yang di-generate: {$generatedNomor}");
        
        $this->line('');
        $this->info("Logika yang diterapkan:");
        $this->line("1. Cek apakah ada data untuk tanggal yang sama");
        $this->line("2. Jika ada, cari nomor yang paling sering digunakan");
        $this->line("3. Jika nomor tanpa huruf, tambahkan huruf 'a'");
        $this->line("4. Jika nomor dengan huruf, tambahkan huruf berikutnya");
        $this->line("5. Jika tidak ada data untuk tanggal yang sama, cari nomor terakhir untuk bulan yang sama");
        
        return 0;
    }
} 