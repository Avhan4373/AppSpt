<?php

namespace App\Traits;

use App\Services\ActivityLogService;

trait LogsActivity
{
    protected static function bootLogsActivity()
    {
        static::created(function ($model) {
            try {
                ActivityLogService::logCreate($model);
            } catch (\Exception $e) {
                // Log error but don't break the application
                \Log::error('Failed to log create activity: ' . $e->getMessage());
            }
        });

        static::updated(function ($model) {
            try {
                // Only log if there are actual changes
                if ($model->wasChanged()) {
                    $changes = $model->getChanges();
                    $original = $model->getOriginal();
                    
                    // Remove timestamps from changes for cleaner logging
                    unset($changes['updated_at']);
                    
                    $description = "Updated " . class_basename($model);
                    if (!empty($changes)) {
                        $changedFields = array_keys($changes);
                        $description .= " - Changed fields: " . implode(', ', $changedFields);
                    }
                    
                    ActivityLogService::logUpdate($model, $description);
                }
            } catch (\Exception $e) {
                // Log error but don't break the application
                \Log::error('Failed to log update activity: ' . $e->getMessage());
            }
        });

        static::deleted(function ($model) {
            try {
                ActivityLogService::logDelete($model);
            } catch (\Exception $e) {
                // Log error but don't break the application
                \Log::error('Failed to log delete activity: ' . $e->getMessage());
            }
        });
    }

    /**
     * Get the activity logs for this model.
     */
    public function activityLogs()
    {
        return $this->morphMany(\App\Models\ActivityLog::class, 'subject', 'model_type', 'model_id');
    }

    /**
     * Log a custom activity for this model.
     */
    public function logActivity(string $action, string $description = null, array $properties = [])
    {
        return ActivityLogService::log($action, $description, $this, $properties);
    }

    /**
     * Get recent activities for this model.
     */
    public function getRecentActivities(int $limit = 10)
    {
        return $this->activityLogs()
            ->with('user')
            ->latest()
            ->limit($limit)
            ->get();
    }

    /**
     * Check if model has any activities.
     */
    public function hasActivities(): bool
    {
        return $this->activityLogs()->exists();
    }

    /**
     * Get the last activity for this model.
     */
    public function getLastActivity()
    {
        return $this->activityLogs()
            ->with('user')
            ->latest()
            ->first();
    }
} 