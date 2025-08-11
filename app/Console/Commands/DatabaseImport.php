<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class DatabaseImport extends Command
{
    protected $signature = 'app:db-import {file : Path to .sql file}';

    protected $description = 'Import a .sql dump file into the configured MySQL database';

    public function handle(): int
    {
        $file = $this->argument('file');
        if (!file_exists($file)) {
            $this->error("File not found: $file");
            return self::FAILURE;
        }

        $connection = config('database.default');
        $config = config("database.connections.$connection");

        if ($config['driver'] !== 'mysql') {
            $this->error('Only MySQL driver is supported for this import command.');
            return self::FAILURE;
        }

        $host = $config['host'] ?? '127.0.0.1';
        $port = (string)($config['port'] ?? '3306');
        $database = $config['database'] ?? '';
        $username = $config['username'] ?? '';
        $password = $config['password'] ?? '';

        $command = sprintf(
            'mysql --host=%s --port=%s --user=%s --password=%s %s < %s',
            escapeshellarg($host),
            escapeshellarg($port),
            escapeshellarg($username),
            escapeshellarg($password),
            escapeshellarg($database),
            escapeshellarg($file)
        );

        $process = Process::fromShellCommandline($command, base_path(), null, null, 600);
        $this->info('Running mysql import...');
        $process->run(function ($type, $buffer) {
            $this->output->write($buffer);
        });

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $this->info('Database import completed successfully.');
        return self::SUCCESS;
    }
}


