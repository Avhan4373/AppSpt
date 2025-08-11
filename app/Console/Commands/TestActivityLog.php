<?php

namespace App\Console\Commands;

use App\Models\ActivityLog;
use App\Models\User;
use App\Services\ActivityLogService;
use Illuminate\Console\Command;

class TestActivityLog extends Command
{
    protected $signature = 'test:activity-log {--user=1} {--action=test}';
    protected $description = 'Test activity logging functionality';

    public function handle()
    {
        $userId = $this->option('user');
        $action = $this->option('action');

        $user = User::find($userId);
        
        if (!$user) {
            $this->error("User with ID {$userId} not found!");
            return 1;
        }

        $this->info("Testing activity logging for user: {$user->name}");

        switch ($action) {
            case 'login':
                ActivityLogService::logLogin();
                $this->info('Logged login activity');
                break;
            case 'logout':
                ActivityLogService::logLogout();
                $this->info('Logged logout activity');
                break;
            case 'create':
                ActivityLogService::logCreate($user, 'Test create activity');
                $this->info('Logged create activity');
                break;
            case 'update':
                ActivityLogService::logUpdate($user, 'Test update activity');
                $this->info('Logged update activity');
                break;
            case 'delete':
                ActivityLogService::logDelete($user, 'Test delete activity');
                $this->info('Logged delete activity');
                break;
            case 'view':
                ActivityLogService::logView($user, 'Test view activity');
                $this->info('Logged view activity');
                break;
            case 'custom':
                ActivityLogService::log('custom_action', 'Test custom activity', $user, ['test' => 'data']);
                $this->info('Logged custom activity');
                break;
            default:
                $this->error("Unknown action: {$action}");
                $this->info('Available actions: login, logout, create, update, delete, view, custom');
                return 1;
        }

        $this->info("\nRecent activity logs:");
        $logs = ActivityLog::with('user')->latest()->limit(5)->get();

        $headers = ['ID', 'User', 'Action', 'Description', 'IP', 'Created At'];
        $rows = [];

        foreach ($logs as $log) {
            $rows[] = [
                $log->id,
                $log->user ? $log->user->name : 'Unknown',
                $log->action,
                substr($log->description ?? '', 0, 50),
                $log->ip_address,
                $log->created_at->format('Y-m-d H:i:s'),
            ];
        }

        $this->table($headers, $rows);

        return 0;
    }
} 