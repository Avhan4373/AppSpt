<?php

namespace App\Filament\Exports;

use App\Models\SuratMasuk;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;


class SuratMasukExporter extends Exporter
{
    protected static ?string $model = SuratMasuk::class;

    // Tambahkan maksimum rows

    public static function getColumns(): array
    {
        $total = SuratMasuk::count(); // Hitung total data

        return [
            ExportColumn::make('id')
                ->label("No"),
            ExportColumn::make('nomor_surat'),
            ExportColumn::make('pengirim'),
            ExportColumn::make('tanggal_surat')
                ->formatStateUsing(fn ($state) => date('d-m-Y', strtotime($state))),
            ExportColumn::make('perihal'),
            ExportColumn::make('created_at'),
            ExportColumn::make('updated_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your surat masuk export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }

}
