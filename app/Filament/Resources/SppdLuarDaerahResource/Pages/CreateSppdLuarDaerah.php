<?php

namespace App\Filament\Resources\SppdLuarDaerahResource\Pages;

use App\Filament\Resources\SppdLuarDaerahResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSppdLuarDaerah extends CreateRecord
{
    protected static string $resource = SppdLuarDaerahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make('back')
                ->label('Kembali')
                ->color('primary')
                ->url(SppdLuarDaerahResource::getUrl('index')),
        ];
        
    }
}
