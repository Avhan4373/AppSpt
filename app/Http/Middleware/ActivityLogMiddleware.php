<?php

namespace App\Http\Middleware;

use App\Services\ActivityLogService;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActivityLogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only log if user is authenticated and not already logged
        if (auth()->check() && !$this->isLoginRequest($request)) {
            $this->logActivity($request);
        }

        return $response;
    }

    /**
     * Check if this is a login request to avoid duplicate logging
     */
    protected function isLoginRequest(Request $request): bool
    {
        $routeName = $request->route()?->getName() ?? '';
        $path = $request->path();
        $method = $request->method();
        
        // Check for login-related routes and methods
        $isLoginRoute = str_contains($routeName, 'login') || 
                       str_contains($path, 'login') ||
                       $request->is('admin/login') ||
                       $request->is('login');
        
        // Also check if this is a POST request to login endpoint
        $isLoginPost = $method === 'POST' && (
            str_contains($path, 'login') || 
            str_contains($routeName, 'login')
        );
        
        return $isLoginRoute || $isLoginPost;
    }

    /**
     * Log the activity based on the request.
     */
    protected function logActivity(Request $request): void
    {
        $action = $this->determineAction($request);
        
        if ($action && !$this->shouldSkipActivity($request)) {
            ActivityLogService::log($action, $this->getDescription($request, $action));
        }
    }

    /**
     * Determine the action based on the request method and route.
     */
    protected function determineAction(Request $request): ?string
    {
        $method = $request->method();
        $routeName = $request->route()?->getName() ?? '';

        // Skip logging for certain routes
        if ($this->shouldSkipLogging($routeName)) {
            return null;
        }

        // Only log significant actions, not every GET request
        return match ($method) {
            'POST' => 'create',
            'PUT', 'PATCH' => 'update',
            'DELETE' => 'delete',
            default => null,
        };
    }

    /**
     * Get description for the activity in Indonesian.
     */
    protected function getDescription(Request $request, string $action): string
    {
        $routeName = $request->route()?->getName() ?? '';
        $path = $request->path();

        // Custom descriptions in Indonesian
        $descriptions = [
            'filament.admin.resources.users.index' => 'Melihat daftar pengguna',
            'filament.admin.resources.surat-keluars.index' => 'Melihat daftar surat keluar',
            'filament.admin.resources.surat-masuks.index' => 'Melihat daftar surat masuk',
            'filament.admin.resources.sppd-dalam-daerahs.index' => 'Melihat daftar SPPD dalam daerah',
            'filament.admin.resources.sppd-luar-daerahs.index' => 'Melihat daftar SPPD luar daerah',
            'filament.admin.resources.categories.index' => 'Melihat daftar kategori',
            'filament.admin.resources.sub-kategoris.index' => 'Melihat daftar sub kategori',
            'filament.admin.resources.rincian-kategoris.index' => 'Melihat daftar rincian kategori',
            'filament.admin.resources.surat-izins.index' => 'Melihat daftar surat izin',
            'filament.admin.resources.sks.index' => 'Melihat daftar SK',
        ];

        if (isset($descriptions[$routeName])) {
            return $descriptions[$routeName];
        }

        // Fallback description in Indonesian
        $actionTranslations = [
            'create' => 'Membuat',
            'update' => 'Mengubah',
            'delete' => 'Menghapus',
            'view' => 'Melihat',
        ];

        $actionText = $actionTranslations[$action] ?? ucfirst($action);
        return $actionText . ' ' . $this->getPathDescription($path);
    }

    /**
     * Get path description in Indonesian
     */
    protected function getPathDescription(string $path): string
    {
        $pathTranslations = [
            'admin' => 'dashboard',
            'users' => 'pengguna',
            'surat-keluars' => 'surat keluar',
            'surat-masuks' => 'surat masuk',
            'sppd-dalam-daerahs' => 'SPPD dalam daerah',
            'sppd-luar-daerahs' => 'SPPD luar daerah',
            'categories' => 'kategori',
            'sub-kategoris' => 'sub kategori',
            'rincian-kategoris' => 'rincian kategori',
            'surat-izins' => 'surat izin',
            'sks' => 'SK',
        ];

        foreach ($pathTranslations as $key => $translation) {
            if (str_contains($path, $key)) {
                return $translation;
            }
        }

        return $path;
    }

    /**
     * Check if logging should be skipped for this route.
     */
    protected function shouldSkipLogging(string $routeName): bool
    {
        $skipRoutes = [
            'filament.admin.pages.dashboard',
            'filament.admin.resources.activity-logs.index',
            'filament.admin.resources.activity-logs.create',
            'filament.admin.resources.activity-logs.edit',
            'filament.admin.resources.activity-logs.show',
            'filament.admin.resources.activity-logs.view',
            'filament.admin.login',
            'filament.admin.logout',
        ];

        return in_array($routeName, $skipRoutes);
    }

    /**
     * Check if activity should be skipped based on request details
     */
    protected function shouldSkipActivity(Request $request): bool
    {
        // Skip AJAX requests to reduce noise
        if ($request->ajax()) {
            return true;
        }

        // Skip asset requests
        if ($request->is('*.css') || $request->is('*.js') || $request->is('*.png') || $request->is('*.jpg') || $request->is('*.jpeg') || $request->is('*.gif') || $request->is('*.svg')) {
            return true;
        }

        // Skip polling requests
        if (str_contains($request->path(), 'poll')) {
            return true;
        }

        // Skip login-related requests
        if ($this->isLoginRequest($request)) {
            return true;
        }

        return false;
    }
} 