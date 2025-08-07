<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailUserResource\Pages;
use App\Filament\Resources\DetailUserResource\RelationManagers;
use App\Models\DetailUsers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailUserResource extends Resource
{
    protected static ?string $model = DetailUsers::class;
    protected static ?string $navigationGroup = "Management User";
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Ambil data user_id dari tabel users
                // Field untuk memilih user 
                Forms\Components\BelongsToSelect::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->required(),

                Forms\Components\TextInput::make('nip')
                    ->label('NIP')
                    ->disableAutocomplete()
                    ->required(),
                Forms\Components\TextInput::make('pangkat_gol')
                    ->label('Pangkat/Gol')
                    ->disableAutocomplete()
                    ->required(),
                Forms\Components\TextInput::make('jabatan')
                    ->label('Jabatan')
                    ->disableAutocomplete()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('nip')->searchable(),
                Tables\Columns\TextColumn::make('pangkat_gol')->searchable(),
                Tables\Columns\TextColumn::make('jabatan')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDetailUsers::route('/'),
            'create' => Pages\CreateDetailUser::route('/create'),
            'edit' => Pages\EditDetailUser::route('/{record}/edit'),
        ];
    }
    
    // ✅ Tambahkan ini
    public static function canViewAny(): bool
    {
        return auth()->user()?->hasRole('super_admin'); // Jika pakai Spatie
        // return auth()->user()?->role === 'super_admin'; // Jika pakai kolom biasa
    }
}
