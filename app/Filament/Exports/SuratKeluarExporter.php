<?php

namespace App\Filament\Exports;

use App\Models\SuratKeluar;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;


class SuratKeluarExporter extends Exporter
{
    protected static ?string $model = SuratKeluar::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id')
                ->label('No'),
//            ExportColumn::make('category.nomor_kategori'),
//            ExportColumn::make('nomor_surat'),
            ExportColumn::make('nomor_lengkap')
                ->label('Nomor Surat')
                ->state(function (SuratKeluar $record): string {
                    return $record->category->nomor_kategori . '/' . $record->nomor_surat;
                }),
            ExportColumn::make('tujuan_surat'),
            ExportColumn::make('tanggal_surat'),
            ExportColumn::make('perihal'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your surat keluar export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
