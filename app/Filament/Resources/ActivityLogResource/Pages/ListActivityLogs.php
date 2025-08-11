<?php

namespace App\Filament\Resources\ActivityLogResource\Pages;

use App\Filament\Resources\ActivityLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActivityLogs extends ListRecords
{
    protected static string $resource = ActivityLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('clear_logs')
                ->label('Hapus Log')
                ->icon('heroicon-o-trash')
                ->color('danger')
                ->requiresConfirmation()
                ->modalHeading('Hapus Log Aktivitas')
                ->modalDescription('Apakah Anda yakin ingin menghapus semua log aktivitas? Tindakan ini tidak dapat dibatalkan.')
                ->modalSubmitActionLabel('Ya, hapus log')
                ->action(function () {
                    \App\Models\ActivityLog::truncate();
                    $this->notify('success', 'Log aktivitas berhasil dihapus.');
                })
                ->visible(fn () => auth()->user()->hasRole(['super_admin', 'admin'])),
        ];
    }
} 