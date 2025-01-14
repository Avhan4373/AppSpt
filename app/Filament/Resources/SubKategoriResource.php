<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubKategoriResource\Pages;
use App\Filament\Resources\SubKategoriResource\RelationManagers;
use App\Models\Category;
use App\Models\SubKategori;
use App\Models\SuratKeluar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubKategoriResource extends Resource
{
    protected static ?string $model = SubKategori::class;

    protected static ?string $navigationGroup = "Management Kategori";
    protected static ?string $navigationLabel = "Sub Kategori";
    protected static ?string $pluralLabel = "Sub Kategori";
    protected static ?string $modelLabel = "Sub Kategori";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $defaultCategory = Category::first();
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
                    ->searchable(),
                Forms\Components\TextInput::make('nomor_sub_kategori'),
                Forms\Components\TextInput::make('nama_sub_kategori'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.nomor_kategori')
                    ->label('Nomor Kategori')
                    ->formatStateUsing(function ($record) {
                        return $record->category->nomor_kategori . '.' . $record->nomor_sub_kategori;
                    })
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_sub_kategori'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListSubKategoris::route('/'),
            'create' => Pages\CreateSubKategori::route('/create'),
            'edit' => Pages\EditSubKategori::route('/{record}/edit'),
        ];
    }
}
