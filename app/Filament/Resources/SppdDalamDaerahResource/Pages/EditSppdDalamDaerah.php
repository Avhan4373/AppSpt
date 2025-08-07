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
        $user = auth()->user();
         if ($user->hasRole('super_admin') || $user->hasRole('admin')) {
        return [
            Actions\DeleteAction::make(),
        ];
    }else{
        // Actions\DeleteAction::make(),
        return [
            Actions\CreateAction::make('back')
                ->label('Kembali')
                ->color('gray')
                ->url(SppdDalamDaerahResource::getUrl('index')),
        ];
    }

    return []; // Tidak menampilkan tombol apapun untuk role lainnya
        // return [
        //     Actions\DeleteAction::make(),
        // ];
            
    }
}
