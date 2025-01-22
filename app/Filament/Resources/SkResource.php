<?php

namespace App\Filament\Resources;

use App\Filament\Exports\SuratMasukExporter;
use App\Filament\Resources\SkResource\Pages;
use App\Filament\Resources\SkResource\RelationManagers;
use App\Models\Sk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkResource extends Resource
{
    protected static ?string $model = Sk::class;
    protected static ?string $navigationGroup = "Management Surat";
    protected static ?string $navigationLabel = "SK";
    protected static ?string $pluralLabel = "SK";
    protected static ?string $pluralModelLabel = "SK";
    protected static ?string $modelLabel = "SK";
    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_sk')
                    ->default(function () {
                        // Mengambil nomor SK terakhir
                        $lastSk = Sk::whereYear('tanggal_sk', date('Y'))
                            ->orderBy('id', 'desc')
                            ->first();

                        // Jika belum ada SK di tahun ini
                        if (!$lastSk) {
                            return '001 TAHUN ' . date('Y');
                        }

                        // Mengambil nomor urut dari nomor SK terakhir
                        $lastNumber = (int) substr($lastSk->nomor_sk, 0, 3);
                        $nextNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);

                        return $nextNumber . ' TAHUN ' . date('Y');
                    })
                    ->disabled()
                    ->dehydrated(true), // Pastikan nilai tetap disimpan meskipun disabled
                Forms\Components\DatePicker::make('tanggal_sk')
                    ->default(now())
                    ->required(),
                Forms\Components\Textarea::make('perihal')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                Tables\Actions\ExportAction::make()
                    ->exporter(SuratMasukExporter::class),
                Action::make('downloadSk')
                    ->label('Dowload SK')
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
                        return route('downloadSk', $newQueryParams);
                    })
                    ->openUrlInNewTab()


            ])
            ->columns([
                Tables\Columns\TextColumn::make('nomor_sk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_sk')->sortable()->searchable()
                    ->date('j F Y'),
                Tables\Columns\TextColumn::make('perihal')->sortable()->searchable(),
            ])
            ->filters([
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
                                fn (Builder $query, $date): Builder => $query->whereDate('tanggal_sk', '>=', $date),
                            )
                            ->when(
                                $data['tanggal_sampai'],
                                fn (Builder $query, $date): Builder => $query->whereDate('tanggal_sk', '<=', $date),
                            );
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSks::route('/'),
            'create' => Pages\CreateSk::route('/create'),
            'edit' => Pages\EditSk::route('/{record}/edit'),
        ];
    }
}
