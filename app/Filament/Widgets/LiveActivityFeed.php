<?php

namespace App\Filament\Widgets;

use App\Models\ActivityLog;
use Filament\Widgets\Widget;
use Illuminate\Support\Carbon;

class LiveActivityFeed extends Widget
{
    protected static string $view = 'filament.widgets.live-activity-feed';
    protected static ?int $sort = 5;
    protected static bool $isLazy = false;
    protected static ?string $pollingInterval = '15s';

    public function getViewData(): array
    {
        $user = auth()->user();
        $isPrivileged = $user && ($user->hasRole('super_admin') || $user->can('view_any_activity_log'));

        $baseQuery = ActivityLog::with('user')->latest();
        if (! $isPrivileged && $user) {
            $baseQuery->where('user_id', $user->id);
        }

        $activities = (clone $baseQuery)
            ->limit(20)
            ->get()
            ->map(function ($activity) {
                return [
                    'id' => $activity->id,
                    'user' => $activity->user ? $activity->user->name : 'Tidak diketahui',
                    'action' => $this->formatAction($activity->action),
                    'description' => $activity->description,
                    'time' => $activity->created_at->diffForHumans(),
                    'color' => $this->getActionColor($activity->action),
                    'icon' => $this->getActionIcon($activity->action),
                ];
            });

        $totalQuery = clone $baseQuery;
        $todayQuery = (clone $baseQuery)->whereDate('created_at', today());

        return [
            'activities' => $activities,
            'totalActivities' => $totalQuery->count(),
            'todayActivities' => $todayQuery->count(),
        ];
    }

    protected function formatAction(string $action): string
    {
        return match ($action) {
            'login' => 'Masuk',
            'logout' => 'Keluar',
            'create' => 'Membuat',
            'update' => 'Mengubah',
            'delete' => 'Menghapus',
            'view' => 'Melihat',
            default => ucfirst($action),
        };
    }

    protected function getActionColor(string $action): string
    {
        return match ($action) {
            'login' => 'success',
            'logout' => 'warning',
            'create' => 'info',
            'update' => 'primary',
            'delete' => 'danger',
            'view' => 'gray',
            default => 'gray',
        };
    }

    protected function getActionIcon(string $action): string
    {
        return match ($action) {
            'login' => 'heroicon-o-arrow-right-on-rectangle',
            'logout' => 'heroicon-o-arrow-left-on-rectangle',
            'create' => 'heroicon-o-plus-circle',
            'update' => 'heroicon-o-pencil-square',
            'delete' => 'heroicon-o-trash',
            'view' => 'heroicon-o-eye',
            default => 'heroicon-o-information-circle',
        };
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
            || $user->can('widget_LiveActivityFeed')
            || $user->can('view_any_activity_log')
            || $user->can('view_activity_log');
    }
} 