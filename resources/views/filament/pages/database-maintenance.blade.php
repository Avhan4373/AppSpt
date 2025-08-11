<x-filament::page>
    <x-filament::section>
        <x-slot name="heading">Backup Database</x-slot>
        <x-slot name="description">Membuat backup .sql ke folder `storage/app/backups`.</x-slot>
        <div class="text-sm text-gray-600 dark:text-gray-300">Gunakan tombol di header untuk membuat backup.</div>
    </x-filament::section>

    <x-filament::section class="mt-6">
        <x-slot name="heading">Import Database</x-slot>
        <x-slot name="description">Import file .sql ke database yang terkonfigurasi. Pastikan Anda mengerti risikonya (data akan ditimpa).</x-slot>

        <form wire:submit.prevent="import">
            <x-filament::input.wrapper>
                <input type="file" wire:model="importFile" accept=".sql" />
            </x-filament::input.wrapper>
            <div class="mt-4">
                <x-filament::button type="submit" color="danger" icon="heroicon-o-arrow-up-tray">Import</x-filament::button>
            </div>
        </form>

        <x-filament::loading-indicator wire:loading class="mt-4" />
        @error('importFile')
            <div class="text-danger-600 mt-2">{{ $message }}</div>
        @enderror
    </x-filament::section>
</x-filament::page>


