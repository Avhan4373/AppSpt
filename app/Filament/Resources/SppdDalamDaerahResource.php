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
    use Closure;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\SoftDeletingScope;
    use Illuminate\Support\Facades\Auth;
    use Filament\Tables\Actions\Action;
    use Filament\Tables\Actions\CreateAction;
    use Filament\Tables\Columns\DateTimeColumn;

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
                ->options(function (Forms\Get $get, $livewire) {
                    $date = $get('tanggal_spt');
                    // Ambil id record saat edit agar tidak ikut terblokir oleh dirinya sendiri
                    $recordId = property_exists($livewire, 'record') && $livewire->record ? $livewire->record->id : null;

                    $blockedIds = [];
                    if ($date) {
                        $existing = \App\Models\SppdDalamDaerah::query()
                            ->whereDate('tanggal_spt', $date)
                            ->when($recordId, fn ($q) => $q->where('id', '!=', $recordId))
                            ->get(['user_id', 'user_ids']);

                        foreach ($existing as $row) {
                            if (!empty($row->user_id)) {
                                $blockedIds[] = (int) $row->user_id;
                            }
                            $uids = $row->user_ids;
                            if (is_string($uids)) {
                                $uids = json_decode($uids, true) ?: [];
                            }
                            if (is_array($uids)) {
                                foreach ($uids as $uid) {
                                    $blockedIds[] = (int) $uid;
                                }
                            }
                        }
                    }

                    $blockedIds = array_values(array_unique(array_filter($blockedIds)));

                    // Izinkan yang sudah terpilih saat ini (ketika edit atau memilih bertahap)
                    $currentlySelected = (array) ($get('user_ids') ?? []);
                    $exclude = array_values(array_diff($blockedIds, $currentlySelected));

                    $query = User::query();
                    if (!empty($exclude)) {
                        $query->whereNotIn('id', $exclude);
                    }

                    return $query->pluck('name', 'id');
                })
                ->multiple()
                ->searchable()
                ->preload()
                ->reactive()
                ->required()
                ->helperText('Nama yang tidak muncul berarti sudah terpakai pada tanggal tersebut.')
                ->extraAttributes(['title' => 'User yang sudah dipakai pada tanggal yang sama tidak akan ditampilkan.'])
                ->rule(function (Forms\Get $get, $livewire) {
                    return function (string $attribute, $value, Closure $fail) use ($get, $livewire) {
                        $date = $get('tanggal_spt');
                        if (!$date) {
                            return;
                        }

                        $selected = is_array($value) ? $value : (json_decode((string) $value, true) ?: []);
                        $recordId = property_exists($livewire, 'record') && $livewire->record ? $livewire->record->id : null;

                        if (empty($selected)) {
                            return;
                        }

                        $conflictExists = \App\Models\SppdDalamDaerah::query()
                            ->whereDate('tanggal_spt', $date)
                            ->when($recordId, fn ($q) => $q->where('id', '!=', $recordId))
                            ->where(function ($q) use ($selected) {
                                $q->whereIn('user_id', $selected)
                                  ->orWhere(function ($qq) use ($selected) {
                                      foreach ($selected as $uid) {
                                          $qq->orWhereRaw('JSON_CONTAINS(user_ids, ?)', ['"' . (int) $uid . '"']);
                                      }
                                  });
                            })
                            ->exists();

                        if ($conflictExists) {
                            $fail('Beberapa user sudah terpakai pada tanggal ini. Silakan pilih user lain.');
                        }
                    };
                })
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
                        ->label('Nomor SPT')
                        ->placeholder('Pilih tanggal terlebih dahulu untuk generate nomor SPT')
                        ->required()
                        // ->disabled()
                        ->dehydrated()
                        ->reactive()
                        ->visible(fn ($get) => $get('tanggal_spt') !== null),
                    Forms\Components\TextInput::make('tujuan_spt')
                        ->required(),
                    Forms\Components\DatePicker::make('tanggal_spt')
                        ->label('Tanggal SPT')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(function ($state, $set, $get) {
                            if ($state) {
                                $tanggalSpt = \Carbon\Carbon::parse($state);
                                $nomorSpt = SppdDalamDaerah::generateNomorSptByDate($tanggalSpt);
                                $set('nomor_spt', $nomorSpt);
                            } else {
                                $set('nomor_spt', null);
                            }
                        }),
                    Forms\Components\Textarea::make('perihal')
                        ->required(),
                ]);
        }

        public static function table(Table $table): Table
        {
            $isAdminOrSuper = auth()->user()->hasRole(['super_admin', 'admin','user']);
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
                    Tables\Columns\TextColumn::make('tanggal_spt')->sortable()->searchable()->date('j F Y'),
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
                            // $queryString = request()->getQueryString();
                            
                            // Gabungkan ke URL tujuan
                            // return route('pdfdalamdaerah') . ($queryString ? "?{$queryString}" : '');

                            // Redirect ke route dengan query parameter terbaru
                            // return route('pdfdalamdaerah', $newQueryParams);
                            return url('/pdf-dalam-daerah') . '?' . http_build_query(request()->query());
                        })
                        ->openUrlInNewTab(),
                ])
                ->actions([
                    // Hanya tampilkan tombol edit untuk admin/super admin
                    Tables\Actions\EditAction::make()
                        ->visible($isAdminOrSuper),
                    // Tombol cetak tetap tersedia untuk semua user
                    // Action::make('print')
                    //     ->label('Cetak')
                    //     ->icon('heroicon-o-printer')
                    //     ->url(fn (SppdDalamDaerah $record) => route('sppd.dalam-daerah.print', $record))
                    //     ->openUrlInNewTab(),
                    Action::make('print')
                    ->label('Cetak')
                    ->icon('heroicon-o-printer')
                    ->requiresConfirmation()
                    ->modalHeading('Pilih Tanggal Cetak')
                    ->modalButton('Cetak')
                    ->form([
                        Forms\Components\DatePicker::make('tanggal_cetak')
                            ->label('Tanggal Cetak')
                            ->native(false)
                            ->displayFormat('d/m/Y')
                            ->required(),
                        Forms\Components\Select::make('tanda_tangan')
                            ->label('Pilih Tanda Tangan')
                            ->options(function () {
                                $user = auth()->user();
                                $pangkatPembina = 'Pembina'; // Sesuaikan dengan pangkat pembina
                                $similarPangkat = ['Pembina TK I, IV/b','Pembina', 'Pembina, IV/a']; // Tambahkan pangkat mirip lainnya
                                
                                // Ambil semua user dengan pangkat yang sesuai
                                $users = User::whereHas('detailUser', function ($query) use ($similarPangkat) {
                                $query->whereIn('pangkat_gol', $similarPangkat); // Filter berdasarkan pangkat
                                })
                                ->pluck('name', 'id') // Ambil nama dan ID user
                                ->toArray();

                                return $users;
                            })
                          ->default(function () {
        // Pilih Kepala Dinas jika ada
        $kepalaDinas = User::whereHas('detailUser', function ($query) {
            $query->where('jabatan', 'Kepala Dinas');
        })->first(); // Ambil Kepala Dinas pertama

        if ($kepalaDinas) {
            return $kepalaDinas->id; // Set default ke id Kepala Dinas
        }

        // Jika tidak ada Kepala Dinas, kembalikan user pertama dengan pangkat pembina
        $pangkatPembina = 'Pembina';
        $similarPangkat = ['Pembina TK I, IV/b', 'Pembina', 'Pembina, IV/a']; 
        $user = User::whereHas('detailUser', function ($query) use ($similarPangkat) {
            $query->whereIn('pangkat_gol', $similarPangkat);
        })->first();

        return $user ? $user->id : null; // Set default ke user pertama atau null
    })
    ->required()
    ->reactive(), 
                    ])
                    ->openUrlInNewTab()
                    ->action(function (SppdDalamDaerah $record, array $data) {
                        $url = route('sppd.dalam-daerah.print', [
                            'sppdDalamDaerah' => $record->id,
                            'tanggal_cetak' => $data['tanggal_cetak'],
                            'tanda_tangan' => $data['tanda_tangan'], // Pass tanda tangan ke URL
                        ]);
                        return redirect()->away($url);
                    })
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
