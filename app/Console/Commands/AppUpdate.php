<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan as ArtisanFacade;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class AppUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update {--from-web : Indicate the command is triggered from web UI}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update application code and dependencies, then run migrations and cache optimizations.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $projectRoot = base_path();

        $this->info('Starting application update...');

        // Step 1: Pull latest changes
        $this->runShellCommand('git fetch --all', $projectRoot);
        $this->runShellCommand('git rev-parse --abbrev-ref HEAD', $projectRoot, false);
        $currentBranch = trim($this->lastCommandOutput ?? '');
        if ($currentBranch === '') {
            $currentBranch = 'origin/HEAD';
        }
        $this->runShellCommand('git pull --rebase', $projectRoot);

        // Step 2: Install composer dependencies
        $this->runShellCommand('composer install --no-interaction --prefer-dist --optimize-autoloader', $projectRoot);

        // Step 3: Run database migrations
        $this->callSilent('migrate', ['--force' => true]);
        $this->info('Database migrations executed.');

        // Step 4: Clear and rebuild caches
        $this->callSilent('optimize:clear');
        $this->callSilent('config:cache');
        $this->callSilent('route:cache');
        $this->callSilent('view:cache');

        // Optional: Upgrade Filament assets if needed
        try {
            $this->callSilent('filament:upgrade');
        } catch (\Throwable $e) {
            // Non-fatal; continue
        }

        $this->info('Application update finished successfully.');

        return self::SUCCESS;
    }

    /**
     * Run a shell command and stream its output to the console.
     */
    private function runShellCommand(string $command, string $workingDirectory, bool $throwOnFailure = true, int $timeoutSeconds = 600): void
    {
        $this->line("$ ".$command);

        $process = Process::fromShellCommandline($command, $workingDirectory, null, null, $timeoutSeconds);
        $process->run(function ($type, $buffer) {
            $this->output->write($buffer);
            $this->lastCommandOutput = $buffer;
        });

        if (!$process->isSuccessful() && $throwOnFailure) {
            throw new ProcessFailedException($process);
        }
    }

    /** @var string|null */
    private ?string $lastCommandOutput = null;
}


