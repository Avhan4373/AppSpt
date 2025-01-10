<?php

namespace App\Filament\Resources\RincianKategoriResource\Pages;

use App\Filament\Resources\RincianKategoriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRincianKategoris extends ListRecords
{
    protected static string $resource = RincianKategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
