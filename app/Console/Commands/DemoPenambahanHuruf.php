<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use App\Helpers\NomorSuratHelper;
use Carbon\Carbon;

class DemoPenambahanHuruf extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:penambahan-huruf {--tipe=DD} {--bulan=4} {--tahun=2025}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo skenario penambahan huruf untuk nomor SPT';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tipe = $this->option('tipe'); // DD atau LD
        $bulan = $this->option('bulan');
        $tahun = $this->option('tahun');
        
        $this->info("Demo skenario penambahan huruf untuk nomor SPT");
        $this->info("Tipe: {$tipe}");
        $this->info("Bulan: {$bulan}, Tahun: {$tahun}");
        $this->line('');
        
        // Tentukan model berdasarkan tipe
        $modelClass = $tipe === 'DD' ? SppdDalamDaerah::class : SppdLuarDaerah::class;
        $tanggalField = $tipe === 'DD' ? 'tanggal_spt' : 'tanggal_berangkat';
        
        // Ambil data untuk bulan yang dipilih
        $records = $modelClass::whereYear($tanggalField, $tahun)
            ->whereMonth($tanggalField, $bulan)
            ->orderBy('id', 'asc')
            ->get();
            
        if ($records->count() > 0) {
            $this->info("Data yang ada untuk bulan " . Carbon::create($tahun, $bulan, 1)->format('F Y') . ":");
            $this->line('');
            
            $this->table(['ID', 'Nomor SPT', 'Tanggal'], $records->map(function ($record) use ($tanggalField) {
                return [
                    $record->id,
                    $record->nomor_spt,
                    $record->$tanggalField->format('Y-m-d')
                ];
            })->toArray());
            
            $this->line('');
            
            // Analisis penomoran
            $this->info("Analisis penomoran:");
            $this->line('');
            
            $nomorGroups = [];
            foreach ($records as $record) {
                if (!$record->nomor_spt) continue;
                
                $parts = explode('/', $record->nomor_spt);
                if (count($parts) >= 2) {
                    $numberPart = $parts[1];
                    
                    if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $matches)) {
                        // Format dengan huruf
                        $baseNumber = $matches[1];
                        $letter = $matches[2];
                        
                        if (!isset($nomorGroups[$baseNumber])) {
                            $nomorGroups[$baseNumber] = [];
                        }
                        $nomorGroups[$baseNumber][] = $letter;
                    } else {
                        // Format tanpa huruf
                        $baseNumber = $numberPart;
                        if (!isset($nomorGroups[$baseNumber])) {
                            $nomorGroups[$baseNumber] = [];
                        }
                    }
                }
            }
            
            // Tampilkan analisis
            foreach ($nomorGroups as $baseNumber => $letters) {
                if (empty($letters)) {
                    $this->line("Nomor {$baseNumber}: (tanpa huruf)");
                } else {
                    sort($letters);
                    $this->line("Nomor {$baseNumber}: " . implode(', ', $letters));
                }
            }
            
            $this->line('');
            
            // Simulasi penambahan huruf
            $this->info("Simulasi penambahan huruf:");
            $this->line('');
            
            // Ambil nomor terbesar
            $maxNumber = '000';
            $maxNumberWithLetter = null;
            
            foreach ($records as $record) {
                if (!$record->nomor_spt) continue;
                
                $parts = explode('/', $record->nomor_spt);
                if (count($parts) >= 2) {
                    $numberPart = $parts[1];
                    
                    if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $matches)) {
                        $baseNumber = $matches[1];
                        $letter = $matches[2];
                        
                        if (intval($baseNumber) > intval($maxNumber)) {
                            $maxNumber = $baseNumber;
                            $maxNumberWithLetter = $numberPart;
                        } elseif (intval($baseNumber) == intval($maxNumber)) {
                            if (!$maxNumberWithLetter || ord($letter) > ord(substr($maxNumberWithLetter, -1))) {
                                $maxNumberWithLetter = $numberPart;
                            }
                        }
                    } else {
                        if (intval($numberPart) > intval($maxNumber)) {
                            $maxNumber = $numberPart;
                            $maxNumberWithLetter = null;
                        }
                    }
                }
            }
            
            $this->line("Nomor terbesar saat ini: " . ($maxNumberWithLetter ?: $maxNumber));
            
            // Simulasi beberapa penambahan
            $currentNumber = $maxNumberWithLetter ?: $maxNumber;
            $this->line('');
            $this->line("Simulasi penambahan:");
            
            for ($i = 1; $i <= 5; $i++) {
                if (preg_match('/^(\d+)\.([a-z])$/', $currentNumber, $matches)) {
                    $baseNumber = intval($matches[1]);
                    $lastLetter = $matches[2];
                    
                    if ($lastLetter === 'z') {
                        $newBaseNumber = $baseNumber + 1;
                        $newLetter = 'a';
                    } else {
                        $newBaseNumber = $baseNumber;
                        $newLetter = chr(ord($lastLetter) + 1);
                    }
                    
                    $currentNumber = str_pad($newBaseNumber, 3, '0', STR_PAD_LEFT) . '.' . $newLetter;
                } else {
                    $baseNumber = intval($currentNumber);
                    $currentNumber = str_pad($baseNumber + 1, 3, '0', STR_PAD_LEFT);
                }
                
                $nomorSpt = "800.1.11.1/{$currentNumber}/{$tipe}/{$tahun}";
                $this->line("  {$i}. {$nomorSpt}");
            }
            
        } else {
            $this->line("Tidak ada data untuk bulan " . Carbon::create($tahun, $bulan, 1)->format('F Y'));
            $this->line("Akan mulai dari: 800.1.11.1/001/{$tipe}/{$tahun}");
        }
        
        return 0;
    }
} 