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
//Model
use App\Models\SubKategori;


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
        $defaultCategory = Category::first();
        $defaultSubKategori = $defaultCategory ? SubKategori::where('category_id', $defaultCategory->id)->first() : null;
        $defaultRincianKategori = $defaultSubKategori ? RincianKategori::where('sub_kategori_id', $defaultSubKategori->id)->first() : null;
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->label('Kategori')
                    ->options(function () {
                        return \App\Models\Category::query()
                            ->get()
                            ->mapWithKeys(function ($category) {
                                return [$category->id => $category->nomor_kategori . ' - ' . $category->nama_kategori];
                            });
                    })
                    ->default($defaultCategory?->id)
                    ->reactive()
                    ->searchable()
                    ->afterStateUpdated(fn (callable $set) => $set('sub_kategori_id', null)),
                Forms\Components\Select::make('sub_kategori_id')
                    ->label('Sub Kategori')
                    ->options(function (callable $get) {
                        $categoryId = $get('category_id');
                        if (!$categoryId) {
                            return [];
                        }
                        return \App\Models\SubKategori::where('category_id', $categoryId)
                            ->get()
                            ->mapWithKeys(function ($subKategori) {
                                return [$subKategori->id => $subKategori->nomor_sub_kategori . ' - ' . $subKategori->nama_sub_kategori];
                            });
                    })
                    ->default($defaultSubKategori?->id)
                    ->reactive()
                    ->required()
                    ->searchable()
                    ->afterStateUpdated(fn (callable $set) => $set('rincian_kategori_id', null)),

                Forms\Components\Select::make('rincian_kategori_id')
                    ->label('Rincian Kategori')
                    ->options(function (callable $get) {
                        $subKategoriId = $get('sub_kategori_id');
                        if (!$subKategoriId) {
                            return [];
                        }
                        return \App\Models\RincianKategori::where('sub_kategori_id', $subKategoriId)
                            ->get()
                            ->mapWithKeys(function ($RincianKatgori) {
                                return [$RincianKatgori->id => $RincianKatgori->nomor_rincian_kategori . ' - ' . $RincianKatgori->nama_rincian_kategori];
                            });
//                            ->pluck('nama_rincian_kategori', 'id');
                    })
                    ->default($defaultRincianKategori?->id)
                    ->searchable()
                    ->required(),

                Forms\Components\TextInput::make('nomor_surat')
                    ->default(fn () => SuratKeluar::generateNomorSurat())
                    ->disabled()
                    ->dehydrated()
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
                Action::make('pdfdalamdaerah')
                    ->label('Download PDF')
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(function () {
                        // Ambil query parameter terkini
                        $queryParams = request()->query('tableFilters');
                        $newQueryParams = [];

                        // Format ulang parameter filter
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
                        return route('pdfdalamdaerah', $newQueryParams);
                    })
                    ->openUrlInNewTab(),
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
