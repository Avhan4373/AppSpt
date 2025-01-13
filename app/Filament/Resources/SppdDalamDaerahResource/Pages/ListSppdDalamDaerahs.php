<?php

namespace App\Filament\Resources\SppdDalamDaerahResource\Pages;

use App\Filament\Resources\SppdDalamDaerahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSppdDalamDaerahs extends ListRecords
{
    protected static string $resource = SppdDalamDaerahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
