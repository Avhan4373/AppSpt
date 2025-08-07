<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use App\Helpers\NomorSuratHelper;
use Carbon\Carbon;

class DebugNomorSurat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'debug:nomor-surat {--tipe=DD} {--tanggal=} {--bulan=} {--tahun=2025}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Debug sistem penomoran surat dan lihat data di database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tipe = $this->option('tipe'); // DD atau LD
        $tanggal = $this->option('tanggal');
        $bulan = $this->option('bulan');
        $tahun = $this->option('tahun');
        
        $this->info("Debug sistem penomoran surat");
        $this->info("Tipe: {$tipe}");
        $this->info("Tahun: {$tahun}");
        $this->line('');
        
        // Tentukan model berdasarkan tipe
        $modelClass = $tipe === 'DD' ? SppdDalamDaerah::class : SppdLuarDaerah::class;
        $tanggalField = $tipe === 'DD' ? 'tanggal_spt' : 'tanggal_berangkat';
        
        // Tampilkan semua data untuk tahun yang dipilih
        $this->info("Data yang ada di database untuk tahun {$tahun}:");
        $this->line('');
        
        $allRecords = $modelClass::whereYear($tanggalField, $tahun)
            ->orderBy($tanggalField, 'asc')
            ->get(['id', 'nomor_spt', $tanggalField]);
            
        if ($allRecords->count() > 0) {
            $this->table(['ID', 'Nomor SPT', 'Tanggal', 'Bulan'], $allRecords->map(function ($record) use ($tanggalField) {
                return [
                    $record->id,
                    $record->nomor_spt,
                    $record->$tanggalField->format('Y-m-d'),
                    $record->$tanggalField->format('F')
                ];
            })->toArray());
        } else {
            $this->line("Tidak ada data untuk tahun {$tahun}");
        }
        
        $this->line('');
        
        // Jika ada parameter bulan, tampilkan data untuk bulan tersebut
        if ($bulan) {
            $this->info("Data untuk bulan " . Carbon::create($tahun, $bulan, 1)->format('F Y') . ":");
            $this->line('');
            
            $monthRecords = $modelClass::whereYear($tanggalField, $tahun)
                ->whereMonth($tanggalField, $bulan)
                ->orderBy('id', 'desc')
                ->get(['id', 'nomor_spt', $tanggalField]);
                
            if ($monthRecords->count() > 0) {
                $this->table(['ID', 'Nomor SPT', 'Tanggal'], $monthRecords->map(function ($record) use ($tanggalField) {
                    return [
                        $record->id,
                        $record->nomor_spt,
                        $record->$tanggalField->format('Y-m-d')
                    ];
                })->toArray());
                
                $this->line('');
                $this->info("Nomor terakhir untuk bulan ini: " . $monthRecords->first()->nomor_spt);
            } else {
                $this->line("Tidak ada data untuk bulan " . Carbon::create($tahun, $bulan, 1)->format('F Y'));
            }
        }
        
        // Jika ada parameter tanggal, test generate nomor
        if ($tanggal) {
            $this->line('');
            $this->info("Testing generate nomor untuk tanggal: {$tanggal}");
            $this->line('');
            
            $tanggalObj = Carbon::parse($tanggal);
            $currentYear = $tanggalObj->format('Y');
            $currentMonth = $tanggalObj->format('m');
            
            $this->line("Bulan: " . $tanggalObj->format('F'));
            $this->line("Tahun: {$currentYear}");
            $this->line('');
            
            // Cari semua record untuk bulan dan tahun ini
            $records = $modelClass::whereYear($tanggalField, $currentYear)
                ->whereMonth($tanggalField, $currentMonth)
                ->get();
                
            if ($records->count() > 0) {
                $this->line("Ditemukan {$records->count()} record untuk bulan " . $tanggalObj->format('F Y'));
                $this->line('');
                
                // Cari nomor terbesar berdasarkan nomor SPT
                $maxNumber = '000';
                $maxNumberWithLetter = null;
                $maxRecord = null;
                
                foreach ($records as $record) {
                    if (!$record->nomor_spt) continue;
                    
                    $parts = explode('/', $record->nomor_spt);
                    if (count($parts) >= 2) {
                        $numberPart = $parts[1];
                        
                        // Cek apakah ada huruf di akhir
                        if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $matches)) {
                            // Format: 088.a
                            $baseNumber = $matches[1];
                            $letter = $matches[2];
                            
                            // Jika base number lebih besar, update max
                            if (intval($baseNumber) > intval($maxNumber)) {
                                $maxNumber = $baseNumber;
                                $maxNumberWithLetter = $numberPart;
                                $maxRecord = $record;
                            } elseif (intval($baseNumber) == intval($maxNumber)) {
                                // Jika base number sama, bandingkan huruf
                                if (!$maxNumberWithLetter || ord($letter) > ord(substr($maxNumberWithLetter, -1))) {
                                    $maxNumberWithLetter = $numberPart;
                                    $maxRecord = $record;
                                }
                            }
                        } else {
                            // Format: 088 (tanpa huruf)
                            if (intval($numberPart) > intval($maxNumber)) {
                                $maxNumber = $numberPart;
                                $maxNumberWithLetter = null;
                                $maxRecord = $record;
                            }
                        }
                    }
                }
                
                if ($maxRecord) {
                    $this->line("Nomor terbesar ditemukan:");
                    $this->line("ID: {$maxRecord->id}");
                    $this->line("Nomor SPT: {$maxRecord->nomor_spt}");
                    $this->line("Tanggal: " . $maxRecord->$tanggalField->format('Y-m-d'));
                    $this->line('');
                    
                    // Parse nomor terakhir
                    $parts = explode('/', $maxRecord->nomor_spt);
                    if (count($parts) >= 2) {
                        $lastNumberPart = $parts[1];
                        $this->line("Bagian nomor: {$lastNumberPart}");
                        
                        // Cek apakah ada huruf
                        if (preg_match('/^(\d+)\.([a-z])$/', $lastNumberPart, $matches)) {
                            $baseNumber = $matches[1];
                            $lastLetter = $matches[2];
                            $this->line("Base number: {$baseNumber}");
                            $this->line("Last letter: {$lastLetter}");
                            
                            // Hitung nomor berikutnya
                            if ($lastLetter === 'z') {
                                $newBaseNumber = intval($baseNumber) + 1;
                                $newLetter = 'a';
                            } else {
                                $newBaseNumber = intval($baseNumber);
                                $newLetter = chr(ord($lastLetter) + 1);
                            }
                            
                            $newNumber = str_pad($newBaseNumber, 3, '0', STR_PAD_LEFT) . '.' . $newLetter;
                            $this->line("Nomor berikutnya: {$newNumber}");
                        } else {
                            $baseNumber = intval($lastNumberPart);
                            $this->line("Base number: {$baseNumber}");
                            
                            $newNumber = str_pad($baseNumber + 1, 3, '0', STR_PAD_LEFT);
                            $this->line("Nomor berikutnya: {$newNumber}");
                        }
                    }
                }
            } else {
                $this->line("Tidak ada nomor terakhir untuk bulan " . $tanggalObj->format('F Y'));
                $this->line("Akan mulai dari: 001");
            }
            
            $this->line('');
            
            // Generate nomor menggunakan helper
            $generatedNomor = NomorSuratHelper::generateNomorSurat($tanggal, $tipe, $modelClass);
            $this->info("Nomor yang di-generate: {$generatedNomor}");
        }
        
        return 0;
    }
} 