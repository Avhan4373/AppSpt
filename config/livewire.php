<?php

return [
    'temporary_file_upload' => [
        // Gunakan disk 'local' (storage/app/private) agar privat
        'disk' => env('LIVEWIRE_UPLOAD_DISK', 'local'),

        // Aturan validasi upload Livewire (Laravel Validator). max dalam KB.
        'rules' => 'file|max:2048000', // ~2 GB

        // Direktori sementara di dalam disk di atas.
        'directory' => 'livewire-tmp',
    ],
];


