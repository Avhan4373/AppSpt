<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SppdDalamDaerah extends BaseWidget
{
    protected static ?int $sort = 4;
    protected function getStats(): array
    {
        $lastSptDalamDaerah = \App\Models\SppdDalamDaerah::latest('created_at')
            ->first();
        $nomorSppdDalamDaerah = $lastSptDalamDaerah ? $lastSptDalamDaerah->nomor_spt : 'Belum ada SPT';
        return [
            Stat::make('SPT Dalam Daerah', $nomorSppdDalamDaerah)
                ->description('Nomor Terakhir SPT Dalam Daerah')
                ->descriptionIcon('heroicon-o-inbox-arrow-down')
                ->chart([1,3,5,10,20,40])
                ->color('primary'),
        ];
    }
}
