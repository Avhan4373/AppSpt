<?php

namespace App\Filament\Widgets;

use App\Models\ActivityLog;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class RecentActivities extends BaseWidget
{
    protected static ?int $sort = 3;
    protected int|string|array $columnSpan = 'full';
    
    // Enable polling for real-time updates
    protected static bool $isLazy = false;
    
    // Poll every 30 seconds for new activities
    protected static ?string $pollingInterval = '30s';

    public function table(Table $table): Table
    {
        $user = auth()->user();
        $isPrivileged = $user && ($user->hasRole('super_admin') || $user->can('view_any_activity_log'));

        $query = ActivityLog::query()->with('user')->latest();
        if (! $isPrivileged && $user) {
            $query->where('user_id', $user->id);
        }

        return $table
            ->query($query->limit(15))
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Pengguna')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('action')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'login' => 'success',
                        'logout' => 'warning',
                        'create' => 'info',
                        'update' => 'primary',
                        'delete' => 'danger',
                        'view' => 'gray',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'login' => 'Masuk',
                        'logout' => 'Keluar',
                        'create' => 'Membuat',
                        'update' => 'Mengubah',
                        'delete' => 'Menghapus',
                        'view' => 'Melihat',
                        default => ucfirst($state),
                    }),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(60)
                    ->searchable()
                    ->wrap(),
                Tables\Columns\TextColumn::make('model_type')
                    ->label('Model')
                    ->formatStateUsing(fn ($state) => $state ? $this->getModelNameInIndonesian($state) : '-')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ip_address')
                    ->label('IP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Waktu')
                    ->dateTime('H:i:s')
                    ->sortable()
                    ->since(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('action')
                    ->options([
                        'login' => 'Masuk',
                        'logout' => 'Keluar',
                        'create' => 'Membuat',
                        'update' => 'Mengubah',
                        'delete' => 'Menghapus',
                        'view' => 'Melihat',
                    ])
                    ->multiple()
                    ->label('Aksi'),
                Tables\Filters\SelectFilter::make('user')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->label('Pengguna'),
            ])
            ->actions([
                Tables\Actions\Action::make('view_details')
                    ->label('Lihat')
                    ->icon('heroicon-o-eye')
                    ->url(fn (ActivityLog $record): string => route('filament.admin.resources.activity-logs.view', $record))
                    ->openUrlInNewTab(),
            ])
            ->paginated(false)
            ->defaultSort('created_at', 'desc');
    }

    protected function getTableQuery(): Builder
    {
        $user = auth()->user();
        $query = ActivityLog::query()->with('user')->latest();
        if ($user && ! ($user->hasRole('super_admin') || $user->can('view_any_activity_log'))) {
            $query->where('user_id', $user->id);
        }
        return $query->limit(15);
    }

    private function getModelNameInIndonesian(string $modelType): string
    {
        $modelName = class_basename($modelType);
        
        $translations = [
            'User' => 'Pengguna',
            'SuratKeluar' => 'Surat Keluar',
            'SuratMasuk' => 'Surat Masuk',
            'SppdDalamDaerah' => 'SPPD Dalam Daerah',
            'SppdLuarDaerah' => 'SPPD Luar Daerah',
            'Category' => 'Kategori',
            'SubKategori' => 'Sub Kategori',
            'RincianKategori' => 'Rincian Kategori',
            'SuratIzin' => 'Surat Izin',
            'Sk' => 'SK',
            'DetailUsers' => 'Detail Pengguna',
        ];
        
        return $translations[$modelName] ?? $modelName;
    }

    public static function canView(): bool
    {
        $user = auth()->user();
        if (! $user) {
            return false;
        }

        if ($user->hasRole('super_admin')) {
            return true;
        }

        return $user->can('view_activity_widgets')
            || $user->can('widget_RecentActivities')
            || $user->can('view_any_activity_log')
            || $user->can('view_activity_log');
    }
} 