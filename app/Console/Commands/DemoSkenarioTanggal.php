<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use App\Helpers\NomorSuratHelper;
use Carbon\Carbon;

class DemoSkenarioTanggal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:skenario-tanggal {--tipe=DD} {--tanggal=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo berbagai skenario penambahan huruf berdasarkan tanggal';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tipe = $this->option('tipe'); // DD atau LD
        $tanggal = $this->option('tanggal') ?: '2025-04-11';
        
        $this->info("Demo berbagai skenario penambahan huruf berdasarkan tanggal");
        $this->info("Tipe: {$tipe}");
        $this->info("Tanggal: {$tanggal}");
        $this->line('');
        
        // Tentukan model berdasarkan tipe
        $modelClass = $tipe === 'DD' ? SppdDalamDaerah::class : SppdLuarDaerah::class;
        
        $this->info("Skenario 1: Tanggal yang sama dengan nomor tanpa huruf");
        $this->line("Jika tanggal 11 April sudah ada: 800.1.11.1/092/DD/2025");
        $this->line("Maka input baru tanggal 11 April akan menjadi: 800.1.11.1/092.a/DD/2025");
        $this->line('');
        
        $this->info("Skenario 2: Tanggal yang sama dengan nomor dengan huruf");
        $this->line("Jika tanggal 11 April sudah ada: 800.1.11.1/092.a/DD/2025");
        $this->line("Maka input baru tanggal 11 April akan menjadi: 800.1.11.1/092.b/DD/2025");
        $this->line('');
        
        $this->info("Skenario 3: Tanggal yang sama dengan multiple huruf");
        $this->line("Jika tanggal 11 April sudah ada: 800.1.11.1/092.a/DD/2025, 800.1.11.1/092.b/DD/2025");
        $this->line("Maka input baru tanggal 11 April akan menjadi: 800.1.11.1/092.c/DD/2025");
        $this->line('');
        
        $this->info("Skenario 4: Tanggal yang sama dengan huruf 'z'");
        $this->line("Jika tanggal 11 April sudah ada: 800.1.11.1/092.z/DD/2025");
        $this->line("Maka input baru tanggal 11 April akan menjadi: 800.1.11.1/093.a/DD/2025");
        $this->line('');
        
        $this->info("Skenario 5: Tanggal yang berbeda");
        $this->line("Jika tanggal 11 April sudah ada: 800.1.11.1/092/DD/2025");
        $this->line("Maka input tanggal 12 April akan mencari nomor terakhir bulan April");
        $this->line('');
        
        $this->line("=== Test untuk tanggal {$tanggal} ===");
        
        // Test generate nomor
        $generatedNomor = NomorSuratHelper::generateNomorSurat($tanggal, $tipe, $modelClass);
        $this->line("Nomor yang di-generate: {$generatedNomor}");
        
        $this->line('');
        $this->info("Simulasi penambahan berulang untuk tanggal {$tanggal}:");
        
        // Simulasi penambahan berulang
        $currentNumber = '092';
        $this->line("Nomor awal: {$currentNumber}");
        
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
                $currentNumber = str_pad($baseNumber, 3, '0', STR_PAD_LEFT) . '.a';
            }
            
            $nomorSpt = "800.1.11.1/{$currentNumber}/{$tipe}/2025";
            $this->line("  {$i}. {$nomorSpt}");
        }
        
        $this->line('');
        $this->info("Keunggulan sistem:");
        $this->line("✓ Mendeteksi tanggal yang sama secara otomatis");
        $this->line("✓ Menambahkan huruf secara berurutan (a, b, c, dst.)");
        $this->line("✓ Menangani perpindahan nomor saat huruf mencapai 'z'");
        $this->line("✓ Fallback ke penomoran bulan jika tanggal berbeda");
        $this->line("✓ Konsisten untuk semua jenis surat (DD/LD)");
        
        return 0;
    }
} 