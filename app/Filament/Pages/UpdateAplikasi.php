<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Artisan;
use Filament\Forms; 
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Filament\Actions\Action;

class UpdateAplikasi extends Page
{
    use WithFileUploads;
    protected static ?string $navigationIcon = 'heroicon-o-arrow-path';

    protected static string $view = 'filament.pages.update-aplikasi';

    protected static ?string $navigationGroup = 'System';

    protected static ?int $navigationSort = 99;

    protected static ?string $title = 'Update Aplikasi';

    protected function getViewData(): array
    {
        $version = null;
        $versionFile = base_path('VERSION');
        if (is_file($versionFile)) {
            $version = trim((string) file_get_contents($versionFile));
        }
        return [
            'appVersion' => $version,
        ];
    }

    // No explicit public property needed; FileUpload stores directly to disk and returns path

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
            Actions\Action::make('update')
                ->label('Jalankan Update')
                ->color('warning')
                ->icon('heroicon-o-arrow-path')
                ->requiresConfirmation()
                ->modalHeading('Konfirmasi Update Aplikasi')
                ->modalDescription('Ini akan menjalankan git pull, composer install, migrate, dan clear cache. Lanjutkan?')
                ->action(function () {
                    try {
                        Artisan::call('app:update');
                        Notification::make()
                            ->title('Update berhasil dijalankan')
                            ->success()
                            ->send();
                    } catch (\Throwable $e) {
                        Notification::make()
                            ->title('Update gagal: ' . $e->getMessage())
                            ->danger()
                            ->send();
                    }
                }),
            Actions\Action::make('downloadBackup')
                ->label('Download Backup')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('gray')
                ->form([
                    Forms\Components\TextInput::make('name')
                        ->label('Nama file (opsional)')
                        ->placeholder('app_backup_YYYYmmdd_HHMMSS.zip')
                        ->hint('Kosongkan untuk nama otomatis'),
                ])
                ->action(function (array $data) {
                    $name = trim((string)($data['name'] ?? ''));
                    $query = $name !== '' ? ('?name=' . urlencode($name)) : '';
                    // Redirect to download route so browser downloads directly
                    return redirect()->to(url('/admin/download-backup' . $query));
                }),
            Actions\Action::make('uploadZip')
                ->label('Update dari ZIP')
                ->icon('heroicon-o-archive-box-arrow-down')
                ->color('success')
                ->form([
                    Forms\Components\FileUpload::make('zipFile')
                        ->label('File ZIP update')
                        ->required()
                        ->acceptedFileTypes(['application/zip', 'application/x-zip-compressed', '.zip'])
                        ->preserveFilenames()
                        ->directory('updates')
                        ->visibility('private')
                        ->downloadable()
                        ->openable(),
                ])
                ->action(function (array $data) {
                    try {
                        $path = $data['zipFile'];
                        $absolutePath = Storage::disk(config('filesystems.default'))->path($path);
                        Artisan::call('app:update-zip', [
                            'zipPath' => $absolutePath,
                        ]);

                        Notification::make()
                            ->title('Update via ZIP berhasil dijalankan')
                            ->success()
                            ->send();
                    } catch (\Throwable $e) {
                        Notification::make()
                            ->title('Update via ZIP gagal: ' . $e->getMessage())
                            ->danger()
                            ->send();
                    }
                }),
            Actions\Action::make('backupApp')
                ->label('Backup Aplikasi')
                ->icon('heroicon-o-document-arrow-down')
                ->color('info')
                ->requiresConfirmation()
                ->modalHeading('Buat Backup Aplikasi?')
                ->modalDescription('Ini akan membuat ZIP backup kode aplikasi (tanpa vendor/node_modules). Pilih lokasi penyimpanan.')
                ->form([
                    Forms\Components\Select::make('disk')
                        ->label('Disk penyimpanan')
                        ->native(false)
                        ->options([
                            'local' => 'local (private)',
                            'public' => 'public (dapat diakses via URL)',
                        ])
                        ->default(config('filesystems.default', 'local'))
                        ->required(),
                    Forms\Components\TextInput::make('dir')
                        ->label('Folder di disk')
                        ->placeholder('backups/app')
                        ->default('backups/app')
                        ->required(),
                    Forms\Components\TextInput::make('name')
                        ->label('Nama file (opsional)')
                        ->placeholder('app_backup_YYYYmmdd_HHMMSS.zip'),
                ])
                ->action(function (array $data) {
                    try {
                        $params = [];
                        if (!empty($data['name'])) { $params['--name'] = $data['name']; }
                        if (!empty($data['disk'])) { $params['--disk'] = $data['disk']; }
                        if (!empty($data['dir'])) { $params['--dir'] = $data['dir']; }

                        Artisan::call('app:backup', $params);
                        $message = trim(Artisan::output());

                        $body = $message;
                        // If public disk chosen, try to present a URL hint
                        if (($data['disk'] ?? null) === 'public' && !empty($data['dir'])) {
                            // Try to parse the last line path
                            $lines = array_values(array_filter(array_map('trim', explode("\n", $message))));
                            $pathLine = end($lines) ?: '';
                            $urlHint = null;
                            if (str_contains($message, 'PUBLIC_URL:')) {
                                foreach ($lines as $line) {
                                    if (str_starts_with($line, 'PUBLIC_URL:')) {
                                        $urlHint = trim(Str::after($line, 'PUBLIC_URL:'));
                                        break;
                                    }
                                }
                            }
                            if ($urlHint) {
                                $body .= "\nURL: " . $urlHint;
                            }
                        }

                        Notification::make()
                            ->title('Backup selesai')
                            ->body($body)
                            ->success()
                            ->send();
                    } catch (\Throwable $e) {
                        Notification::make()
                            ->title('Backup gagal: ' . $e->getMessage())
                            ->danger()
                            ->send();
                    }
                }),
        ];
    }
}


