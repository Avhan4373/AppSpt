<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Artisan;

class UpdateAplikasi extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-arrow-path';

    protected static string $view = 'filament.pages.update-aplikasi';

    protected static ?string $navigationGroup = 'System';

    protected static ?int $navigationSort = 99;

    protected static ?string $title = 'Update Aplikasi';

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
        ];
    }
}


