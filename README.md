<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# AppSpt_V1

Aplikasi Sistem Penomoran Surat dan Perjalanan Dinas

## Fitur Utama

### 1. Sistem Penomoran Surat
- Penomoran otomatis untuk surat keluar
- Kategori, sub kategori, dan rincian kategori
- Format penomoran yang fleksibel

### 2. Manajemen Surat
- Surat Masuk
- Surat Keluar
- Surat Izin

### 3. Perjalanan Dinas
- SPPD Dalam Daerah
- SPPD Luar Daerah
- Generate nomor SPT otomatis

### 4. **Activity Logging System** 🆕
- Mencatat semua aktivitas pengguna (login, logout, CRUD)
- Interface Filament untuk melihat log aktivitas
- Widget dashboard untuk aktivitas terbaru
- Filtering dan searching log aktivitas
- IP address dan user agent tracking
- Keamanan: hanya admin yang bisa menghapus logs

### 5. **Real-Time Activity Monitoring** 🆕
- **Dashboard Widgets Real-Time**:
  - Activity Stats: Statistik aktivitas hari ini, minggu ini, dan bulan ini
  - Recent Activities: Daftar 15 aktivitas terbaru dengan polling 30 detik
  - Activity Chart: Grafik aktivitas 7 hari terakhir dengan polling 60 detik
  - Live Activity Feed: Feed aktivitas real-time dengan polling 15 detik
- **Detail CRUD Tracking**: Mencatat create, update, delete, view dengan detail
- **Real-Time Updates**: Widgets update otomatis setiap 15-60 detik
- **Enhanced Analytics**: Statistik dan grafik aktivitas pengguna

#### Cara Akses Activity Logs:
1. **Dashboard**: 
   - Widget "Activity Stats" menampilkan statistik aktivitas
   - Widget "Recent Activities" menampilkan 15 aktivitas terbaru
   - Widget "Activity Chart" menampilkan grafik 7 hari terakhir
   - Widget "Live Activity Feed" menampilkan feed real-time
2. **Menu System > Activity Logs**: Halaman lengkap untuk mengelola log aktivitas
3. **Filtering**: Filter berdasarkan user, action, tanggal, dll
4. **Search**: Pencarian berdasarkan description, user, dll

#### Model yang Dilacak:
- User (login/logout)
- SuratKeluar (CRUD)
- SuratMasuk (CRUD)
- SppdDalamDaerah (CRUD)
- SppdLuarDaerah (CRUD)

#### Real-Time Features:
- **Polling Intervals**: 15-60 detik untuk update otomatis
- **Live Feed**: Feed aktivitas real-time dengan UI yang menarik
- **Activity Charts**: Grafik interaktif untuk analisis tren
- **Statistics**: Statistik real-time untuk monitoring

## Teknologi

- Laravel 11
- Filament 3
- MySQL
- Tailwind CSS

## Instalasi

1. Clone repository
2. Install dependencies: `composer install`
3. Copy `.env.example` ke `.env`
4. Generate key: `php artisan key:generate`
5. Setup database di `.env`
6. Run migrations: `php artisan migrate`
7. Run seeders: `php artisan db:seed`
8. Install npm dependencies: `npm install`
9. Build assets: `npm run build`

## Penggunaan

1. Akses aplikasi di `http://localhost:8000`
2. Login dengan kredensial default
3. Mulai menggunakan fitur-fitur aplikasi

## Dokumentasi

- [Sistem Penomoran Surat](docs/SISTEM_PENOMORAN_SURAT.md)
- [Activity Logging System](docs/ACTIVITY_LOGGING.md)

## Testing

Untuk testing fitur activity logging:
```bash
# Test basic activity logging
php artisan test:activity-log --user=1 --action=login
php artisan test:activity-log --user=1 --action=create
php artisan test:activity-log --user=1 --action=custom

# Test real-time activity creation
php artisan test:realtime-activity --user=1 --count=5
```

## Real-Time Monitoring

### Dashboard Widgets:
1. **Activity Stats**: Statistik aktivitas hari ini, minggu ini, bulan ini
2. **Recent Activities**: Tabel aktivitas terbaru dengan filter
3. **Activity Chart**: Grafik aktivitas 7 hari terakhir
4. **Live Activity Feed**: Feed aktivitas real-time

### Polling Intervals:
- Live Activity Feed: 15 detik
- Recent Activities: 30 detik
- Activity Stats: 30 detik
- Activity Chart: 60 detik

## License

This project is licensed under the MIT License.
