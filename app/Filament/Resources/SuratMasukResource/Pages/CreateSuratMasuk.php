<?php

namespace App\Filament\Resources\SuratMasukResource\Pages;

use App\Filament\Resources\SuratMasukResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSuratMasuk extends CreateRecord
{

    protected static string $resource = SuratMasukResource::class;

    public function getTitle(): string
    {
        return 'Tambah Surat Masuk';
    }

}
