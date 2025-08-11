<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Forms;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use Livewire\WithFileUploads;

class DatabaseMaintenance extends Page
{
    use WithFileUploads;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static string $view = 'filament.pages.database-maintenance';

    protected static ?string $navigationGroup = 'System';

    protected static ?int $navigationSort = 100;

    protected static ?string $title = 'Database Maintenance';

    public $importFile;

    public static function canAccess(): bool
    {
        $user = auth()->user();
        if (!$user) {
            return false;
        }
        return $user->hasAnyRole(['super_admin', 'admin']);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('backup')
                ->label('Backup Database')
                ->color('success')
                ->icon('heroicon-o-arrow-down-tray')
                ->form([
                    Forms\Components\Select::make('directory')
                        ->label('Pilih Folder Tujuan (di bawah storage/app)')
                        ->options(function () {
                            $dirs = collect(Storage::disk('local')->allDirectories());
                            $options = $dirs->mapWithKeys(function ($d) {
                                $abs = storage_path('app/' . ltrim($d, '/'));
                                return [$abs => $abs];
                            })->toArray();
                            $default = storage_path('app/backups');
                            if (!array_key_exists($default, $options)) {
                                $options = [$default => $default] + $options;
                            }
                            $root = storage_path('app');
                            if (!array_key_exists($root, $options)) {
                                $options = [$root => $root] + $options;
                            }
                            return $options;
                        })
                        ->searchable()
                        ->preload()
                        ->default(fn () => storage_path('app/backups'))
                        ->helperText('Folder server di dalam storage/app. Anda juga bisa isi path kustom di bawah ini.'),
                    Forms\Components\TextInput::make('custom_directory')
                        ->label('Atau Path Kustom (opsional)')
                        ->placeholder(storage_path('app/backups'))
                        ->helperText('Jika diisi, ini akan dipakai sebagai folder tujuan.'),
                    Forms\Components\TextInput::make('filename')
                        ->label('Nama File')
                        ->default(fn () => sprintf('%s-%s.sql', config('database.connections.' . config('database.default') . '.database'), now()->format('Ymd_His')))
                        ->required()
                        ->helperText('Akan disimpan sebagai {folder}/{nama file}'),
                    Forms\Components\Toggle::make('no_events')
                        ->label('Lewati Events')
                        ->helperText('Centang untuk tidak menyertakan EVENTS saat backup'),
                    Forms\Components\Toggle::make('no_routines')
                        ->label('Lewati Routines (Stored Procedures/Functions)')
                        ->helperText('Centang jika terjadi error metadata routines (mysql.proc 1558)'),
                ])
                ->action(function (array $data) {
                    try {
                        $selectedDir = $data['custom_directory'] ?: ($data['directory'] ?? storage_path('app/backups'));
                        Artisan::call('app:db-backup', [
                            '--path' => $selectedDir,
                            '--filename' => $data['filename'] ?? null,
                            '--no-events' => !empty($data['no_events']),
                            '--no-routines' => !empty($data['no_routines']),
                        ]);
                        $targetPath = rtrim($selectedDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . ($data['filename'] ?? '');
                        Notification::make()->title('Backup berhasil dibuat: ' . $targetPath)->success()->send();
                    } catch (\Throwable $e) {
                        Notification::make()->title('Backup gagal: ' . $e->getMessage())->danger()->send();
                    }
                }),
        ];
    }

    public function import(): void
    {
        try {
            $this->validate([
                'importFile' => ['required', 'file'],
            ]);

            $originalExtension = method_exists($this->importFile, 'getClientOriginalExtension') ? $this->importFile->getClientOriginalExtension() : 'sql';
            if ($originalExtension && strtolower($originalExtension) !== 'sql') {
                throw new \RuntimeException('File harus berformat .sql');
            }

            $storedPath = $this->importFile->storeAs('imports', 'import-'.time().'.sql');
            $absolutePath = storage_path('app/'.$storedPath);

            Artisan::call('app:db-import', ['file' => $absolutePath]);

            Notification::make()->title('Import database berhasil')->success()->send();
        } catch (\Throwable $e) {
            Notification::make()->title('Import gagal: '.$e->getMessage())->danger()->send();
        }
    }
}


