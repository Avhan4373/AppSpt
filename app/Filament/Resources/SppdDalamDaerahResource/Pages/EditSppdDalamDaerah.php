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

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Pastikan nomor_spt terisi jika tanggal_spt ada
        if (isset($data['tanggal_spt']) && (!isset($data['nomor_spt']) || empty($data['nomor_spt']))) {
            $tanggalSpt = \Carbon\Carbon::parse($data['tanggal_spt']);
            $data['nomor_spt'] = \App\Models\SppdDalamDaerah::generateNomorSptByDate($tanggalSpt);
        }
        
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Pastikan nomor_spt ter-generate jika tanggal_spt ada
        if (isset($data['tanggal_spt'])) {
            $tanggalSpt = \Carbon\Carbon::parse($data['tanggal_spt']);
            $data['nomor_spt'] = \App\Models\SppdDalamDaerah::generateNomorSptByDate($tanggalSpt);
        }
        
        return $data;
    }
}
