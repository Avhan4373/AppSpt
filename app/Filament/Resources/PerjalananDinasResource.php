<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerjalananDinasResource\Pages;
use App\Filament\Resources\PerjalananDinasResource\RelationManagers;
use App\Models\PerjalananDinas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PerjalananDinasResource extends Resource
{
    protected static ?string $model = PerjalananDinas::class;
    protected static ?string $navigationGroup = "Management SPT";
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::id()) // Set default ke user login
                    ->required(),
                Forms\Components\TextInput::make('no_spt')->required()->unique(),
                Forms\Components\Textarea::make('uraian')->required(),
                Forms\Components\DatePicker::make('tgl_berangkat')->required(),
                Forms\Components\DatePicker::make('tgl_kembali')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Nama User'),
                Tables\Columns\TextColumn::make('no_spt'),
                Tables\Columns\TextColumn::make('uraian')->limit(50),
                Tables\Columns\TextColumn::make('tgl_berangkat'),
                Tables\Columns\TextColumn::make('tgl_kembali'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Add delete action if user is super admin
                Tables\Actions\DeleteAction::make()->visible(function (PerjalananDinas $record) {
                    return Auth::user()->hasRole('super_admin');
                }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->visible(function () {
                        return Auth::user()->hasRole('super_admin');
                    }),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (!Auth::user()->hasRole('super_admin')) {
            $query->where('user_id', Auth::id());
        }

        return $query;
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
            'index' => Pages\ListPerjalananDinas::route('/'),
            'create' => Pages\CreatePerjalananDinas::route('/create'),
            'edit' => Pages\EditPerjalananDinas::route('/{record}/edit'),
        ];
    }
}
