<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class DatabaseBackup extends Command
{
    protected $signature = 'app:db-backup {--path=} {--filename=} {--no-events : Skip dumping database events} {--no-routines : Skip dumping stored procedures/functions}';

    protected $description = 'Backup the configured database into storage/app/backups as a .sql file';

    public function handle(): int
    {
        $connection = config('database.default');
        $config = config("database.connections.$connection");

        if ($config['driver'] !== 'mysql') {
            $this->error('Only MySQL driver is supported for this backup command.');
            return self::FAILURE;
        }

        $host = $config['host'] ?? '127.0.0.1';
        $port = (string)($config['port'] ?? '3306');
        $database = $config['database'] ?? '';
        $username = $config['username'] ?? '';
        $password = (string) ($config['password'] ?? '');

        $backupDir = $this->option('path') ?: storage_path('app/backups');
        if (!is_dir($backupDir)) {
            mkdir($backupDir, 0755, true);
        }
        $fileName = $this->option('filename') ?: sprintf('%s-%s.sql', $database, now()->format('Ymd_His'));
        $filePath = rtrim($backupDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $fileName;

        $dumpBinary = $this->resolveDumpBinary();
        $includeEvents = !$this->option('no-events');
        $includeRoutines = !$this->option('no-routines');

        $args = $this->buildDumpArgs(
            dumpBinary: $dumpBinary,
            host: $host,
            port: $port,
            username: $username,
            password: $password,
            database: $database,
            filePath: $filePath,
            includeEvents: $includeEvents,
            includeRoutines: $includeRoutines
        );

        $process = new Process($args, base_path(), null, null, 600);
        $this->info("Running $dumpBinary...");
        $process->run(function ($type, $buffer) {
            $this->output->write($buffer);
        });

        if (!$process->isSuccessful()) {
            $errorOutput = $process->getErrorOutput();
            $eventDisabled = str_contains(strtolower($errorOutput), 'event scheduler is disabled') || str_contains($errorOutput, '1577');

            if ($includeEvents && $eventDisabled) {
                $this->warn('Event scheduler disabled detected. Retrying without dumping events...');
                $includeEvents = false;
                $argsRetry = $this->buildDumpArgs(
                    dumpBinary: $dumpBinary,
                    host: $host,
                    port: $port,
                    username: $username,
                    password: $password,
                    database: $database,
                    filePath: $filePath,
                    includeEvents: $includeEvents,
                    includeRoutines: $includeRoutines
                );
                $process = new Process($argsRetry, base_path(), null, null, 600);
                $process->run(function ($type, $buffer) {
                    $this->output->write($buffer);
                });
            }

            if (!$process->isSuccessful()) {
                $errorOutput = $process->getErrorOutput();
                $procMismatch = str_contains(strtolower($errorOutput), 'mysql.proc') || str_contains($errorOutput, '1558');
                if ($includeRoutines && $procMismatch) {
                    $this->warn('Routine metadata issue detected (mysql.proc). Retrying without dumping routines...');
                    $includeRoutines = false;
                    $argsRetry2 = $this->buildDumpArgs(
                        dumpBinary: $dumpBinary,
                        host: $host,
                        port: $port,
                        username: $username,
                        password: $password,
                        database: $database,
                        filePath: $filePath,
                        includeEvents: $includeEvents,
                        includeRoutines: $includeRoutines
                    );
                    $process = new Process($argsRetry2, base_path(), null, null, 600);
                    $process->run(function ($type, $buffer) {
                        $this->output->write($buffer);
                    });
                }
            }
        }

        if (!$process->isSuccessful()) {
            if (file_exists($filePath)) {
                @unlink($filePath);
            }
            throw new ProcessFailedException($process);
        }

        $this->info("Backup created at: $filePath");
        return self::SUCCESS;
    }

    private function resolveDumpBinary(): string
    {
        // Prefer mariadb-dump if available to avoid deprecation warning on MariaDB
        foreach (['mariadb-dump', 'mysqldump'] as $binary) {
            $process = Process::fromShellCommandline("command -v $binary", base_path(), null, null, 5);
            $process->run();
            if ($process->isSuccessful() && trim($process->getOutput()) !== '') {
                return $binary;
            }
        }
        // Fallback
        return 'mysqldump';
    }

    private function buildDumpArgs(string $dumpBinary, string $host, string $port, string $username, string $password, string $database, string $filePath, bool $includeEvents, bool $includeRoutines): array
    {
        $args = [
            $dumpBinary,
            "--host=$host",
            "--port=$port",
            "--user=$username",
            '--single-transaction',
            '--quick',
            '--lock-tables=false',
            "--result-file=$filePath",
        ];

        if ($includeRoutines) {
            $args[] = '--routines';
        }

        if ($password !== '') {
            $args[] = "--password=$password";
        }

        if ($includeEvents) {
            $args[] = '--events';
        }

        $args[] = $database;

        return $args;
    }
}


