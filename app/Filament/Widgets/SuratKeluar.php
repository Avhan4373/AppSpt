<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SuratKeluar extends BaseWidget
{
    protected function getStats(): array
    {
        $lastSuratKeluar = \App\Models\SuratKeluar::with('category')
            ->latest('created_at')
            ->first();

        $lastNomor = $lastSuratKeluar ? $lastSuratKeluar->nomor_surat : 'Belum ada surat';
        $kode_kategori = $lastSuratKeluar ? $lastSuratKeluar->category->nomor_kategori : 'Belum ada kategori';

        $lastSuratMasuk = \App\Models\SuratMasuk::latest('created_at')
            ->first();
        $nomorMasuk = $lastSuratMasuk ? $lastSuratMasuk->nomor_surat : 'Belum ada Surat masuk';
        return [
            Stat::make('Total User', User::count())
                ->description('Jumlah User Terdaftar')
                ->descriptionIcon('heroicon-o-users')
                ->chart([1,3,5,10,20,40])
                ->color('success'),
            Stat::make('Surat Keluar', $kode_kategori.'/'.$lastNomor)
            ->description('Nomor Terakhir Surat Keluar')
            ->descriptionIcon('heroicon-o-inbox')
                ->chart([1,3,5,10,20,40])
            ->color('danger'),
            Stat::make('Surat Masuk Terakhir', $nomorMasuk)
                ->description('Nomor Terakhir Surat Masuk')
                ->descriptionIcon('heroicon-o-inbox-arrow-down')
                ->chart([1,3,5,10,20,40])
                ->color('primary'),

        ];
    }
}
