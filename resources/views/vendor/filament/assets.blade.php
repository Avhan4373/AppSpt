@if (isset($data))
    <script>
        window.filamentData = @js($data)
    </script>
@endif

@foreach ($assets as $asset)
    @if (! $asset->isLoadedOnRequest())
        {{ $asset->getHtml() }}
    @endif
@endforeach
<style>
    :root {
        @foreach ($cssVariables ?? [] as $cssVariableName => $cssVariableValue) --{{ $cssVariableName }}:{{ $cssVariableValue }}; @endforeach
    }
</style>


<!-- Tambahkan manifest.json -->
<link rel="manifest" href="/manifest.json">

<!-- Tambahkan service worker -->

<!-- Tambahkan service worker -->
<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/service-worker.js')
                .then((registration) => {
                    console.log('Service Worker registered:', registration);
                })
                .catch((error) => {
                    console.error('Service Worker registration failed:', error);
                });
        });
    }
</script>