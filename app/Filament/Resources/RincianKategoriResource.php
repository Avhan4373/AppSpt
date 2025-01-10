<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RincianKategoriResource\Pages;
use App\Filament\Resources\RincianKategoriResource\RelationManagers;
use App\Models\RincianKategori;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RincianKategoriResource extends Resource
{
    protected static ?string $model = RincianKategori::class;
    protected static ?string $navigationGroup = "Management Kategori";
    protected static ?string $navigationLabel = "Rincian Kategori";
    protected static ?string $pluralLabel = "Rincian Kategori";
    protected static ?string $modelLabel = "Rincian Kategori";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sub_kategori_id')
                    ->label('Sub Kategori')
                    ->relationship('subkategori', 'nomor_sub_kategori')
                    ->getOptionLabelFromRecordUsing(fn ($record) =>
                        $record->category->nomor_kategori . '.' .
                        $record->nomor_sub_kategori
                    )
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            $subKategori = \App\Models\SubKategori::find($state);
                            if ($subKategori) {
                                $set('category_id', $subKategori->category_id);
                            }
                        }
                    })
                    ->reactive(),
                Forms\Components\Hidden::make('category_id'),
//                Forms\Components\Select::make('sub_kategori_id')
//                    ->label('Sub Kategori')
//                    ->relationship('subkategori', 'nomor_sub_kategori'),
                Forms\Components\TextInput::make('nomor_rincian_kategori'),
                Forms\Components\TextInput::make('nama_rincian_kategori'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
//                Tables\Columns\TextColumn::make('category.nomor_sub_kategori',)
//                    ->label('Nomor Kategori')
//                    ->formatStateUsing(function ($record) {
//                        return $record->SubKategori->category->nomor_kategori . '.' .
//                            $record->SubKategori->nomor_sub_kategori . '.' .
//                            $record->nomor_rincian_kategori;
//                    })
//                    ->sortable()
//                    ->searchable(),
                Tables\Columns\TextColumn::make('SubKategori.nomor_sub_kategori')
                ->label('Sub Kategori')
                ->formatStateUsing(function($record){
                    return
                        $record->Category->nomor_kategori .'.'.
                        $record->SubKategori->nomor_sub_kategori . '.'.
                        $record->nomor_rincian_kategori
                        ?? '-';
                }),
//                Tables\Columns\TextColumn::make('nomor_rincian_kategori'),
                Tables\Columns\TextColumn::make('nama_rincian_kategori'),
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
            'index' => Pages\ListRincianKategoris::route('/'),
            'create' => Pages\CreateRincianKategori::route('/create'),
            'edit' => Pages\EditRincianKategori::route('/{record}/edit'),
        ];
    }
}
