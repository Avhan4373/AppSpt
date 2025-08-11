<?php

namespace App\Services;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Cache;

class ActivityLogService
{
    /**
     * Log an activity.
     */
    public static function log(string $action, ?string $description = null, $model = null, array $properties = []): ActivityLog
    {
        $data = [
            'user_id' => Auth::id(),
            'action' => $action,
            'description' => $description,
            'ip_address' => Request::ip(),
            'user_agent' => Request::userAgent(),
            'url' => Request::fullUrl(),
            'method' => Request::method(),
            'properties' => $properties,
        ];

        if ($model) {
            $data['model_type'] = get_class($model);
            $data['model_id'] = $model->id;
        }

        return ActivityLog::create($data);
    }

    /**
     * Log a login activity.
     */
    public static function logLogin(): ActivityLog
    {
        if (!auth()->check()) {
            return self::log('login', 'Pengguna berhasil masuk ke sistem');
        }

        $userId = auth()->id();
        
        // Use database transaction to prevent race conditions
        return \DB::transaction(function () use ($userId) {
            // Check if there's already a login activity for this user in the last 60 seconds
            $recentLogin = ActivityLog::where('user_id', $userId)
                ->where('action', 'login')
                ->where('created_at', '>=', now()->subSeconds(60))
                ->lockForUpdate()
                ->first();
            
            if ($recentLogin) {
                // If there's a recent login, return it instead of creating a new one
                return $recentLogin;
            }
            
            // Log the login activity
            return self::log('login', 'Pengguna berhasil masuk ke sistem');
        });
    }

    /**
     * Log a logout activity.
     */
    public static function logLogout(): ActivityLog
    {
        return self::log('logout', 'Pengguna keluar dari sistem');
    }

    /**
     * Log a create activity.
     */
    public static function logCreate($model, ?string $description = null): ActivityLog
    {
        $modelName = self::getModelNameInIndonesian($model);
        $description = $description ?? "Membuat {$modelName} baru";
        
        // Get the primary key value for better description
        $primaryKey = $model->getKeyName();
        $primaryValue = $model->getAttribute($primaryKey);
        
        if ($primaryValue) {
            $description .= " (ID: {$primaryValue})";
        }
        
        return self::log('create', $description, $model, [
            'model_name' => $modelName,
            'primary_key' => $primaryValue,
            'created_at' => $model->created_at,
        ]);
    }

    /**
     * Log an update activity.
     */
    public static function logUpdate($model, ?string $description = null): ActivityLog
    {
        $modelName = self::getModelNameInIndonesian($model);
        $description = $description ?? "Mengubah {$modelName}";
        
        // Get the primary key value for better description
        $primaryKey = $model->getKeyName();
        $primaryValue = $model->getAttribute($primaryKey);
        
        if ($primaryValue) {
            $description .= " (ID: {$primaryValue})";
        }
        
        return self::log('update', $description, $model, [
            'model_name' => $modelName,
            'primary_key' => $primaryValue,
            'updated_at' => $model->updated_at,
        ]);
    }

    /**
     * Log a delete activity.
     */
    public static function logDelete($model, ?string $description = null): ActivityLog
    {
        $modelName = self::getModelNameInIndonesian($model);
        $description = $description ?? "Menghapus {$modelName}";
        
        // Get the primary key value for better description
        $primaryKey = $model->getKeyName();
        $primaryValue = $model->getAttribute($primaryKey);
        
        if ($primaryValue) {
            $description .= " (ID: {$primaryValue})";
        }
        
        return self::log('delete', $description, $model, [
            'model_name' => $modelName,
            'primary_key' => $primaryValue,
            'deleted_at' => now(),
        ]);
    }

    /**
     * Log a view activity.
     */
    public static function logView($model = null, ?string $description = null): ActivityLog
    {
        if ($model) {
            $modelName = self::getModelNameInIndonesian($model);
            $description = $description ?? "Melihat {$modelName}";
            
            // Get the primary key value for better description
            $primaryKey = $model->getKeyName();
            $primaryValue = $model->getAttribute($primaryKey);
            
            if ($primaryValue) {
                $description .= " (ID: {$primaryValue})";
            }
            
            return self::log('view', $description, $model, [
                'model_name' => $modelName,
                'primary_key' => $primaryValue,
            ]);
        }
        
        $description = $description ?? 'Melihat halaman';
        return self::log('view', $description);
    }

    /**
     * Get model name in Indonesian
     */
    private static function getModelNameInIndonesian($model): string
    {
        $modelName = class_basename($model);
        
        $translations = [
            'User' => 'Pengguna',
            'SuratKeluar' => 'Surat Keluar',
            'SuratMasuk' => 'Surat Masuk',
            'SppdDalamDaerah' => 'SPPD Dalam Daerah',
            'SppdLuarDaerah' => 'SPPD Luar Daerah',
            'Category' => 'Kategori',
            'SubKategori' => 'Sub Kategori',
            'RincianKategori' => 'Rincian Kategori',
            'SuratIzin' => 'Surat Izin',
            'Sk' => 'SK',
            'DetailUsers' => 'Detail Pengguna',
        ];
        
        return $translations[$modelName] ?? $modelName;
    }

    /**
     * Get recent activities for a user.
     */
    public static function getRecentActivities($userId = null, int $limit = 10)
    {
        $query = ActivityLog::with('user')->latest();
        
        if ($userId) {
            $query->where('user_id', $userId);
        }

        return $query->limit($limit)->get();
    }

    /**
     * Get activities for a specific model.
     */
    public static function getModelActivities($model)
    {
        return ActivityLog::where('model_type', get_class($model))
            ->where('model_id', $model->id)
            ->with('user')
            ->latest()
            ->get();
    }

    /**
     * Get activity statistics for dashboard.
     */
    public static function getActivityStats()
    {
        $today = now()->startOfDay();
        $thisWeek = now()->startOfWeek();
        $thisMonth = now()->startOfMonth();

        return [
            'today' => [
                'total' => ActivityLog::whereDate('created_at', $today)->count(),
                'users' => ActivityLog::whereDate('created_at', $today)->distinct('user_id')->count(),
                'logins' => ActivityLog::whereDate('created_at', $today)->where('action', 'login')->count(),
                'creates' => ActivityLog::whereDate('created_at', $today)->where('action', 'create')->count(),
                'updates' => ActivityLog::whereDate('created_at', $today)->where('action', 'update')->count(),
                'deletes' => ActivityLog::whereDate('created_at', $today)->where('action', 'delete')->count(),
            ],
            'week' => [
                'total' => ActivityLog::whereBetween('created_at', [$thisWeek, now()])->count(),
                'users' => ActivityLog::whereBetween('created_at', [$thisWeek, now()])->distinct('user_id')->count(),
            ],
            'month' => [
                'total' => ActivityLog::whereBetween('created_at', [$thisMonth, now()])->count(),
                'users' => ActivityLog::whereBetween('created_at', [$thisMonth, now()])->distinct('user_id')->count(),
            ],
        ];
    }
} 