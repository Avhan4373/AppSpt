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
    use Filament\Tables\Actions\CreateAction;

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
            $isAdminOrSuper = $user->hasRole(['super_admin', 'admin']);

            // Field untuk memilih user (single atau multiple)
            $userField = Forms\Components\Select::make('user_ids')
                ->label('Pilih User')
                ->options(User::pluck('name', 'id'))
                ->multiple()
                ->searchable()
                ->required()
                ->afterStateHydrated(function ($component, $state) {
                    if (is_string($state)) {
                        $decodedState = json_decode($state, true);
                        if (is_array($decodedState)) {
                            $component->state($decodedState);
                        }
                    }
                });

            // Jika bukan admin/super admin, set default value dan disable field
            if (!$isAdminOrSuper) {
                $userField->default([$user->id])
                    ->disabled()
                    ->dehydrated();
            }
            return $form
                ->schema([
                    $userField,
                    Forms\Components\TextInput::make('nomor_spt')
                        ->default(SppdDalamDaerah::generateNomorSpt())
                        ->required()
                        ->disabled()
                        ->dehydrated(),
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
                    Tables\Columns\TextColumn::make('tanggal_spt')->sortable()->searchable(),
                    Tables\Columns\TextColumn::make('perihal')->sortable()->searchable(),
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
                        ->visible($isAdminOrSuper),

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
                    CreateAction::make()
                        ->label('Add New')
                        ->visible(false),
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
                    // Hanya tampilkan tombol edit untuk admin/super admin
                    Tables\Actions\EditAction::make()
                        ->visible($isAdminOrSuper),
                    // Tombol cetak tetap tersedia untuk semua user
                    Action::make('print')
                        ->label('Cetak')
                        ->icon('heroicon-o-printer')
                        ->url(fn (SppdDalamDaerah $record) => route('sppd.dalam-daerah.print', $record))
                        ->openUrlInNewTab(),
                ])
                ->bulkActions([
                    Tables\Actions\BulkActionGroup::make([
                        Tables\Actions\DeleteBulkAction::make()
                            ->visible($isAdminOrSuper),
                    ])
                ]);

        }
        public static function getPages(): array
        {
            return [
                'index' => Pages\ListSppdDalamDaerahs::route('/'),
                'create' => Pages\CreateSppdDalamDaerah::route('/create'), // Pastikan ini ada
                'edit' => Pages\EditSppdDalamDaerah::route('/{record}/edit'),
            ];
        }

        public static function getRelations(): array
        {
            return [
                //
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
