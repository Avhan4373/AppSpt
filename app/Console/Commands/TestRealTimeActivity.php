<?php

namespace App\Console\Commands;

use App\Models\ActivityLog;
use App\Models\User;
use App\Services\ActivityLogService;
use Illuminate\Console\Command;

class TestRealTimeActivity extends Command
{
    protected $signature = 'test:realtime-activity {--user=1} {--count=5}';
    protected $description = 'Test real-time activity logging by creating multiple activities';

    public function handle()
    {
        $userId = $this->option('user');
        $count = $this->option('count');

        $user = User::find($userId);
        
        if (!$user) {
            $this->error("User with ID {$userId} not found!");
            return 1;
        }

        $this->info("Testing real-time activity logging for user: {$user->name}");
        $this->info("Creating {$count} activities...");

        $actions = ['create', 'update', 'view', 'delete'];
        $models = ['User', 'SuratKeluar', 'SuratMasuk', 'SppdDalamDaerah'];

        for ($i = 1; $i <= $count; $i++) {
            $action = $actions[array_rand($actions)];
            $model = $models[array_rand($models)];
            
            $description = "Test {$action} activity #{$i} for {$model}";
            
            switch ($action) {
                case 'create':
                    ActivityLogService::logCreate($user, $description);
                    break;
                case 'update':
                    ActivityLogService::logUpdate($user, $description);
                    break;
                case 'view':
                    ActivityLogService::logView($user, $description);
                    break;
                case 'delete':
                    ActivityLogService::logDelete($user, $description);
                    break;
            }
            
            $this->line("Created {$action} activity #{$i}");
            
            // Small delay to simulate real-time
            usleep(500000); // 0.5 seconds
        }

        $this->info("\n✅ Successfully created {$count} test activities!");
        
        // Show recent activities
        $this->info("\nRecent activities:");
        $logs = ActivityLog::with('user')
            ->latest()
            ->limit(10)
            ->get();

        $headers = ['ID', 'User', 'Action', 'Description', 'Time'];
        $rows = [];

        foreach ($logs as $log) {
            $rows[] = [
                $log->id,
                $log->user ? $log->user->name : 'Unknown',
                $log->action,
                substr($log->description ?? '', 0, 40),
                $log->created_at->format('H:i:s'),
            ];
        }

        $this->table($headers, $rows);

        $this->info("\n🎯 Real-time features to test:");
        $this->info("1. Dashboard widgets should update automatically every 15-60 seconds");
        $this->info("2. Activity Stats widget shows today's statistics");
        $this->info("3. Recent Activities widget shows latest activities");
        $this->info("4. Activity Chart shows 7-day trend");
        $this->info("5. Live Activity Feed shows real-time feed");

        return 0;
    }
} 