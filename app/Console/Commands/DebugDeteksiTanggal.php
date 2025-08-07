<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use App\Helpers\NomorSuratHelper;
use Carbon\Carbon;

class DebugDeteksiTanggal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'debug:deteksi-tanggal {--tipe=DD} {--tanggal=} {--bulan=} {--tahun=2025}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Debug deteksi tanggal dan penomoran surat';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tipe = $this->option('tipe'); // DD atau LD
        $tanggal = $this->option('tanggal');
        $bulan = $this->option('bulan');
        $tahun = $this->option('tahun');
        
        $this->info("=== DEBUG DETEKSI TANGGAL ===");
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
            ->orderBy('id', 'asc')
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
                ->orderBy($tanggalField, 'asc')
                ->orderBy('id', 'asc')
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
                $this->info("Analisis penomoran untuk bulan ini:");
                
                // Analisis masalah penomoran
                $this->analyzeNumberingIssue($monthRecords, $tanggalField);
            } else {
                $this->line("Tidak ada data untuk bulan " . Carbon::create($tahun, $bulan, 1)->format('F Y'));
            }
        }
        
        // Jika ada parameter tanggal, test generate nomor
        if ($tanggal) {
            $this->line('');
            $this->info("=== TEST GENERATE NOMOR UNTUK TANGGAL {$tanggal} ===");
            
            $tanggalObj = Carbon::parse($tanggal);
            $generatedNumber = NomorSuratHelper::generateNomorSurat($tanggal, $tipe, $modelClass);
            
            $this->info("Nomor yang di-generate: {$generatedNumber}");
            
            // Tampilkan data untuk tanggal yang sama
            $sameDateRecords = $modelClass::whereDate($tanggalField, $tanggal)
                ->orderBy('id', 'asc')
                ->get(['id', 'nomor_spt', $tanggalField]);
                
            if ($sameDateRecords->count() > 0) {
                $this->line('');
                $this->info("Data untuk tanggal yang sama ({$tanggal}):");
                $this->table(['ID', 'Nomor SPT', 'Tanggal'], $sameDateRecords->map(function ($record) use ($tanggalField) {
                    return [
                        $record->id,
                        $record->nomor_spt,
                        $record->$tanggalField->format('Y-m-d')
                    ];
                })->toArray());
            } else {
                $this->line("Tidak ada data untuk tanggal {$tanggal}");
            }
        }
        
        return 0;
    }
    
    /**
     * Analisis masalah penomoran
     */
    private function analyzeNumberingIssue($records, $tanggalField)
    {
        $this->line('');
        $this->info("=== ANALISIS MASALAH PENOMORAN ===");
        
        // Urutkan berdasarkan tanggal
        $sortedByDate = $records->sortBy($tanggalField);
        
        $this->line("Urutan berdasarkan tanggal:");
        foreach ($sortedByDate as $record) {
            $this->line("- {$record->$tanggalField->format('Y-m-d')}: {$record->nomor_spt}");
        }
        
        $this->line('');
        
        // Cek apakah ada masalah urutan nomor
        $previousNumber = null;
        $issues = [];
        
        foreach ($sortedByDate as $record) {
            if (!$record->nomor_spt) continue;
            
            $parts = explode('/', $record->nomor_spt);
            if (count($parts) >= 2) {
                $currentNumber = $parts[1];
                
                if ($previousNumber !== null) {
                    // Bandingkan nomor
                    $prevNum = intval(preg_replace('/[^0-9]/', '', $previousNumber));
                    $currNum = intval(preg_replace('/[^0-9]/', '', $currentNumber));
                    
                    if ($currNum < $prevNum) {
                        $issues[] = [
                            'tanggal' => $record->$tanggalField->format('Y-m-d'),
                            'nomor' => $record->nomor_spt,
                            'sebelumnya' => $previousNumber,
                            'masalah' => 'Nomor lebih kecil dari tanggal sebelumnya'
                        ];
                    }
                }
                
                $previousNumber = $currentNumber;
            }
        }
        
        if (!empty($issues)) {
            $this->error("DITEMUKAN MASALAH PENOMORAN:");
            foreach ($issues as $issue) {
                $this->error("- Tanggal: {$issue['tanggal']}, Nomor: {$issue['nomor']} (sebelumnya: {$issue['sebelumnya']})");
            }
        } else {
            $this->info("Tidak ada masalah penomoran yang ditemukan.");
        }
    }
} 