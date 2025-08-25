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
use Filament\Support\Actions;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Columns\DateTimeColumn;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as BaseCollection;


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
            ->options(function (Forms\Get $get, $livewire) {
                $date = $get('tanggal_berangkat');
                $recordId = property_exists($livewire, 'record') && $livewire->record ? $livewire->record->id : null;

                $blockedIds = [];
                if ($date) {
                    $existing = \App\Models\SppdLuarDaerah::query()
                        ->whereDate('tanggal_berangkat', $date)
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
            ->helperText('Nama yang tidak muncul berarti sudah terpakai pada tanggal berangkat tersebut.')
            ->extraAttributes(['title' => 'User yang sudah dipakai pada tanggal berangkat yang sama tidak akan ditampilkan.'])
            ->preload()
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
            })
            ->rule(function (Forms\Get $get, $livewire) {
                return function (string $attribute, $value, \Closure $fail) use ($get, $livewire) {
                    $date = $get('tanggal_berangkat');
                    if (!$date) {
                        return;
                    }

                    $selected = is_array($value) ? $value : (json_decode((string) $value, true) ?: []);
                    $recordId = property_exists($livewire, 'record') && $livewire->record ? $livewire->record->id : null;

                    if (empty($selected)) {
                        return;
                    }

                    // Check for conflicts within SppdLuarDaerah
                    $conflictExists = \App\Models\SppdLuarDaerah::query()
                        ->whereDate('tanggal_berangkat', $date)
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
                        $fail('Beberapa user sudah terpakai pada tanggal berangkat ini. Silakan pilih user lain.');
                        return;
                    }

                    // Check for conflicts with SppdDalamDaerah
                    $conflictWithDalamDaerah = \App\Models\SppdDalamDaerah::query()
                        ->whereDate('tanggal_spt', $date)
                        ->where(function ($q) use ($selected) {
                            $q->whereIn('user_id', $selected)
                              ->orWhere(function ($qq) use ($selected) {
                                  foreach ($selected as $uid) {
                                      $qq->orWhereRaw('JSON_CONTAINS(user_ids, ?)', ['"' . (int) $uid . '"']);
                                  }
                              });
                        })
                        ->exists();

                    if ($conflictWithDalamDaerah) {
                        $fail('Beberapa user sudah terpakai di SPT Dalam Daerah pada tanggal yang sama dan tidak dapat dipilih untuk SPT Luar Daerah. Silakan pilih user lain.');
                    }
                };
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
                    ->label('Nomor SPT')
                    ->placeholder('Pilih tanggal berangkat terlebih dahulu untuk generate nomor SPT')
                    ->required()
                    ->dehydrated()
                    ->reactive()
                    ->visible(fn ($get) => $get('tanggal_berangkat') !== null),
                Forms\Components\TextInput::make('tujuan_spt')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_berangkat')
                    ->label('Tanggal Berangkat')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, $set) {
                        if ($state) {
                            $tanggalBerangkat = \Carbon\Carbon::parse($state);
                            $nomorSpt = SppdLuarDaerah::generateNomorSptByDate($tanggalBerangkat);
                            $set('nomor_spt', $nomorSpt);
                        } else {
                            $set('nomor_spt', null);
                        }
                    }),
                Forms\Components\DatePicker::make('tanggal_kembali')
                    ->label('Tanggal Kembali')
                    ->rules(['after_or_equal:tanggal_berangkat'])
                    ->required(),
                Forms\Components\Textarea::make('perihal')
                    ->required(),
                Forms\Components\TextInput::make('dasar_surat')
                    ->label('Dasar Surat')
                    ->nullable(),
                                    
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
                Tables\Columns\TextColumn::make('tanggal_berangkat')->sortable()->searchable()
                    ->date('j F Y'),
                Tables\Columns\TextColumn::make('tanggal_kembali')->sortable()->searchable()
                    ->date('j F Y'),
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
                    ->action(function (SppdLuarDaerah $record, array $data) {
                        $url = route('sppd.luar-daerah.print', [
                            'sppdLuarDaerah' => $record->id,
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
