<?php

namespace App\Filament\Resources\SppdLuarDaerahResource\Pages;

use App\Filament\Resources\SppdLuarDaerahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSppdLuarDaerahs extends ListRecords
{
    protected static string $resource = SppdLuarDaerahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\CreateAction::make('back')
                ->label('Kembali')
                ->color('gray')
                ->url(SppdLuarDaerahResource::getUrl('index')),
        ];
        
    }
}
