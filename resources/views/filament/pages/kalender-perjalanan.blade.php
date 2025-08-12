@php
    /** @var \Carbon\Carbon $currentMonth */
@endphp

<x-filament::page>
    <div class="space-y-4">
        <div class="flex items-center justify-between flex-wrap gap-3">
            <div class="text-xl font-semibold">
                {{ $currentMonth->locale('id')->translatedFormat('F Y') }}
            </div>
            <div class="flex items-center gap-2">
                <x-filament::button tag="a" href="{{ request()->fullUrlWithQuery(['month' => $prevMonth]) }}" icon="heroicon-o-chevron-left">
                    Bulan Sebelumnya
                </x-filament::button>
                <x-filament::button tag="a" href="{{ request()->fullUrlWithQuery(['month' => now()->format('Y-m')]) }}" color="gray">
                    Bulan Ini
                </x-filament::button>
                <x-filament::button tag="a" href="{{ request()->fullUrlWithQuery(['month' => $nextMonth]) }}" icon-position="after" icon="heroicon-o-chevron-right">
                    Bulan Berikutnya
                </x-filament::button>
            </div>
            <div class="flex items-center gap-2">
                @php
                    $baseQuery = request()->except(['jenis']);
                @endphp
                <x-filament::button tag="a" size="sm" color="{{ $jenis === 'all' ? 'primary' : 'gray' }}" href="{{ request()->fullUrlWithQuery(array_merge($baseQuery, ['jenis' => 'all'])) }}">
                    Semua
                </x-filament::button>
                <x-filament::button tag="a" size="sm" color="{{ $jenis === 'dalam' ? 'primary' : 'gray' }}" href="{{ request()->fullUrlWithQuery(array_merge($baseQuery, ['jenis' => 'dalam'])) }}">
                    Dalam Daerah
                </x-filament::button>
                <x-filament::button tag="a" size="sm" color="{{ $jenis === 'luar' ? 'primary' : 'gray' }}" href="{{ request()->fullUrlWithQuery(array_merge($baseQuery, ['jenis' => 'luar'])) }}">
                    Luar Daerah
                </x-filament::button>
            </div>
        </div>

        <div class="rounded-lg border overflow-hidden">
            <div class="grid grid-cols-7 bg-gray-50 dark:bg-gray-900/40 text-sm text-gray-600 dark:text-gray-300 font-medium">
                <div class="p-2 text-center">Min</div>
                <div class="p-2 text-center">Sen</div>
                <div class="p-2 text-center">Sel</div>
                <div class="p-2 text-center">Rab</div>
                <div class="p-2 text-center">Kam</div>
                <div class="p-2 text-center">Jum</div>
                <div class="p-2 text-center">Sab</div>
            </div>
            <div class="divide-y">
                @foreach ($weeks as $week)
                    <div class="grid grid-cols-7">
                        @foreach ($week as $cell)
                            @if ($cell === null)
                                <div class="aspect-square p-2 bg-white dark:bg-gray-950"></div>
                            @else
                            <div class="aspect-square p-2">
    @php
        $cellClasses = $cell['used']
            ? 'bg-red-100 dark:bg-red-900/70
               border-red-300 dark:border-red-500
               ring-2 ring-red-300 dark:ring-red-500
               shadow-sm dark:shadow-red-500/20
               hover:bg-red-200 dark:hover:bg-red-800
               transition-colors duration-200'
            : 'bg-white dark:bg-gray-800
               border-gray-300 dark:border-gray-600
               hover:bg-gray-100 dark:hover:bg-gray-700
               transition-colors duration-200';
    @endphp

    <div class="h-full w-full rounded-md border {{ $cellClasses }} flex items-start justify-end p-1">
        <span class="text-xs font-medium {{ $cell['used'] ? 'text-red-900 dark:text-white font-bold' : 'text-gray-600 dark:text-gray-200' }}">
            {{ $cell['day'] }}
        </span>
    </div>
</div>

                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-sm text-gray-600 dark:text-gray-300">
            <div class="inline-flex items-center gap-2 mr-4">
                <span class="h-3 w-3 rounded bg-red-400 dark:bg-red-500 inline-block"></span>
                <span>Tanggal terpakai</span>
            </div>
            <div class="inline-flex items-center gap-2">
                <span class="h-3 w-3 rounded bg-gray-200 inline-block"></span>
                <span>Tidak terpakai</span>
            </div>
        </div>
    </div>
</x-filament::page>


