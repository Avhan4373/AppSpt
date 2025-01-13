<?php

namespace App\Filament\Resources\SppdLuarDaerahResource\Pages;

use App\Filament\Resources\SppdLuarDaerahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSppdLuarDaerah extends EditRecord
{
    protected static string $resource = SppdLuarDaerahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
