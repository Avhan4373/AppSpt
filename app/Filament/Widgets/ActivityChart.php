<?php

namespace App\Filament\Widgets;

use App\Models\ActivityLog;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ActivityChart extends ChartWidget
{
    protected static ?string $heading = 'Ringkasan Aktivitas (7 Hari Terakhir)';
    protected static ?int $sort = 4;
    protected static bool $isLazy = false;
    protected static ?string $pollingInterval = '60s';

    protected function getData(): array
    {
        $days = collect();
        $activities = collect();
        $logins = collect();
        $creates = collect();
        $updates = collect();
        $deletes = collect();

        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $days->push($date->format('D, j M'));
            
            $dayStart = $date->startOfDay();
            $dayEnd = $date->endOfDay();
            
            $baseQuery = ActivityLog::whereBetween('created_at', [$dayStart, $dayEnd]);
            $user = auth()->user();
            if ($user && ! ($user->hasRole('super_admin') || $user->can('view_any_activity_log'))) {
                $baseQuery->where('user_id', $user->id);
            }

            // Total activities for the day
            $totalActivities = (clone $baseQuery)->count();
            $activities->push($totalActivities);
            
            // Login activities
            $loginCount = (clone $baseQuery)->where('action', 'login')->count();
            $logins->push($loginCount);
            
            // Create activities
            $createCount = (clone $baseQuery)->where('action', 'create')->count();
            $creates->push($createCount);
            
            // Update activities
            $updateCount = (clone $baseQuery)->where('action', 'update')->count();
            $updates->push($updateCount);
            
            // Delete activities
            $deleteCount = (clone $baseQuery)->where('action', 'delete')->count();
            $deletes->push($deleteCount);
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Aktivitas',
                    'data' => $activities->toArray(),
                    'borderColor' => '#10b981',
                    'backgroundColor' => 'rgba(16, 185, 129, 0.1)',
                    'tension' => 0.4,
                ],
                [
                    'label' => 'Masuk',
                    'data' => $logins->toArray(),
                    'borderColor' => '#3b82f6',
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    'tension' => 0.4,
                ],
                [
                    'label' => 'Membuat',
                    'data' => $creates->toArray(),
                    'borderColor' => '#f59e0b',
                    'backgroundColor' => 'rgba(245, 158, 11, 0.1)',
                    'tension' => 0.4,
                ],
                [
                    'label' => 'Mengubah',
                    'data' => $updates->toArray(),
                    'borderColor' => '#8b5cf6',
                    'backgroundColor' => 'rgba(139, 92, 246, 0.1)',
                    'tension' => 0.4,
                ],
                [
                    'label' => 'Menghapus',
                    'data' => $deletes->toArray(),
                    'borderColor' => '#ef4444',
                    'backgroundColor' => 'rgba(239, 68, 68, 0.1)',
                    'tension' => 0.4,
                ],
            ],
            'labels' => $days->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'stepSize' => 1,
                    ],
                ],
            ],
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'top',
                ],
            ],
            'responsive' => true,
            'maintainAspectRatio' => false,
        ];
    }

    public static function canView(): bool
    {
        $user = auth()->user();
        if (! $user) {
            return false;
        }

        if ($user->hasRole('super_admin')) {
            return true;
        }

        return $user->can('view_activity_widgets')
            || $user->can('widget_ActivityChart')
            || $user->can('view_any_activity_log')
            || $user->can('view_activity_log');
    }
} 