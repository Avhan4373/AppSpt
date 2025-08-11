# Activity Logging System

Sistem ini mencatat semua aktivitas pengguna dalam aplikasi, termasuk login, logout, dan aktivitas CRUD pada model-model tertentu.

## Fitur Utama

### 1. Log Aktivitas Otomatis
- **Login/Logout**: Mencatat setiap kali user login atau logout
- **CRUD Operations**: Mencatat create, read, update, delete pada model
- **Page Views**: Mencatat halaman yang dikunjungi
- **IP Address**: Mencatat IP address pengguna
- **User Agent**: Mencatat browser dan device yang digunakan

### 2. Model yang Dilacak
- User
- SuratKeluar
- SuratMasuk
- SppdDalamDaerah
- SppdLuarDaerah
- Dan model lainnya

### 3. Interface Filament
- **Activity Logs Resource**: Menampilkan semua log aktivitas
- **Recent Activities Widget**: Widget di dashboard untuk aktivitas terbaru
- **Filtering**: Filter berdasarkan user, action, tanggal, dll
- **Search**: Pencarian berdasarkan description, user, dll

## Struktur Database

### Tabel: activity_logs

```sql
CREATE TABLE activity_logs (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NULL,
    action VARCHAR(255) NOT NULL,
    model_type VARCHAR(255) NULL,
    model_id BIGINT UNSIGNED NULL,
    description TEXT NULL,
    properties JSON NULL,
    ip_address VARCHAR(45) NULL,
    user_agent TEXT NULL,
    url VARCHAR(255) NULL,
    method VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    
    INDEX idx_user_created (user_id, created_at),
    INDEX idx_action_created (action, created_at),
    INDEX idx_model (model_type, model_id),
    
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

## Komponen Sistem

### 1. Model
- `App\Models\ActivityLog`: Model utama untuk menyimpan log
- `App\Traits\LogsActivity`: Trait untuk menambahkan logging ke model

### 2. Service
- `App\Services\ActivityLogService`: Service untuk menangani logging

### 3. Middleware
- `App\Http\Middleware\ActivityLogMiddleware`: Middleware untuk mencatat aktivitas otomatis

### 4. Event Listeners
- `App\Listeners\LogSuccessfulLogin`: Mencatat login
- `App\Listeners\LogSuccessfulLogout`: Mencatat logout

### 5. Filament Resources
- `App\Filament\Resources\ActivityLogResource`: Resource untuk mengelola log
- `App\Filament\Widgets\RecentActivities`: Widget untuk aktivitas terbaru

## Cara Penggunaan

### 1. Menambahkan Logging ke Model

```php
use App\Traits\LogsActivity;

class YourModel extends Model
{
    use LogsActivity;
    
    // Model akan otomatis mencatat create, update, delete
}
```

### 2. Manual Logging

```php
use App\Services\ActivityLogService;

// Log aktivitas sederhana
ActivityLogService::log('custom_action', 'Deskripsi aktivitas');

// Log dengan model
ActivityLogService::logCreate($model, 'Custom description');

// Log dengan properties tambahan
ActivityLogService::log('action', 'description', $model, ['key' => 'value']);
```

### 3. Mengakses Log dari Model

```php
$model = YourModel::find(1);

// Mendapatkan semua log untuk model ini
$logs = $model->activityLogs;

// Log aktivitas custom
$model->logActivity('custom_action', 'Custom description');
```

## Konfigurasi

### 1. Middleware
Middleware sudah terdaftar di `bootstrap/app.php`:
```php
$middleware->alias([
    'activity.log' => \App\Http\Middleware\ActivityLogMiddleware::class,
]);
```

### 2. Event Listeners
Event listeners terdaftar di `app/Providers/EventServiceProvider.php`:
```php
protected $listen = [
    Login::class => [
        LogSuccessfulLogin::class,
    ],
    Logout::class => [
        LogSuccessfulLogout::class,
    ],
];
```

## Akses di Filament

### 1. Activity Logs Resource
- Navigasi: System > Activity Logs
- Fitur: View, filter, search, delete
- Hanya admin yang bisa delete logs

### 2. Recent Activities Widget
- Lokasi: Dashboard
- Menampilkan 10 aktivitas terbaru
- Real-time updates

## Keamanan

1. **Hanya Admin**: Hanya user dengan role admin yang bisa menghapus logs
2. **Data Sensitif**: Password dan data sensitif tidak dicatat
3. **IP Tracking**: Mencatat IP address untuk audit trail
4. **User Agent**: Mencatat browser dan device untuk analisis

## Monitoring dan Maintenance

### 1. Cleanup Logs
- Gunakan fitur "Clear Logs" di Activity Logs Resource
- Atau jalankan command: `php artisan tinker`
```php
\App\Models\ActivityLog::truncate();
```

### 2. Backup Logs
- Backup tabel `activity_logs` secara berkala
- Logs bisa menjadi besar seiring waktu

### 3. Performance
- Index sudah ditambahkan untuk query yang sering digunakan
- Consider pagination untuk data yang besar

## Troubleshooting

### 1. Logs tidak tercatat
- Pastikan user sudah login
- Cek apakah middleware terdaftar
- Cek apakah event listeners terdaftar

### 2. Performance issues
- Monitor ukuran tabel activity_logs
- Consider archiving old logs
- Optimize queries dengan index

### 3. Missing data
- Cek apakah model menggunakan trait LogsActivity
- Cek apakah service dipanggil dengan benar
- Cek apakah ada error di log Laravel 