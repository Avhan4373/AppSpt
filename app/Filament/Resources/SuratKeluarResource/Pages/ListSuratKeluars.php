<?php

namespace App\Filament\Resources\SuratKeluarResource\Pages;

use App\Filament\Exports\SuratKeluarExporter;
use App\Filament\Resources\SuratKeluarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\ActionGroup;

class ListSuratKeluars extends ListRecords
{
    protected static string $resource = SuratKeluarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah Surat Keluar'),
//            Actions\ExportAction::make()->exporter(SuratKeluarExporter::class),

        ];
    }
}
