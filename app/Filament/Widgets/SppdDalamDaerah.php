<?php
namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SppdDalamDaerah extends BaseWidget
{
    protected static ?int $sort = 4;

    protected function getStats(): array
    {
        // Ambil data SPT Dalam Daerah terakhir
        $lastSptDalamDaerah = \App\Models\SppdDalamDaerah::latest('created_at')->first();
        $nomorSppdDalamDaerah = $lastSptDalamDaerah 
            ? "<span style='font-size: 20px;'>{$lastSptDalamDaerah->nomor_spt}</span>" 
            : "<span style='font-size: 20px;'>Belum ada SPT</span>";

        // Ambil data SPT Luar Daerah terakhir
        $lastSptLuarDaerah = \App\Models\SppdLuarDaerah::latest('created_at')->first();
        $nomorSppdLuarDaerah = $lastSptLuarDaerah 
            ? "<span style='font-size: 20px;'>{$lastSptLuarDaerah->nomor_spt}</span>" 
            : "<span style='font-size: 20px;'>Belum ada SPT</span>";

        return [
            Stat::make('SPT Dalam Daerah', new \Illuminate\Support\HtmlString($nomorSppdDalamDaerah))
                ->description(new \Illuminate\Support\HtmlString("<span style='font-size: 13px;'>Nomor Terakhir SPT Dalam Daerah</span>"))
                ->descriptionIcon('heroicon-o-inbox-arrow-down')
                ->chart([1, 3, 5, 10, 20, 40])
                ->color('info')
                ->extraAttributes([
                    'style' => 'font-size: 20px;', // Mengubah ukuran font menjadi 12px
                ]),
            Stat::make('SPT Luar Daerah', new \Illuminate\Support\HtmlString($nomorSppdLuarDaerah))
                ->description(new \Illuminate\Support\HtmlString("<span style='font-size: 13px;'>Nomor Terakhir SPT Luar Daerah</span>"))
                ->descriptionIcon('heroicon-o-inbox-arrow-down')
                ->chart([1, 3, 5, 10, 20, 40])
                ->color('success')
                ->extraAttributes([
                    'style' => 'font-size: 20px;', // Mengubah ukuran font menjadi 12px
                ]),
        ];
    }
}