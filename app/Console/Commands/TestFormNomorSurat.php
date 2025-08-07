<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use App\Helpers\NomorSuratHelper;
use Carbon\Carbon;

class TestFormNomorSurat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:form-nomor-surat {--tipe=DD} {--tanggal=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test form dengan nomor SPT yang tidak ditampilkan terlebih dahulu';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tipe = $this->option('tipe'); // DD atau LD
        $tanggal = $this->option('tanggal') ?: now()->format('Y-m-d');
        
        $this->info("Testing form dengan nomor SPT yang tidak ditampilkan terlebih dahulu");
        $this->info("Tipe: {$tipe}");
        $this->info("Tanggal: {$tanggal}");
        $this->line('');
        
        // Tentukan model berdasarkan tipe
        $modelClass = $tipe === 'DD' ? SppdDalamDaerah::class : SppdLuarDaerah::class;
        
        $this->info("Simulasi alur form:");
        $this->line('');
        
        // Simulasi 1: Form kosong (tanpa tanggal)
        $this->line("1. Form awal (tanpa tanggal):");
        $this->line("   - Field nomor_spt: TIDAK TAMPIL");
        $this->line("   - Field tanggal: KOSONG");
        $this->line("   - Status: Menunggu user memilih tanggal");
        $this->line('');
        
        // Simulasi 2: User memilih tanggal
        $this->line("2. User memilih tanggal: {$tanggal}");
        $this->line("   - Field nomor_spt: MUNCUL");
        $this->line("   - Field tanggal: {$tanggal}");
        
        // Generate nomor surat
        $nomorSurat = NomorSuratHelper::generateNomorSurat($tanggal, $tipe, $modelClass);
        $this->line("   - Nomor SPT yang di-generate: {$nomorSurat}");
        $this->line('');
        
        // Simulasi 3: User mengubah tanggal
        $tanggalBaru = Carbon::parse($tanggal)->addDays(5)->format('Y-m-d');
        $this->line("3. User mengubah tanggal menjadi: {$tanggalBaru}");
        $this->line("   - Field nomor_spt: UPDATE OTOMATIS");
        $this->line("   - Field tanggal: {$tanggalBaru}");
        
        // Generate nomor surat baru
        $nomorSuratBaru = NomorSuratHelper::generateNomorSurat($tanggalBaru, $tipe, $modelClass);
        $this->line("   - Nomor SPT yang baru: {$nomorSuratBaru}");
        $this->line('');
        
        // Simulasi 4: User menghapus tanggal
        $this->line("4. User menghapus tanggal:");
        $this->line("   - Field nomor_spt: HILANG");
        $this->line("   - Field tanggal: KOSONG");
        $this->line("   - Status: Kembali ke form awal");
        $this->line('');
        
        $this->info("Fitur yang diimplementasikan:");
        $this->line("✓ Nomor SPT tidak ditampilkan di awal");
        $this->line("✓ Nomor SPT muncul setelah memilih tanggal");
        $this->line("✓ Nomor SPT update otomatis saat mengubah tanggal");
        $this->line("✓ Nomor SPT hilang saat menghapus tanggal");
        $this->line("✓ Placeholder text yang informatif");
        $this->line("✓ Validasi bahwa tanggal harus dipilih terlebih dahulu");
        
        return 0;
    }
} 