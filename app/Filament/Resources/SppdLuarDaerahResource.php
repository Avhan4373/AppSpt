<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SppdLuarDaerahResource\Pages;
use App\Filament\Resources\SppdLuarDaerahResource\RelationManagers;
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
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\CreateAction;

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
        $isAdminOrSuper = $user->hasRole(['super_admin', 'admin']);

        // Field untuk memilih user (single atau multiple)
        $userField = Forms\Components\Select::make('user_ids')
            ->label('Pilih User')
            ->options(User::pluck('name', 'id'))
            ->multiple()
            ->searchable()
            ->required()
            ->live()
            ->afterStateUpdated(function ($state, Forms\Set $set) {
                if (is_array($state) && !empty($state)) {
                    $set('user_id', $state[0]); // Immediately set user_id when user_ids changes
                }
            })
            ->afterStateHydrated(function ($component, $state) {
                if (is_string($state)) {
                    $decodedState = json_decode($state, true);
                    if (is_array($decodedState)) {
                        $component->state($decodedState);
                    }
                }
            });

        // Hidden field for user_id with immediate default value
        $userIdField = Forms\Components\Hidden::make('user_id')
            ->default(function (Forms\Get $get) {
                $userIds = $get('user_ids');
                return is_array($userIds) && !empty($userIds) ? $userIds[0] : auth()->id();
            })
            ->required();

        // Jika bukan admin/super admin, set default value dan disable field
        if (!$isAdminOrSuper) {
            $userField->default([$user->id])
                ->disabled()
                ->dehydrated();
            $userIdField->default($user->id);
        }

        return $form
            ->schema([
                $userIdField,
                $userField,
                Forms\Components\TextInput::make('nomor_spt')
                    ->default(SppdLuarDaerah::generateNomorSpt())
                    ->required()
                    ->disabled()
                    ->dehydrated(),
                Forms\Components\TextInput::make('tujuan_spt')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_berangkat')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_kembali')
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
                Tables\Columns\TextColumn::make('user_ids')
                    ->label('User Terpilih')
                    ->formatStateUsing(function ($state) {
                        // Jika state adalah string JSON, decode terlebih dahulu
                        if (is_string($state)) {
                            $userIds = json_decode($state, true);
                        } elseif (is_array($state)) {
                            $userIds = $state;
                        } else {
                            return 'Tidak ada user terpilih';
                        }

                        // Pastikan userIds adalah array dan tidak kosong
                        if (!is_array($userIds) || empty($userIds)) {
                            return 'Tidak ada user terpilih';
                        }

                        // Ambil data user
                        $users = User::whereIn('id', $userIds)->get();

                        if ($users->isEmpty()) {
                            return 'Tidak ada user terpilih';
                        }

                        return $users->pluck('name')->join(', ');
                    }),
                Tables\Columns\TextColumn::make('nomor_spt')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tujuan_spt')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_berangkat')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_kembali')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('perihal')->sortable()->searchable()->limit(20),
            ])
            ->filters([
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

                SelectFilter::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->visible($isAdminOrSuper),

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
                CreateAction::make()
                    ->label('Add New')
                    ->visible(false),
                Action::make('pdfluardaerah')
                    ->label('Download PDF')
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(function () {
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

                        return route('pdfluardaerah', $newQueryParams);
                    })
                    ->openUrlInNewTab(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->visible($isAdminOrSuper),
                Action::make('print')
                    ->label('Cetak')
                    ->icon('heroicon-o-printer')
                    ->url(fn (SppdLuarDaerah $record) => route('sppd.luar-daerah.print', $record))
                    ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->visible($isAdminOrSuper),
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
        $user = auth()->user();

        // Jika bukan super_admin atau admin
        if (!$user->hasRole(['super_admin', 'admin'])) {
            $userId = $user->id;

            $query->where(function ($query) use ($userId) {
                $query->where('user_id', $userId)
                    ->orWhereRaw('JSON_CONTAINS(user_ids, ?)', ['"' . $userId . '"']);
            });
        }

        return $query;
    }
}
