<?php

namespace App\Filament\Widgets;

use App\Models\ActivityLog;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class ActivityStats extends BaseWidget
{
    protected static ?int $sort = 2;
    protected static bool $isLazy = false;
    protected static ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        $today = now()->startOfDay();
        $thisWeek = now()->startOfWeek();
        $thisMonth = now()->startOfMonth();
        $user = auth()->user();
        $isPrivileged = $user && ($user->hasRole('super_admin') || $user->can('view_any_activity_log'));

        // Today's activities
        $todayQuery = ActivityLog::whereDate('created_at', $today);
        if (! $isPrivileged && $user) { $todayQuery->where('user_id', $user->id); }
        $todayActivities = (clone $todayQuery)->count();
        $todayUsers = (clone $todayQuery)->distinct('user_id')->count();
        
        // This week's activities
        $weekQuery = ActivityLog::whereBetween('created_at', [$thisWeek, now()]);
        if (! $isPrivileged && $user) { $weekQuery->where('user_id', $user->id); }
        $weekActivities = (clone $weekQuery)->count();
        $weekUsers = (clone $weekQuery)->distinct('user_id')->count();
        
        // This month's activities
        $monthQuery = ActivityLog::whereBetween('created_at', [$thisMonth, now()]);
        if (! $isPrivileged && $user) { $monthQuery->where('user_id', $user->id); }
        $monthActivities = (clone $monthQuery)->count();
        $monthUsers = (clone $monthQuery)->distinct('user_id')->count();

        // Most active users today
        $mostActiveQuery = ActivityLog::whereDate('created_at', $today);
        if (! $isPrivileged && $user) { $mostActiveQuery->where('user_id', $user->id); }
        $mostActiveUser = $mostActiveQuery
            ->with('user')
            ->select('user_id', DB::raw('count(*) as activity_count'))
            ->groupBy('user_id')
            ->orderBy('activity_count', 'desc')
            ->first();

        // Recent activity types
        $recentActionsQuery = ActivityLog::whereDate('created_at', $today);
        if (! $isPrivileged && $user) { $recentActionsQuery->where('user_id', $user->id); }
        $recentActions = $recentActionsQuery
            ->select('action', DB::raw('count(*) as count'))
            ->groupBy('action')
            ->orderBy('count', 'desc')
            ->limit(3)
            ->get();

        return [
            Stat::make('Aktivitas Hari Ini', $todayActivities)
                ->description($todayUsers . ' pengguna aktif hari ini')
                ->descriptionIcon('heroicon-m-users')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),

            Stat::make('Minggu Ini', $weekActivities)
                ->description($weekUsers . ' pengguna aktif minggu ini')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('info')
                ->chart([17, 16, 14, 15, 14, 13, 12]),

            Stat::make('Bulan Ini', $monthActivities)
                ->description($monthUsers . ' pengguna aktif bulan ini')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('warning')
                ->chart([15, 4, 10, 2, 12, 4, 12]),

            Stat::make('Pengguna Paling Aktif Hari Ini', $mostActiveUser ? $mostActiveUser->user?->name ?? 'Tidak diketahui' : 'Tidak ada aktivitas')
                ->description($mostActiveUser ? $mostActiveUser->activity_count . ' aktivitas' : 'Tidak ada aktivitas hari ini')
                ->descriptionIcon('heroicon-m-user-circle')
                ->color('primary'),
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
            || $user->can('widget_ActivityStats')
            || $user->can('view_any_activity_log')
            || $user->can('view_activity_log');
    }
} 