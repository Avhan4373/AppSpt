<x-filament::page>
    <div class="space-y-4">
        <x-filament::section>
            <x-slot name="heading">Update Aplikasi</x-slot>
            <x-slot name="description">
                Menjalankan pembaruan kode dari repository, install dependencies, migrate database, dan membersihkan cache.
            </x-slot>
            <div class="prose dark:prose-invert">
                <p>Tekan tombol "Jalankan Update" di header untuk memulai proses.</p>
                <ul class="list-disc pl-6">
                    <li>git fetch & pull</li>
                    <li>composer install</li>
                    <li>php artisan migrate --force</li>
                    <li>php artisan optimize:clear, config:cache, route:cache, view:cache</li>
                </ul>
            </div>
        </x-filament::section>
    </div>
</x-filament::page>


