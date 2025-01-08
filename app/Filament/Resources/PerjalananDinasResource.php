<?php

namespace App\Filament\Resources;

use App\Filament\Exports\SuratMasukExporter;
use App\Filament\Resources\PerjalananDinasResource\Pages;
use App\Filament\Resources\PerjalananDinasResource\RelationManagers;
use App\Models\PerjalananDinas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Filters\Filter;

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
                    Forms\Components\TextInput::make('no_spt')
                        ->required()
//                        ->unique(ignoreRecord: true)
                        ->default(function () {
                            // Mendapatkan tahun saat ini
                            $year = Carbon::now()->year;

                            // Mendapatkan nomor urut terakhir
                            $lastRecord = PerjalananDinas::whereYear('created_at', $year)
                                ->orderBy('id', 'desc')
                                ->first();

                            // Jika tidak ada record untuk tahun ini, mulai dari 001
                            if (!$lastRecord) {
                                $nextNumber = '001';
                            } else {
                                // Ambil nomor dari format 094/XXX/YYYY
                                $parts = explode('/', $lastRecord->no_spt);
                                $currentNumber = intval($parts[1]);
                                $nextNumber = str_pad($currentNumber + 1, 3, '0', STR_PAD_LEFT);
                            }

                            // Format nomor SPT
                            return "094/{$nextNumber}/{$year}";
                        })
                        ->disabled()
                        ->dehydrated(),
                Forms\Components\Textarea::make('uraian')->required(),
                Forms\Components\DatePicker::make('tgl_berangkat')->required(),
                Forms\Components\DatePicker::make('tgl_kembali')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->headerActions([
                Action::make('perjalananPdf')
                    ->label('Download PDF')
                    ->icon('heroicon-o-document-arrow-down')
                    ->url(function () {
                        return static::generatePdfUrl();
                    })
                    ->openUrlInNewTab()
            ])
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Nama User')->searchable(),
                Tables\Columns\TextColumn::make('no_spt'),
                Tables\Columns\TextColumn::make('uraian')->limit(50),
                Tables\Columns\TextColumn::make('tgl_berangkat')
                    ->formatStateUsing(fn ($state) => date('d-M-Y', strtotime($state))),
                Tables\Columns\TextColumn::make('tgl_kembali')->formatStateUsing(fn ($state) => date('d-M-Y', strtotime($state))),
            ])
            ->filters([
                // Filter untuk pencarian no_spt
                Filter::make('no_spt')
                    ->form([
                        Forms\Components\TextInput::make('no_spt')
                            ->label('Nomor SPT')
                            ->placeholder('Cari nomor SPT...')
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $data['no_spt'] ?
                            $query->where('no_spt', 'like', "%{$data['no_spt']}%") :
                            $query;
                    }),

                // Filter untuk rentang tanggal berangkat
                Filter::make('tgl_berangkat')
                    ->form([
                        Forms\Components\DatePicker::make('from')
                            ->label('Dari Tanggal'),
                        Forms\Components\DatePicker::make('until')
                            ->label('Sampai Tanggal')
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('tgl_berangkat', '>=', $date),
                            )
                            ->when(
                                $data['until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('tgl_berangkat', '<=', $date),
                            );
                    }),

                // Filter untuk user (hanya tersedia untuk super admin)
                SelectFilter::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Filter by User')
                    ->visible(fn(): bool => Auth::user()->hasRole('super_admin')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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

    protected static function generatePdfUrl(): string
    {
        $queryParams = request()->query('tableFilters', []);
        $filterParams = [];

        foreach ($queryParams as $key => $filter) {
            if (!is_array($filter)) {
                continue;
            }

            // Handle single value filters
            if (isset($filter['value'])) {
                $filterParams[$key] = $filter['value'];
            }

            // Handle date range filters
            if (isset($filter['from'])) {
                $filterParams[$key . '_dari'] = $filter['from'];
            }
            if (isset($filter['until'])) {
                $filterParams[$key . '_sampai'] = $filter['until'];
            }

            // Handle specific filters if needed
            switch ($key) {
                case 'no_spt':
                    $filterParams['no_spt'] = $filter['value'] ?? null;
                    break;
                case 'tgl_berangkat':
                    if (isset($filter['from'])) {
                        $filterParams['tgl_berangkat_dari'] = $filter['from'];
                    }
                    if (isset($filter['until'])) {
                        $filterParams['tgl_berangkat_sampai'] = $filter['until'];
                    }
                    break;
                case 'user_id':
                    if (Auth::user()->hasRole('super_admin')) {
                        $filterParams['user_id'] = $filter['value'] ?? null;
                    }
                    break;
            }
        }

        // Remove null/empty values
        $filterParams = array_filter($filterParams, function ($value) {
            return $value !== null && $value !== '';
        });

        return route('perjalananPdf', $filterParams);
    }
}
