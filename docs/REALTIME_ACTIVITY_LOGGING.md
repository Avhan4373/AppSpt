# Real-Time Activity Logging System

Sistem activity logging yang telah ditingkatkan dengan fitur real-time untuk melacak dan menampilkan aktivitas pengguna secara live.

## 🎯 Fitur Real-Time

### 1. Dashboard Widgets Real-Time
- **Activity Stats**: Statistik aktivitas hari ini, minggu ini, dan bulan ini
- **Recent Activities**: Daftar 15 aktivitas terbaru dengan polling 30 detik
- **Activity Chart**: Grafik aktivitas 7 hari terakhir dengan polling 60 detik
- **Live Activity Feed**: Feed aktivitas real-time dengan polling 15 detik

### 2. Polling Intervals
- **Live Activity Feed**: 15 detik
- **Recent Activities**: 30 detik
- **Activity Stats**: 30 detik
- **Activity Chart**: 60 detik

### 3. Detail CRUD Tracking
- **Create**: Mencatat pembuatan data baru dengan ID
- **Update**: Mencatat perubahan data dengan field yang berubah
- **Delete**: Mencatat penghapusan data
- **View**: Mencatat akses ke halaman/data

## 🏗️ Komponen Real-Time

### 1. Widgets
- `ActivityStats`: Statistik aktivitas dengan chart
- `RecentActivities`: Tabel aktivitas terbaru dengan filter
- `ActivityChart`: Grafik aktivitas 7 hari terakhir
- `LiveActivityFeed`: Feed aktivitas real-time dengan UI yang menarik

### 2. Enhanced Services
- `ActivityLogService`: Service yang ditingkatkan untuk logging detail
- Detail tracking untuk setiap CRUD operation
- Properties tambahan untuk analisis

### 3. Enhanced Traits
- `LogsActivity`: Trait yang ditingkatkan untuk tracking perubahan
- Hanya mencatat perubahan yang sebenarnya
- Informasi field yang berubah

## 📊 Dashboard Layout

### Widget Order:
1. **Activity Stats** (Sort: 2)
   - Today's Activities
   - This Week
   - This Month
   - Most Active User Today

2. **Recent Activities** (Sort: 3)
   - Tabel dengan 15 aktivitas terbaru
   - Filter berdasarkan action dan user
   - Action buttons untuk view detail

3. **Activity Chart** (Sort: 4)
   - Grafik line chart 7 hari terakhir
   - Breakdown berdasarkan action type
   - Responsive design

4. **Live Activity Feed** (Sort: 5)
   - Feed real-time dengan UI card
   - Icon dan color coding
   - Time stamps dengan diffForHumans

## 🔧 Konfigurasi Real-Time

### 1. Polling Configuration
```php
// Widget configuration
protected static bool $isLazy = false;
protected static ?string $pollingInterval = '30s';
```

### 2. Widget Registration
```php
// AdminPanelProvider.php
->widgets([
    ActivityStats::class,
    RecentActivities::class,
    ActivityChart::class,
    LiveActivityFeed::class,
])
```

### 3. Enhanced Logging
```php
// ActivityLogService.php
public static function logCreate($model, string $description = null): ActivityLog
{
    $modelName = class_basename($model);
    $description = $description ?? "Created new {$modelName}";
    
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
```

## 🎨 UI/UX Features

### 1. Color Coding
- **Login**: Green (success)
- **Logout**: Yellow (warning)
- **Create**: Blue (info)
- **Update**: Purple (primary)
- **Delete**: Red (danger)
- **View**: Gray

### 2. Icons
- **Login**: arrow-right-on-rectangle
- **Logout**: arrow-left-on-rectangle
- **Create**: plus-circle
- **Update**: pencil-square
- **Delete**: trash
- **View**: eye

### 3. Time Display
- Relative time (e.g., "2 minutes ago")
- Formatted timestamps
- Real-time updates

## 📈 Analytics & Statistics

### 1. Activity Stats
- Total activities today/week/month
- Active users count
- Most active user today
- Activity breakdown by type

### 2. Activity Chart
- 7-day trend line
- Multiple datasets (total, login, create, update, delete)
- Interactive chart with legends
- Responsive design

### 3. Real-Time Metrics
- Live activity count
- Today's activity count
- User activity tracking
- Performance metrics

## 🧪 Testing

### 1. Test Commands
```bash
# Test basic activity logging
php artisan test:activity-log --user=1 --action=login

# Test real-time activity creation
php artisan test:realtime-activity --user=1 --count=5
```

### 2. Manual Testing
1. Login ke aplikasi
2. Buat, edit, hapus data
3. Navigasi ke berbagai halaman
4. Monitor dashboard widgets
5. Cek real-time updates

## 🔍 Monitoring

### 1. Dashboard Monitoring
- Real-time activity feed
- Activity statistics
- User activity tracking
- Performance metrics

### 2. Activity Logs Resource
- Full activity history
- Advanced filtering
- Search functionality
- Export capabilities

### 3. Performance Monitoring
- Polling intervals optimization
- Database query optimization
- Memory usage monitoring
- Response time tracking

## 🚀 Performance Optimization

### 1. Database Optimization
- Indexes on frequently queried columns
- Efficient queries with eager loading
- Pagination for large datasets
- Caching for statistics

### 2. Frontend Optimization
- Lazy loading for widgets
- Efficient polling intervals
- Debounced updates
- Optimized re-renders

### 3. Real-Time Optimization
- WebSocket consideration for future
- Efficient polling strategies
- Background job processing
- Memory management

## 🔮 Future Enhancements

### 1. WebSocket Integration
- Real-time notifications
- Live activity streaming
- Instant updates
- Push notifications

### 2. Advanced Analytics
- User behavior analysis
- Activity patterns
- Performance insights
- Predictive analytics

### 3. Enhanced UI
- Interactive charts
- Drag-and-drop widgets
- Customizable dashboard
- Mobile optimization

## 📝 Usage Examples

### 1. Viewing Real-Time Activities
```php
// Get recent activities
$activities = ActivityLogService::getRecentActivities();

// Get activity statistics
$stats = ActivityLogService::getActivityStats();

// Get model activities
$modelActivities = $model->getRecentActivities(10);
```

### 2. Custom Activity Logging
```php
// Log custom activity
$model->logActivity('custom_action', 'Custom description');

// Log with properties
ActivityLogService::log('action', 'description', $model, [
    'key' => 'value',
    'metadata' => 'additional info'
]);
```

### 3. Widget Customization
```php
// Custom polling interval
protected static ?string $pollingInterval = '45s';

// Custom sort order
protected static ?int $sort = 1;

// Custom visibility
public static function canView(): bool
{
    return auth()->user()->hasRole('admin');
}
```

## 🎯 Best Practices

### 1. Performance
- Monitor polling intervals
- Optimize database queries
- Use efficient caching
- Implement pagination

### 2. Security
- Validate user permissions
- Sanitize activity data
- Implement rate limiting
- Audit trail maintenance

### 3. User Experience
- Provide clear feedback
- Optimize loading times
- Implement error handling
- Ensure accessibility

## 🔧 Troubleshooting

### 1. Widgets Not Updating
- Check polling intervals
- Verify JavaScript console
- Check network connectivity
- Review browser compatibility

### 2. Performance Issues
- Monitor database queries
- Check memory usage
- Optimize polling intervals
- Review caching strategy

### 3. Data Accuracy
- Verify activity logging
- Check timezone settings
- Review data consistency
- Validate user sessions 