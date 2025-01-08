<?php

namespace App\Filament\Resources;

use App\Filament\Exports\SuratMasukExporter;
use App\Filament\Resources\SuratMasukResource\Pages;
use App\Filament\Resources\SuratMasukResource\RelationManagers;
use App\Models\SuratMasuk;
use Filament\Actions\ExportAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Arr; // Import Arr class
use Illuminate\Support\Facades\URL;

class SuratMasukResource extends Resource
{
    protected static ?string $model = SuratMasuk::class;
    protected static ?string $navigationGroup = "Management Surat";
    protected static ?string $navigationLabel = "Surat Masuk";
    protected static ?string $pluralLabel = "Surat Masuk";
    protected static ?string $modelLabel = "Surat Masuk";

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_surat'),
                Forms\Components\TextInput::make('pengirim'),
                Forms\Components\DatePicker::make('tanggal_surat'),
                Forms\Components\Textarea::make('perihal'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                Tables\Actions\ExportAction::make()
                    ->exporter(SuratMasukExporter::class),
                    Action::make('generatePdf')
                    ->label('Generate PDF')
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(function () {
                        // Ambil query parameter terkini
                        $queryParams = request()->query('tableFilters');
                        $newQueryParams = [];
                        if ($queryParams) {
                            foreach ($queryParams as $key => $filter) {
                                if (is_array($filter)) {
                                    if (isset($filter['value'])) {
                                        $newQueryParams[$key] = $filter['value'];
                                    }
                                    if (isset($filter['from'])) {
                                        $newQueryParams[$key . '_dari'] = $filter['from'];
                                    }
                                    if (isset($filter['to'])) {
                                        $newQueryParams[$key . '_sampai'] = $filter['to'];
                                    }
                                }
                            }
                        }

                        // Redirect ke route dengan query parameter terbaru
                        return route('generate.pdf', $newQueryParams);
                    })
                    ->openUrlInNewTab()


            ])
            ->columns([
                Tables\Columns\TextColumn::make('no')
                    ->rowIndex(),
                Tables\Columns\TextColumn::make('nomor_surat'),
                Tables\Columns\TextColumn::make('pengirim'),
                Tables\Columns\TextColumn::make('tanggal_surat'),
                Tables\Columns\TextColumn::make('perihal'),
            ])
            ->filters([
                SelectFilter::make('nomor_surat')
                ->label('Nomor Surat')
                ->options(fn(): array => SuratMasuk::distinct()->pluck('nomor_surat', 'nomor_surat')->toArray())
                ->searchable()
                ->preload(),
                SelectFilter::make('pengirim')
                    ->label('Pengirim')
                    ->options(fn(): array => SuratMasuk::distinct()->pluck('pengirim', 'pengirim')->toArray())
                    ->searchable()
                    ->preload(),
                Filter::make('tanggal_surat')
                    ->form([
                        Forms\Components\DatePicker::make('tanggal_dari')
                            ->label('Dari Tanggal'),
                        Forms\Components\DatePicker::make('tanggal_sampai')
                            ->label('Sampai Tanggal'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['tanggal_dari'],
                                fn (Builder $query, $date): Builder => $query->whereDate('tanggal_surat', '>=', $date),
                            )
                            ->when(
                                $data['tanggal_sampai'],
                                fn (Builder $query, $date): Builder => $query->whereDate('tanggal_surat', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->label('Hapus'),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);

    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSuratMasuks::route('/'),
            'create' => Pages\CreateSuratMasuk::route('/create'),
            'edit' => Pages\EditSuratMasuk::route('/{record}/edit'),
        ];
    }
}
