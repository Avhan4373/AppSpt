<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SppdDalamDaerahResource\Pages;
use App\Filament\Resources\SppdDalamDaerahResource\RelationManagers;
use App\Models\SppdDalamDaerah;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Actions\Action;

class SppdDalamDaerahResource extends Resource
{
    protected static ?string $model = SppdDalamDaerah::class;
    protected static ?string $navigationGroup = "Perjalanan Dinas";
    protected static ?string $navigationLabel = "SPT Dalam Daerah";
    protected static ?string $pluralLabel = "SPT Dalam Daerah";
    protected static ?string $pluralModelLabel = "SPT Dalam Daerah";
    protected static ?string $modelLabel = "SPT Dalam Daerah";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $user = auth()->user();
        $isAdminOrSuper = $user->hasRole(['super_admin', 'admin']); // Cek apakah user adalah admin atau super_admin

        $userField = $isAdminOrSuper
            ? Forms\Components\Select::make('user_id')
                ->label('User')
                ->options(
                    User::query()
                        ->when($user->hasRole('admin'), function ($query) {
                            // Jika admin, tampilkan hanya user biasa
                            return $query->whereHas('roles', function ($q) {
                                $q->where('name', 'user');
                            });
                        })
                        ->when($user->hasRole('super_admin'), function ($query) {
                            // Jika super_admin, tampilkan semua user kecuali super_admin lain
                            return $query->whereHas('roles', function ($q) {
                                $q->whereIn('name', ['admin', 'user']);
                            });
                        })
                        ->pluck('name', 'id')
                )
                ->searchable()
                ->required()
            : Forms\Components\Hidden::make('user_id')
                ->default($user->id)
                ->required();


        return $form
            ->schema([
                $userField,
                Forms\Components\TextInput::make('nomor_spt')
                    ->default(SppdDalamDaerah::generateNomorSpt()) // Generate nomor otomatis
                    ->required()
                    ->disabled() // Nonaktifkan input agar tidak bisa diubah manual
                    ->dehydrated(), // Pastikan nilai default dikirim ke database
                Forms\Components\TextInput::make('tujuan_spt')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_spt')
                    ->required(),
                Forms\Components\Textarea::make('perihal')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('nomor_spt')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tujuan_spt')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('perihal')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_spt')->sortable()->searchable(),
            ])
            ->filters([
                // Filter untuk nomor_spt
                Filter::make('nomor_spt')
                    ->form([
                        Forms\Components\TextInput::make('nomor_spt')
                            ->label('Nomor SPT')
                            ->placeholder('Masukkan Nomor SPT'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['nomor_spt'],
                                fn (Builder $query, $nomorSpt): Builder => $query->where('nomor_spt', 'like', "%{$nomorSpt}%"),
                            );
                    }),

                // Filter untuk user_id
                SelectFilter::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload(),

                // Filter untuk tanggal_spt
                Filter::make('tanggal_spt')
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
                                fn (Builder $query, $tanggalDari): Builder => $query->whereDate('tanggal_spt', '>=', $tanggalDari),
                            )
                            ->when(
                                $data['tanggal_sampai'],
                                fn (Builder $query, $tanggalSampai): Builder => $query->whereDate('tanggal_spt', '<=', $tanggalSampai),
                            );
                    }),
            ])
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
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSppdDalamDaerahs::route('/'),
            'create' => Pages\CreateSppdDalamDaerah::route('/create'),
            'edit' => Pages\EditSppdDalamDaerah::route('/{record}/edit'),
        ];
    }

}
