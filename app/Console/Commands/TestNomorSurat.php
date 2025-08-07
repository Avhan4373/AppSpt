<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use App\Helpers\NomorSuratHelper;
use Carbon\Carbon;

class TestNomorSurat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:nomor-surat {--tipe=DD} {--tanggal=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test sistem penomoran surat';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tipe = $this->option('tipe'); // DD atau LD
        $tanggal = $this->option('tanggal') ?: now()->format('Y-m-d');
        
        $this->info("Testing sistem penomoran surat untuk tipe: {$tipe}");
        $this->info("Tanggal: {$tanggal}");
        $this->line('');
        
        // Tentukan model berdasarkan tipe
        $modelClass = $tipe === 'DD' ? SppdDalamDaerah::class : SppdLuarDaerah::class;
        
        // Generate nomor surat
        $nomorSurat = NomorSuratHelper::generateNomorSurat($tanggal, $tipe, $modelClass);
        
        $this->info("Nomor surat yang dihasilkan: {$nomorSurat}");
        
        // Parse nomor surat
        $parsed = NomorSuratHelper::parseNomorSurat($nomorSurat);
        if ($parsed) {
            $this->line('');
            $this->info("Komponen nomor surat:");
            $this->table(['Komponen', 'Nilai'], [
                ['Prefix', $parsed['prefix']],
                ['Nomor', $parsed['nomor']],
                ['Tipe', $parsed['tipe']],
                ['Tahun', $parsed['tahun']],
            ]);
        }
        
        // Cek apakah nomor sudah ada
        $exists = NomorSuratHelper::isNomorSuratExists($nomorSurat, $modelClass);
        $this->line('');
        $this->info("Nomor surat sudah ada di database: " . ($exists ? 'Ya' : 'Tidak'));
        
        // Tampilkan data yang ada untuk bulan dan tahun yang sama
        $tanggalObj = Carbon::parse($tanggal);
        $field = $tipe === 'DD' ? 'tanggal_spt' : 'tanggal_berangkat';
        
        $existingRecords = $modelClass::whereYear($field, $tanggalObj->year)
            ->whereMonth($field, $tanggalObj->month)
            ->orderBy('id', 'desc')
            ->get(['id', 'nomor_spt', $field]);
            
        if ($existingRecords->count() > 0) {
            $this->line('');
            $this->info("Data yang sudah ada untuk bulan " . $tanggalObj->format('F Y') . ":");
            $this->table(['ID', 'Nomor SPT', 'Tanggal'], $existingRecords->map(function ($record) use ($field) {
                return [
                    $record->id,
                    $record->nomor_spt,
                    $record->$field->format('Y-m-d')
                ];
            })->toArray());
        } else {
            $this->line('');
            $this->info("Belum ada data untuk bulan " . $tanggalObj->format('F Y'));
        }
        
        return 0;
    }
} 