<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan as ArtisanFacade;
use Illuminate\Support\Facades\File;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use ZipArchive;

class AppUpdateFromZip extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-zip {zipPath? : Absolute path to the uploaded ZIP file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update application from a provided ZIP: maintenance mode, extract, mirror selected paths, composer install, migrate, cache.';

    /** @var string|null */
    private ?string $lastCommandOutput = null;

    public function handle(): int
    {
        if (!class_exists(ZipArchive::class)) {
            $this->error('ZipArchive extension is not enabled.');
            return self::FAILURE;
        }

        $zipPath = $this->argument('zipPath');
        if (!$zipPath) {
            $this->line('No zipPath provided, trying to find the latest file under storage/app/updates/*.zip');
            $candidates = glob(storage_path('app/updates/*.zip')) ?: [];
            rsort($candidates);
            $zipPath = $candidates[0] ?? null;
        }

        if (!$zipPath || !is_file($zipPath)) {
            $this->error('ZIP file not found: ' . ($zipPath ?: '(none)'));
            return self::FAILURE;
        }

        $projectRoot = base_path();
        $filesystem = new Filesystem();

        $this->info('Starting update from ZIP: ' . $zipPath);

        // Prepare temp directories
        $workRoot = storage_path('app/updates');
        if (!is_dir($workRoot)) {
            mkdir($workRoot, 0775, true);
        }
        $extractDir = $workRoot . '/extract_' . date('Ymd_His');
        $backupDir = $workRoot . '/backups';
        if (!is_dir($backupDir)) {
            mkdir($backupDir, 0775, true);
        }

        // Extract ZIP
        $this->info('Extracting ZIP...');
        $zip = new ZipArchive();
        if ($zip->open($zipPath) !== true) {
            $this->error('Failed to open ZIP file.');
            return self::FAILURE;
        }
        mkdir($extractDir, 0775, true);
        if (!$zip->extractTo($extractDir)) {
            $zip->close();
            $this->error('Failed to extract ZIP file.');
            return self::FAILURE;
        }
        $zip->close();

        // Detect root inside extracted folder (some zips have a single root directory)
        $extractedEntries = array_values(array_filter(scandir($extractDir), function ($item) use ($extractDir) {
            return $item !== '.' && $item !== '..';
        }));
        $candidateRoot = $extractDir;
        if (count($extractedEntries) === 1) {
            $single = $extractDir . '/' . $extractedEntries[0];
            if (is_dir($single)) {
                $candidateRoot = $single;
            }
        }

        $this->line('Using extracted root: ' . $candidateRoot);

        // Create backup of important paths
        $this->info('Creating backup...');
        $backupZipPath = $backupDir . '/backup_' . date('Ymd_His') . '.zip';
        $this->createBackupArchive($backupZipPath, $projectRoot);
        $this->info('Backup saved to: ' . $backupZipPath);

        // Maintenance mode
        $this->info('Putting application into maintenance mode...');
        ArtisanFacade::call('down', [
            '--render' => 'errors::503',
        ]);

        try {
            // Mirror selected paths from zip to project
            $this->info('Applying files...');
            $pathsToUpdate = [
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

            foreach ($pathsToUpdate as $relativePath) {
                $origin = $candidateRoot . '/' . $relativePath;
                $target = $projectRoot . '/' . $relativePath;

                if (is_dir($origin)) {
                    $this->line("- Mirroring directory: {$relativePath}");
                    $filesystem->mkdir($target);
                    $filesystem->mirror($origin, $target, null, [
                        'override' => true,
                        'copy_on_windows' => true,
                    ]);
                } elseif (is_file($origin)) {
                    $this->line("- Copying file: {$relativePath}");
                    $filesystem->copy($origin, $target, true);
                } else {
                    // skip missing
                }
            }

            // Try to detect version from ZIP and write to project VERSION file
            try {
                $detectedVersion = $this->detectVersionFromSource($candidateRoot);
                if ($detectedVersion) {
                    file_put_contents($projectRoot . '/VERSION', trim($detectedVersion) . "\n");
                    $this->line('Detected version: ' . $detectedVersion);
                }
            } catch (\Throwable $e) {
                // ignore
            }

            // Composer install
            $this->info('Installing composer dependencies...');
            $this->runShellCommand('composer install --no-interaction --prefer-dist --optimize-autoloader', $projectRoot);

            // Database migrations
            $this->info('Running database migrations...');
            $this->callSilent('migrate', ['--force' => true]);

            // Clear and rebuild caches
            $this->info('Clearing and rebuilding caches...');
            $this->callSilent('optimize:clear');
            $this->callSilent('config:cache');
            $this->callSilent('route:cache');
            $this->callSilent('view:cache');

            // Optional filament upgrade
            try {
                $this->callSilent('filament:upgrade');
            } catch (\Throwable $e) {
                // non-fatal
            }

            $this->info('Update from ZIP finished successfully.');
        } catch (\Throwable $e) {
            $this->error('Update failed: ' . $e->getMessage());
            return self::FAILURE;
        } finally {
            // Bring app up
            $this->info('Bringing application up...');
            ArtisanFacade::call('up');

            // Cleanup extract dir
            try {
                if (is_dir($extractDir)) {
                    File::deleteDirectory($extractDir);
                }
            } catch (\Throwable $e) {
                // ignore
            }
        }

        return self::SUCCESS;
    }

    private function createBackupArchive(string $backupZipPath, string $projectRoot): void
    {
        $zip = new ZipArchive();
        if ($zip->open($backupZipPath, ZipArchive::CREATE) !== true) {
            throw new \RuntimeException('Unable to create backup zip: ' . $backupZipPath);
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
        ];

        foreach ($pathsToBackup as $relative) {
            $full = $projectRoot . '/' . $relative;
            if (is_dir($full)) {
                $this->addDirectoryToZip($zip, $full, $relative);
            } elseif (is_file($full)) {
                $zip->addFile($full, $relative);
            }
        }

        $zip->close();
    }

    private function addDirectoryToZip(ZipArchive $zip, string $directoryPath, string $baseName): void
    {
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($directoryPath, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::SELF_FIRST
        );

        foreach ($iterator as $file) {
            $filePath = (string) $file;
            $localName = $baseName . '/' . ltrim(str_replace($directoryPath, '', $filePath), '/\\');
            if (is_dir($filePath)) {
                $zip->addEmptyDir($localName);
            } else {
                $zip->addFile($filePath, $localName);
            }
        }
    }

    private function runShellCommand(string $command, string $workingDirectory, bool $throwOnFailure = true, int $timeoutSeconds = 900): void
    {
        $this->line('$ ' . $command);

        $process = Process::fromShellCommandline($command, $workingDirectory, null, null, $timeoutSeconds);
        $process->run(function ($type, $buffer) {
            $this->output->write($buffer);
            $this->lastCommandOutput = $buffer;
        });

        if (!$process->isSuccessful() && $throwOnFailure) {
            throw new ProcessFailedException($process);
        }
    }

    private function detectVersionFromSource(string $sourceRoot): ?string
    {
        $versionFile = rtrim($sourceRoot, '/').'/VERSION';
        if (is_file($versionFile)) {
            $content = trim((string) file_get_contents($versionFile));
            return $content !== '' ? $content : null;
        }
        // Fallback: look at composer.json version field
        $composerJson = rtrim($sourceRoot, '/').'/composer.json';
        if (is_file($composerJson)) {
            try {
                $json = json_decode((string) file_get_contents($composerJson), true, 512, JSON_THROW_ON_ERROR);
                $version = $json['version'] ?? null;
                if (is_string($version) && trim($version) !== '') {
                    return trim($version);
                }
            } catch (\Throwable $e) {
                // ignore
            }
        }
        return null;
    }
}


