<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use App\Helpers\NomorSuratHelper;
use Carbon\Carbon;

class DemoNomorSurat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:nomor-surat {--tipe=DD} {--bulan=7} {--tahun=2025}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo sistem penomoran surat dengan penambahan huruf';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tipe = $this->option('tipe'); // DD atau LD
        $bulan = $this->option('bulan');
        $tahun = $this->option('tahun');
        
        $this->info("Demo sistem penomoran surat untuk tipe: {$tipe}");
        $this->info("Bulan: {$bulan}, Tahun: {$tahun}");
        $this->line('');
        
        // Tentukan model berdasarkan tipe
        $modelClass = $tipe === 'DD' ? SppdDalamDaerah::class : SppdLuarDaerah::class;
        
        // Simulasi beberapa nomor surat untuk bulan yang sama
        $this->info("Simulasi penomoran surat untuk bulan yang sama:");
        $this->line('');
        
        for ($i = 1; $i <= 5; $i++) {
            $tanggal = Carbon::create($tahun, $bulan, $i * 5); // Tanggal 5, 10, 15, 20, 25
            
            // Generate nomor surat
            $nomorBaru = NomorSuratHelper::generateNomorSurat($tanggal->format('Y-m-d'), $tipe, $modelClass);
            
            // Parse nomor untuk mendapatkan bagian nomor saja
            $parsed = NomorSuratHelper::parseNomorSurat($nomorBaru);
            $nomorSaja = $parsed ? $parsed['nomor'] : '001';
            
            $this->line("Tanggal {$tanggal->format('d/m/Y')}: {$nomorBaru}");
        }
        
        $this->line('');
        $this->info("Contoh skenario penambahan huruf:");
        $this->line('');
        
        // Contoh skenario
        $scenarios = [
            ['088', '088.a', '088.b', '088.c'],
            ['089', '089.a', '089.b'],
            ['090', '090.a'],
        ];
        
        foreach ($scenarios as $index => $scenario) {
            $this->line("Skenario " . ($index + 1) . ":");
            foreach ($scenario as $nomor) {
                $nomorSpt = "800.1.11.1/{$nomor}/{$tipe}/{$tahun}";
                $this->line("  - {$nomorSpt}");
            }
            $this->line('');
        }
        
        $this->info("Penjelasan:");
        $this->line("- Sistem akan mencari nomor terakhir untuk bulan dan tahun yang sama");
        $this->line("- Jika ada duplikasi nomor, sistem akan menambahkan huruf (a, b, c, dst.)");
        $this->line("- Ketika huruf mencapai 'z', nomor akan bertambah dan huruf reset ke 'a'");
        $this->line("- Setiap bulan baru akan reset penomoran dari 001");
        
        return 0;
    }
    
    private function isSameBaseNumber($nomorTerakhir, $nomorDenganHuruf)
    {
        // Cek apakah ada nomor dengan base yang sama
        $baseNumber = $this->getBaseNumber($nomorTerakhir);
        foreach ($nomorDenganHuruf as $nomor) {
            if (strpos($nomor, $baseNumber . '.') === 0) {
                return true;
            }
        }
        return false;
    }
    
    private function getBaseNumber($nomorSpt)
    {
        $parts = explode('/', $nomorSpt);
        if (count($parts) >= 2) {
            $nomorPart = $parts[1];
            if (preg_match('/^(\d+)\.([a-z])$/', $nomorPart, $matches)) {
                return $matches[1];
            } else {
                return $nomorPart;
            }
        }
        return '001';
    }
    
    private function getNextLetter($nomorDenganHuruf)
    {
        if (empty($nomorDenganHuruf)) {
            return 'a';
        }
        
        $lastNomor = end($nomorDenganHuruf);
        if (preg_match('/^(\d+)\.([a-z])$/', $lastNomor, $matches)) {
            $lastLetter = $matches[2];
            return chr(ord($lastLetter) + 1);
        }
        
        return 'a';
    }
} 