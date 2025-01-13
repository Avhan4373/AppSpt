<?php

namespace App\Filament\Resources\SppdDalamDaerahResource\Pages;

use App\Filament\Resources\SppdDalamDaerahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSppdDalamDaerah extends EditRecord
{
    protected static string $resource = SppdDalamDaerahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
