<?php

namespace App\Filament\Resources;

use App\Filament\Exports\SuratKeluarExporter;
use App\Filament\Resources\SuratKeluarResource\Pages;
use App\Filament\Resources\SuratKeluarResource\RelationManagers;
use App\Models\Category;
use App\Models\RincianKategori;
use App\Models\SuratKeluar;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ExportAction;
use Filament\Actions\Exports\Models\Export;
use Filament\Forms;
use Filament\Forms\Components\View;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\Filter;

class SuratKeluarResource extends Resource
{
    protected static ?string $model = SuratKeluar::class;
    protected static ?string $navigationGroup = "Management Surat";
    protected static ?string $navigationLabel = "Surat Keluar";
    protected static ?string $pluralLabel = "Surat Keluar";
    protected static ?string $pluralModelLabel = "Surat Keluar";
    protected static ?string $modelLabel = "Surat Keluar";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'nomor_kategori')
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('sub_kategori_id', null)),

                Forms\Components\Select::make('sub_kategori_id')
                    ->label('Sub Kategori')
                    ->options(function (callable $get) {
                        $categoryId = $get('category_id');
                        if (!$categoryId) {
                            return [];
                        }
                        return \App\Models\SubKategori::where('category_id', $categoryId)
                            ->pluck('nama_sub_kategori', 'id');
                    })
                    ->reactive()
                    ->required()
                    ->afterStateUpdated(fn (callable $set) => $set('rincian_kategori_id', null)),

                Forms\Components\Select::make('rincian_kategori_id')
                    ->label('Rincian Kategori')
                    ->options(function (callable $get) {
                        $subKategoriId = $get('sub_kategori_id');
                        if (!$subKategoriId) {
                            return [];
                        }
                        return \App\Models\RincianKategori::where('sub_kategori_id', $subKategoriId)
                            ->pluck('nama_rincian_kategori', 'id');
                    })
                    ->required(),

                Forms\Components\TextInput::make('nomor_surat')
                    ->required(),

                Forms\Components\TextInput::make('tujuan_surat')
                    ->required(),

                Forms\Components\DatePicker::make('tanggal_surat')
                    ->required(),

                Forms\Components\TextInput::make('perihal')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                ExportAction::make()
                    ->exporter(SuratKeluarExporter::class),
                Action::make('suratKeluar')
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
                        return route('suratKeluar', $newQueryParams);
                    })
                    ->openUrlInNewTab()
            ])
            ->columns([
                Tables\Columns\TextColumn::make('SubKategori.nomor_sub_kategori')
                    ->label('Sub Kategori')
                    ->formatStateUsing(function($record){
                        return
                            $record->Category->nomor_kategori .'.'.
                            $record->SubKategori->nomor_sub_kategori . '.'.
                            $record->RincianKategori->nomor_rincian_kategori
                            ?? '-';
                    }),
                Tables\Columns\TextColumn::make('nomor_surat')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tujuan_surat')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_surat')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('perihal')->sortable()->searchable(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->relationship('category', 'nomor_kategori')
                    ->label('Kategori Surat')
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

                SelectFilter::make('tujuan_surat')
                    ->label('Tujuan Surat')
                    ->options(fn(): array => SuratKeluar::distinct()->pluck('tujuan_surat', 'tujuan_surat')->toArray())
                    ->searchable()
                    ->preload(),

            ])
//                layout: Tables\Enums\FiltersLayout::AboveContent)
//            ->filtersFormColumns(3)
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])

            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ])
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
            'index' => Pages\ListSuratKeluars::route('/'),
            'create' => Pages\CreateSuratKeluar::route('/create'),
            'edit' => Pages\EditSuratKeluar::route('/{record}/edit'),
        ];
    }
}
