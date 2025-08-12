/*
  Basic service worker for AppSPT
  - Precaches core assets and offline page
  - Network-first strategy for navigations with offline fallback
  - Cache-first strategy for same-origin static assets
*/

const STATIC_CACHE = 'appspt-static-v1';
const RUNTIME_CACHE = 'appspt-runtime-v1';
const PRE_CACHE_URLS = [
  '/',
  '/offline.html',
  '/manifest.json',
  '/favicon.ico',
];

self.addEventListener('install', (event) => {
  event.waitUntil((async () => {
    const cache = await caches.open(STATIC_CACHE);
    await cache.addAll(PRE_CACHE_URLS);
    await self.skipWaiting();
  })());
});

self.addEventListener('activate', (event) => {
  event.waitUntil((async () => {
    if ('navigationPreload' in self.registration) {
      try {
        await self.registration.navigationPreload.enable();
      } catch (_) {
        // ignore
      }
    }

    const cacheNames = await caches.keys();
    await Promise.all(
      cacheNames
        .filter((name) => ![STATIC_CACHE, RUNTIME_CACHE].includes(name))
        .map((name) => caches.delete(name)),
    );
    await self.clients.claim();
  })());
});

self.addEventListener('fetch', (event) => {
  const { request } = event;

  // Only handle GET requests
  if (request.method !== 'GET') {
    return;
  }

  // Handle navigations (HTML pages)
  if (request.mode === 'navigate') {
    event.respondWith((async () => {
      try {
        // Use any preloaded response if available
        const preload = await event.preloadResponse;
        if (preload) return preload;

        // Try network first
        const networkResponse = await fetch(request);
        return networkResponse;
      } catch (error) {
        // Offline fallback to cached offline page
        const cache = await caches.open(STATIC_CACHE);
        const cached = await cache.match('/offline.html');
        return cached || new Response('Offline', { status: 503, statusText: 'Offline' });
      }
    })());
    return;
  }

  // For other GET requests (assets, API GET, etc.)
  event.respondWith((async () => {
    const runtimeCache = await caches.open(RUNTIME_CACHE);
    const cached = await runtimeCache.match(request);
    if (cached) return cached;

    try {
      const response = await fetch(request);
      // Cache successful same-origin responses
      const isSameOrigin = new URL(request.url).origin === self.location.origin;
      if (isSameOrigin && response && response.status === 200) {
        runtimeCache.put(request, response.clone());
      }
      return response;
    } catch (_) {
      // Last-resort: try static cache (icons, manifest) or show offline page for HTML
      const staticCache = await caches.open(STATIC_CACHE);
      const fallback = await staticCache.match(request) || await staticCache.match('/offline.html');
      return fallback || new Response('Offline', { status: 503, statusText: 'Offline' });
    }
  })());
});


