<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuratIzinResource\Pages;
use App\Filament\Resources\SuratIzinResource\RelationManagers;
use App\Models\SuratIzin;
use App\Models\SuratKeluar;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;

use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

class SuratIzinResource extends Resource
{
    protected static ?string $model = SuratIzin::class;
    protected static ?string $navigationGroup = "Management Surat";
    protected static ?string $navigationLabel = "Surat Izin";
    protected static ?string $pluralLabel = "Surat Izin";
    protected static ?string $pluralModelLabel = "Surat Izin";
    protected static ?string $modelLabel = "Surat Izin";

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->options(User::all()->pluck('name', 'id')) // Ambil nama user dan id-nya
                    ->searchable() // Membuat dropdown dapat dicari
                    ->required(),
                Forms\Components\TextInput::make('nomor_surat')
                    ->default(fn () => SuratIzin::generateNomorSurat())
                    ->disabled()
                    ->dehydrated()
                    ->required(),
                Forms\Components\DatePicker::make('dari_tanggal')
                    ->required(),
                Forms\Components\DatePicker::make('sampai_tanggal')
                    ->required(),
                Forms\Components\Textarea::make('alasan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                Action::make('suratIzinPdf')
                    ->label('Download Surat Izin')
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
                        return route('surat-izin.download-pdf', $newQueryParams);
                    })
                    ->openUrlInNewTab(),
            ])
            ->columns([
                Tables\Columns\TextColumn::make('user.name') // Tampilkan nama user
                ->label('Nama')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_surat')
                    ->label('Nomor Surat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alasan')
                    ->label('Alasan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dari_tanggal')
                    ->date('j F Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('sampai_tanggal')
                    ->date('j F Y')
                    ->sortable(),
            ])
            ->filters([
                Filter::make('tanggal')
                    ->form([
                        Forms\Components\DatePicker::make('dari_tanggal')
                            ->label('Dari Tanggal'),
                        Forms\Components\DatePicker::make('sampai_tanggal')
                            ->label('Sampai Tanggal'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['dari_tanggal'],
                                fn (Builder $query, $date): Builder => $query->whereDate('dari_tanggal', '>=', $date)
                            )
                            ->when(
                                $data['sampai_tanggal'],
                                fn (Builder $query, $date): Builder => $query->whereDate('sampai_tanggal', '<=', $date)
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];

                        if ($data['dari_tanggal'] ?? null) {
                            $indicators[] = 'Dari Tanggal: ' . $data['dari_tanggal'];
                        }

                        if ($data['sampai_tanggal'] ?? null) {
                            $indicators[] = 'Sampai Tanggal: ' . $data['sampai_tanggal'];
                        }

                        return $indicators;
                    }),

                Filter::make('nomor_surat')
                    ->form([
                        Forms\Components\TextInput::make('nomor_surat')
                            ->label('Nomor Surat')
                            ->placeholder('Cari nomor surat')
                            ->autocomplete(false),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['nomor_surat'],
                            fn (Builder $query, $nomorSurat): Builder => $query->where('nomor_surat', 'like', "%{$nomorSurat}%")
                        );
                    })
                    ->indicateUsing(function (array $data): array {
                        return $data['nomor_surat'] ? ['Nomor Surat: ' . $data['nomor_surat']] : [];
                    }),

                SelectFilter::make('user')
                    ->relationship('user', 'name')
                    ->label('Pengguna')
                    ->searchable()
                    ->preload()
                    ->multiple()
                    ->indicateUsing(function (array $data): array {
                        // Check if 'user' key exists and is not empty
                        if (isset($data['user']) && !empty($data['user'])) {
                            // Retrieve user names based on selected IDs
                            $users = User::whereIn('id', $data['user'])->pluck('name');

                            return ['Pengguna: ' . $users->join(', ')];
                        }

                        return [];
                    }),
            ])
            ->actions([
//                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListSuratIzins::route('/'),
            'create' => Pages\CreateSuratIzin::route('/create'),
            'edit' => Pages\EditSuratIzin::route('/{record}/edit'),
        ];
    }
}
