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
                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                        if ($state) {
                            // Mengambil kategori yang dipilih
                            $selectedCategory = Category::find($state);

                            // Mengambil sub kategori terakhir berdasarkan kategori
                            $lastSubKategori = SubKategori::where('category_id', $state)
                                ->orderByRaw('CAST(nomor_sub_kategori AS UNSIGNED) DESC')
                                ->first();

                            if ($lastSubKategori) {
                                // Jika ada sub kategori sebelumnya, increment nomor terakhir
                                $nextNumber = intval($lastSubKategori->nomor_sub_kategori) + 1;
                            } else {
                                // Jika belum ada sub kategori, mulai dari 1
                                $nextNumber = 1;
                            }

                            // Format nomor dengan padding 2 digit
                            $formattedNumber = str_pad($nextNumber, 2, '0', STR_PAD_LEFT);

                            // Set nomor sub kategori
                            $set('nomor_sub_kategori', $formattedNumber);
                        }
                    })
                    ->required()
                    ->searchable(),
//                Forms\Components\TextInput::make('nomor_sub_kategori')
//                    ->disabled(), // Nonaktifkan input nomor sub kategori karena diisi otomatis
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
