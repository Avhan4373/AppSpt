<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class AppBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:backup {--name= : Optional file name for the backup zip} {--disk=local : Storage disk to save into (local/public)} {--dir=backups/app : Directory inside the disk}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a ZIP backup of the application code and configuration (excluding vendor/node_modules).';

    public function handle(): int
    {
        if (!class_exists(ZipArchive::class)) {
            $this->error('ZipArchive extension is not enabled.');
            return self::FAILURE;
        }

        $projectRoot = base_path();
        $disk = (string) $this->option('disk');
        $dir = trim((string) $this->option('dir'), '/');
        $dir = $dir === '' ? 'backups/app' : $dir;

        // Resolve target directory absolute path via disk
        try {
            $backupRoot = rtrim(Storage::disk($disk)->path($dir), '/');
        } catch (\Throwable $e) {
            $this->error('Invalid disk configured: ' . $disk);
            return self::FAILURE;
        }
        if (!is_dir($backupRoot)) {
            mkdir($backupRoot, 0775, true);
        }

        $fileName = $this->option('name') ?: ('app_backup_' . date('Ymd_His') . '.zip');
        if (!str_ends_with(strtolower($fileName), '.zip')) {
            $fileName .= '.zip';
        }
        $backupZipPath = $backupRoot . '/' . $fileName;

        $this->info('Creating application backup: ' . $backupZipPath);

        $zip = new ZipArchive();
        if ($zip->open($backupZipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            $this->error('Unable to create backup zip.');
            return self::FAILURE;
        }

        $pathsToBackup = [
            'app',
            'bootstrap',
            'config',
            'database',
            'public',
            'resources',
            'routes',
            'composer.json',
            'composer.lock',
            'package.json',
            'package-lock.json',
            'vite.config.js',
            'tailwind.config.js',
            'postcss.config.js',
            'phpunit.xml',
            'VERSION',
        ];

        foreach ($pathsToBackup as $relative) {
            $fullPath = $projectRoot . '/' . $relative;
            if (is_dir($fullPath)) {
                $this->addDirectoryToZip($zip, $fullPath, $relative);
            } elseif (is_file($fullPath)) {
                $zip->addFile($fullPath, $relative);
            }
        }

        $zip->close();

        $this->info('Backup finished: ' . $backupZipPath);
        $this->line($backupZipPath);
        if ($disk === 'public') {
            try {
                $publicRelative = trim($dir . '/' . $fileName, '/');
                $url = Storage::disk('public')->url($publicRelative);
                $this->line('PUBLIC_URL: ' . $url);
            } catch (\Throwable $e) {
                // ignore url error
            }
        }
        return self::SUCCESS;
    }

    private function addDirectoryToZip(ZipArchive $zip, string $directoryPath, string $baseName): void
    {
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directoryPath, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($iterator as $file) {
            $path = (string) $file;
            // Skip common excludes
            if (stripos($path, DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR) !== false) {
                continue;
            }
            if (stripos($path, DIRECTORY_SEPARATOR.'node_modules'.DIRECTORY_SEPARATOR) !== false) {
                continue;
            }

            $localName = $baseName . '/' . ltrim(str_replace($directoryPath, '', $path), '/\\');
            if (is_dir($path)) {
                $zip->addEmptyDir($localName);
            } else {
                $zip->addFile($path, $localName);
            }
        }
    }
}


