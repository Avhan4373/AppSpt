<?php

namespace App\Filament\Resources\RincianKategoriResource\Pages;

use App\Filament\Resources\RincianKategoriResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRincianKategori extends EditRecord
{
    protected static string $resource = RincianKategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
