<?php

namespace App\Filament\Resources;

use App\Filament\Exports\SuratKeluarExporter;
use App\Filament\Resources\SuratKeluarResource\Pages;
use App\Filament\Resources\SuratKeluarResource\RelationManagers;
use App\Models\Category;
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
                    ->label('Kategori Surat')
                ->relationship('category', 'nomor_kategori'),
                Forms\Components\TextInput::make('nomor_surat')
                    ->required()
                    ->default(function () {
                        $lastSuratKeluar = SuratKeluar::latest('nomor_surat')->first();
                        if ($lastSuratKeluar) {
                            $lastNumber = intval($lastSuratKeluar->nomor_surat);
                            $nextNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
                            return $nextNumber. '/' . date('Y');
                        } else {
                            return '001/' . date('Y');
                        }
                    }),
                Forms\Components\TextInput::make('tujuan_surat'),
                Forms\Components\DatePicker::make('tanggal_surat')
                ->default(now()),
                Forms\Components\Textarea::make('perihal'),
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
                Tables\Columns\TextColumn::make('category.nomor_kategori')
                ->sortable()
                ->searchable(),
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
