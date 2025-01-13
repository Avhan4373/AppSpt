<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SppdLuarDaerahResource\Pages;
use App\Filament\Resources\SppdLuarDaerahResource\RelationManagers;
use App\Models\SppdDalamDaerah;
use App\Models\SppdLuarDaerah;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Actions\Action;

class SppdLuarDaerahResource extends Resource
{
    protected static ?string $model = SppdLuarDaerah::class;

    protected static ?string $navigationGroup = "Perjalanan Dinas";
    protected static ?string $navigationLabel = "SPT Luar Daerah";
    protected static ?string $pluralLabel = "SPT Luar Daerah";
    protected static ?string $pluralModelLabel = "SPT Luar Daerah";
    protected static ?string $modelLabel = "SPT Luar Daerah";

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
                    ->default(SppdLuarDaerah::generateNomorSpt()) // Generate nomor otomatis
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
        $isAdminOrSuper = auth()->user()->hasRole(['super_admin', 'admin']);
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

                // Filter untuk user_id (hanya untuk admin atau super_admin)
                SelectFilter::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->visible($isAdminOrSuper), // Hanya tampilkan jika user adalah admin atau super_admin

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
                Action::make('pdfluardaerah')
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
                        return route('pdfluardaerah', $newQueryParams);
                    })
                    ->openUrlInNewTab(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->visible(function (SppdLuarDaerah $record) {
                        // Hanya tampilkan tombol edit jika user adalah pemilik data atau admin/super_admin
                        return auth()->user()->hasRole(['super_admin', 'admin']) || $record->user_id === auth()->id();
                    }),
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
            'index' => Pages\ListSppdLuarDaerahs::route('/'),
            'create' => Pages\CreateSppdLuarDaerah::route('/create'),
            'edit' => Pages\EditSppdLuarDaerah::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        // Jika user bukan admin atau super_admin, batasi data berdasarkan user_id
        if (!auth()->user()->hasRole(['super_admin', 'admin'])) {
            $query->where('user_id', auth()->id());
        }

        return $query;
    }
}
