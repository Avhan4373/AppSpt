<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                Feed Aktivitas Langsung
            </h2>
            <div class="flex items-center space-x-2">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                    {{ $todayActivities }} hari ini
                </span>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                    {{ $totalActivities }} total
                </span>
            </div>
        </div>

        <div class="space-y-3 max-h-96 overflow-y-auto">
            @forelse($activities as $activity)
                <div class="flex items-start space-x-3 p-3 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center bg-{{ $activity['color'] }}-100 dark:bg-{{ $activity['color'] }}-900">
                            <x-heroicon-o-{{ str_replace('heroicon-o-', '', $activity['icon']) }} class="w-4 h-4 text-{{ $activity['color'] }}-600 dark:text-{{ $activity['color'] }}-400" />
                        </div>
                    </div>
                    
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">
                                {{ $activity['user'] }}
                            </p>
                            <span class="text-xs text-gray-500 dark:text-gray-400">
                                {{ $activity['time'] }}
                            </span>
                        </div>
                        
                        <div class="flex items-center space-x-2 mt-1">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-{{ $activity['color'] }}-100 text-{{ $activity['color'] }}-800 dark:bg-{{ $activity['color'] }}-900 dark:text-{{ $activity['color'] }}-200">
                                {{ $activity['action'] }}
                            </span>
                        </div>
                        
                        <p class="text-sm text-gray-600 dark:text-gray-300 mt-1 line-clamp-2">
                            {{ $activity['description'] }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="text-center py-8">
                    <x-heroicon-o-information-circle class="mx-auto h-12 w-12 text-gray-400" />
                    <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">Belum ada aktivitas</h3>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        Aktivitas akan muncul di sini saat pengguna berinteraksi dengan sistem.
                    </p>
                </div>
            @endforelse
        </div>

        @if($activities->count() > 0)
            <div class="mt-4 text-center">
                <a href="{{ route('filament.admin.resources.activity-logs.index') }}" 
                   class="text-sm text-primary-600 hover:text-primary-500 dark:text-primary-400 dark:hover:text-primary-300">
                    Lihat semua aktivitas →
                </a>
            </div>
        @endif
    </x-filament::section>
</x-filament-widgets::widget> 