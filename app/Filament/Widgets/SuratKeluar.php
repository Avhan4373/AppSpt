<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\HtmlString;

class SuratKeluar extends BaseWidget
{
    protected function getStats(): array
    {
        // Ambil data surat keluar terakhir beserta relasinya
        $lastSuratKeluar = \App\Models\SuratKeluar::with(['category', 'SubKategori', 'RincianKategori'])
            ->latest('created_at')
            ->first();

        // Gunakan method getFullNomorSuratAttribute untuk mendapatkan nomor lengkap
        $nomorLengkap = $lastSuratKeluar ? "<span style='font-size: 25px;'>{$lastSuratKeluar->getFullNomorSuratAttribute()}</span>" : 'Belum ada surat';

        $lastSuratMasuk = \App\Models\SuratMasuk::latest('created_at')
            ->first();
        $nomorMasuk = $lastSuratMasuk ? $lastSuratMasuk->nomor_surat : 'Belum ada Surat masuk';

        return [
            Stat::make('Total User', User::count())
                ->description('Jumlah User Terdaftar')
                ->descriptionIcon('heroicon-o-users')
                ->chart([1,3,5,10,20,40])
                ->color('success'),
            Stat::make('Surat Keluar', new HtmlString($nomorLengkap)) // Gunakan HtmlString untuk render HTML
                ->description('Nomor Terakhir Surat Keluar')
                ->descriptionIcon('heroicon-o-inbox')
                ->chart([1,3,5,10,20,40])
                ->color('danger')
                ->extraAttributes([
                    'class' => 'small-text', // Gunakan class CSS yang sudah dibuat
                ]),
            Stat::make('Surat Masuk Terakhir', $nomorMasuk)
                ->description('Nomor Terakhir Surat Masuk')
                ->descriptionIcon('heroicon-o-inbox-arrow-down')
                ->chart([1,3,5,10,20,40])
                ->color('primary'),


        ];
    }
}
