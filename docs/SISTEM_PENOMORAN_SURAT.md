# Sistem Penomoran Surat Otomatis

## Overview

Sistem penomoran surat otomatis yang mendeteksi tanggal, bulan, dan tahun untuk menghasilkan nomor SPT yang terurut dengan penambahan huruf otomatis ketika diperlukan.

## Format Nomor SPT

Format: `800.1.11.1/{NOMOR}/{TIPE}/{TAHUN}`

### Komponen:
- **Prefix**: `800.1.11.1` (tetap)
- **Nomor**: `001`, `002`, `003`, dst. atau `001.a`, `001.b`, dst.
- **Tipe**: `DD` (Dalam Daerah) atau `LD` (Luar Daerah)
- **Tahun**: `2025`, `2026`, dst.

### Contoh:
- `800.1.11.1/001/DD/2025`
- `800.1.11.1/001.a/DD/2025`
- `800.1.11.1/001.b/DD/2025`
- `800.1.11.1/002/DD/2025`

## Logika Penomoran

### 1. Deteksi Tanggal yang Sama (Prioritas Utama)

Sistem akan mendeteksi apakah sudah ada nomor SPT untuk tanggal yang sama:

**Skenario A: Tanggal yang sama dengan nomor tanpa huruf**
- Jika tanggal 11 April sudah ada: `800.1.11.1/092/DD/2025`
- Maka input baru tanggal 11 April akan menjadi: `800.1.11.1/092.a/DD/2025`

**Skenario B: Tanggal yang sama dengan nomor dengan huruf**
- Jika tanggal 11 April sudah ada: `800.1.11.1/092.a/DD/2025`
- Maka input baru tanggal 11 April akan menjadi: `800.1.11.1/092.b/DD/2025`

**Skenario C: Tanggal yang sama dengan multiple huruf**
- Jika tanggal 11 April sudah ada: `800.1.11.1/092.a/DD/2025`, `800.1.11.1/092.b/DD/2025`
- Maka input baru tanggal 11 April akan menjadi: `800.1.11.1/092.c/DD/2025`

**Skenario D: Tanggal yang sama dengan huruf 'z'**
- Jika tanggal 11 April sudah ada: `800.1.11.1/092.z/DD/2025`
- Maka input baru tanggal 11 April akan menjadi: `800.1.11.1/093.a/DD/2025`

### 2. Fallback ke Penomoran Bulan

Jika tidak ada data untuk tanggal yang sama, sistem akan mencari nomor terakhir untuk bulan dan tahun yang sama:

1. **Deteksi Bulan dan Tahun**: Sistem mendeteksi bulan dan tahun dari tanggal yang dipilih
2. **Cari Nomor Terakhir**: Mencari nomor SPT terbesar untuk bulan dan tahun tersebut
3. **Increment Nomor**: Menambahkan 1 ke nomor terakhir
4. **Penambahan Huruf**: Jika nomor sudah ada huruf, increment huruf; jika mencapai 'z', increment nomor dan reset huruf ke 'a'

### 3. Reset Bulanan

Penomoran direset setiap bulan baru:
- Januari 2025: `001`, `002`, `003`, dst.
- Februari 2025: `001`, `002`, `003`, dst.
- Maret 2025: `001`, `002`, `003`, dst.

## Alur Penggunaan Form

### 1. Form Awal
- Field `Nomor SPT` **tidak ditampilkan** saat form pertama kali dibuka
- User melihat placeholder: "Pilih tanggal terlebih dahulu untuk generate nomor SPT"

### 2. Setelah Memilih Tanggal
- Field `Nomor SPT` **muncul otomatis** setelah user memilih tanggal
- Nomor SPT langsung ter-generate berdasarkan tanggal yang dipilih
- Nomor SPT **tidak bisa diedit** (disabled) untuk mencegah kesalahan

### 3. Perubahan Tanggal
- Jika user mengubah tanggal, nomor SPT akan **update otomatis**
- Jika tanggal dihapus, field nomor SPT akan **hilang kembali**

## Penggunaan di Filament

### SPPD Dalam Daerah
```php
Forms\Components\TextInput::make('nomor_spt')
    ->label('Nomor SPT')
    ->placeholder('Pilih tanggal terlebih dahulu untuk generate nomor SPT')
    ->required()
    ->disabled()
    ->dehydrated()
    ->reactive()
    ->visible(fn ($get) => $get('tanggal_spt') !== null),

Forms\Components\DatePicker::make('tanggal_spt')
    ->label('Tanggal SPT')
    ->required()
    ->reactive()
    ->afterStateUpdated(function ($state, $set) {
        if ($state) {
            $tanggalSpt = \Carbon\Carbon::parse($state);
            $nomorSpt = SppdDalamDaerah::generateNomorSptByDate($tanggalSpt);
            $set('nomor_spt', $nomorSpt);
        } else {
            $set('nomor_spt', null);
        }
    }),
```

### SPPD Luar Daerah
```php
Forms\Components\TextInput::make('nomor_spt')
    ->label('Nomor SPT')
    ->placeholder('Pilih tanggal berangkat terlebih dahulu untuk generate nomor SPT')
    ->required()
    ->dehydrated()
    ->reactive()
    ->visible(fn ($get) => $get('tanggal_berangkat') !== null),

Forms\Components\DatePicker::make('tanggal_berangkat')
    ->label('Tanggal Berangkat')
    ->required()
    ->reactive()
    ->afterStateUpdated(function ($state, $set) {
        if ($state) {
            $tanggalBerangkat = \Carbon\Carbon::parse($state);
            $nomorSpt = SppdLuarDaerah::generateNomorSptByDate($tanggalBerangkat);
            $set('nomor_spt', $nomorSpt);
        } else {
            $set('nomor_spt', null);
        }
    }),
```

## Testing Commands

### 1. Test Sistem Penomoran
```bash
# Test penomoran dasar
php artisan test:nomor-surat --tipe=DD --tanggal=2025-04-15

# Test dengan tipe berbeda
php artisan test:nomor-surat --tipe=LD --tanggal=2025-04-15
```

### 2. Test Deteksi Tanggal
```bash
# Test deteksi tanggal yang sama
php artisan test:deteksi-tanggal --tipe=DD --tanggal=2025-04-11

# Debug detail deteksi tanggal
php artisan debug:deteksi-tanggal --tipe=DD --tanggal=2025-04-11
```

### 3. Test Form
```bash
# Test form SPPD Dalam Daerah
php artisan test:form-nomor-surat --tipe=DD --tanggal=2025-04-15

# Test form SPPD Luar Daerah
php artisan test:form-nomor-surat --tipe=LD --tanggal=2025-04-15
```

### 4. Demo Skenario
```bash
# Demo berbagai skenario
php artisan demo:skenario-tanggal --tipe=DD --tanggal=2025-04-11

# Demo penambahan huruf
php artisan demo:penambahan-huruf --tipe=DD --bulan=4 --tahun=2025
```

## Contoh Output

### Skenario 1: Tanggal yang Sama
```
Tanggal: 2025-04-11
Data yang ada: 800.1.11.1/092/DD/2025
Nomor yang di-generate: 800.1.11.1/092.a/DD/2025
```

### Skenario 2: Tanggal Berbeda
```
Tanggal: 2025-04-20
Data yang ada: 800.1.11.1/101/DD/2025 (nomor terakhir bulan April)
Nomor yang di-generate: 800.1.11.1/102/DD/2025
```

### Skenario 3: Penambahan Huruf Berulang
```
Nomor awal: 092
1. 800.1.11.1/092.a/DD/2025
2. 800.1.11.1/092.b/DD/2025
3. 800.1.11.1/092.c/DD/2025
4. 800.1.11.1/092.d/DD/2025
5. 800.1.11.1/092.e/DD/2025
```

## Skenario Khusus

### 1. Huruf 'z' ke Nomor Berikutnya
```
Input: 800.1.11.1/092.z/DD/2025
Output: 800.1.11.1/093.a/DD/2025
```

### 2. Bulan Baru
```
Bulan: Januari 2025 → Februari 2025
Reset: 800.1.11.1/099/DD/2025 → 800.1.11.1/001/DD/2025
```

### 3. Tahun Baru
```
Tahun: 2025 → 2026
Reset: 800.1.11.1/099/DD/2025 → 800.1.11.1/001/DD/2026
```

## Keunggulan Sistem

### 1. Deteksi Cerdas
- ✅ Mendeteksi tanggal yang sama secara otomatis
- ✅ Menambahkan huruf secara berurutan (a, b, c, dst.)
- ✅ Menangani perpindahan nomor saat huruf mencapai 'z'
- ✅ Fallback ke penomoran bulan jika tanggal berbeda

### 2. User Experience
- ✅ Nomor SPT tidak ditampilkan terlebih dahulu
- ✅ Muncul otomatis setelah memilih tanggal
- ✅ Update real-time saat mengubah tanggal
- ✅ Tidak bisa diedit untuk mencegah kesalahan

### 3. Konsistensi
- ✅ Konsisten untuk semua jenis surat (DD/LD)
- ✅ Reset bulanan otomatis
- ✅ Penanganan edge case (huruf 'z', tanggal kosong)
- ✅ Logging dan debugging yang komprehensif

### 4. Fleksibilitas
- ✅ Mendukung berbagai format tanggal
- ✅ Kompatibel dengan database yang ada
- ✅ Mudah dikustomisasi untuk kebutuhan khusus
- ✅ Testing commands yang lengkap

## Troubleshooting

### 1. Nomor SPT Tidak Muncul
- **Penyebab**: Tanggal belum dipilih
- **Solusi**: Pilih tanggal terlebih dahulu

### 2. Nomor SPT Salah
- **Penyebab**: Data database tidak konsisten
- **Solusi**: Gunakan command `debug:deteksi-tanggal` untuk analisis

### 3. Huruf Tidak Bertambah
- **Penyebab**: Logika counting tidak tepat
- **Solusi**: Pastikan menggunakan versi helper terbaru

### 4. Form Tidak Responsif
- **Penyebab**: JavaScript error atau cache
- **Solusi**: Clear cache browser dan restart server

## File Terkait

### Helper Class
- `app/Helpers/NomorSuratHelper.php` - Logika utama penomoran

### Models
- `app/Models/SppdDalamDaerah.php` - Model SPPD Dalam Daerah
- `app/Models/SppdLuarDaerah.php` - Model SPPD Luar Daerah

### Resources
- `app/Filament/Resources/SppdDalamDaerahResource.php` - Form SPPD Dalam Daerah
- `app/Filament/Resources/SppdLuarDaerahResource.php` - Form SPPD Luar Daerah

### Commands
- `app/Console/Commands/TestNomorSurat.php` - Test penomoran dasar
- `app/Console/Commands/TestDeteksiTanggal.php` - Test deteksi tanggal
- `app/Console/Commands/TestFormNomorSurat.php` - Test form
- `app/Console/Commands/DebugDeteksiTanggal.php` - Debug detail
- `app/Console/Commands/DemoSkenarioTanggal.php` - Demo skenario
- `app/Console/Commands/DemoPenambahanHuruf.php` - Demo penambahan huruf

## Sistem Update Data

### 1. Update Otomatis Nomor SPT

Sistem akan otomatis mengupdate nomor SPT ketika tanggal berubah:

**Skenario Update:**
- **Tanggal Berubah**: Jika user mengubah tanggal SPT, nomor SPT akan otomatis ter-generate ulang
- **Tanggal Sama**: Jika tanggal tidak berubah, nomor SPT tetap sama
- **Tanggal Kosong**: Jika tanggal dihapus, nomor SPT akan di-reset

### 2. Implementasi di Model

```php
// app/Models/SppdDalamDaerah.php
protected static function boot()
{
    parent::boot();

    // Generate nomor_spt secara otomatis sebelum data disimpan
    static::creating(function ($model) {
        if ($model->tanggal_spt && !$model->nomor_spt) {
            $model->nomor_spt = self::generateNomorSptByDate($model->tanggal_spt);
        }
    });

    // Update nomor_spt secara otomatis ketika tanggal_spt berubah
    static::updating(function ($model) {
        if ($model->isDirty('tanggal_spt')) {
            $newTanggalSpt = $model->tanggal_spt;
            if ($newTanggalSpt) {
                $model->nomor_spt = self::generateNomorSptByDate($newTanggalSpt);
            }
        }
    });
}
```

### 3. Implementasi di Form

```php
// app/Filament/Resources/SppdDalamDaerahResource.php
Forms\Components\DatePicker::make('tanggal_spt')
    ->label('Tanggal SPT')
    ->required()
    ->reactive()
    ->afterStateUpdated(function ($state, $set, $get) {
        if ($state) {
            $tanggalSpt = \Carbon\Carbon::parse($state);
            $nomorSpt = SppdDalamDaerah::generateNomorSptByDate($tanggalSpt);
            $set('nomor_spt', $nomorSpt);
        } else {
            $set('nomor_spt', null);
        }
    }),
```

### 4. Implementasi di Edit Page

```php
// app/Filament/Resources/SppdDalamDaerahResource/Pages/EditSppdDalamDaerah.php
protected function mutateFormDataBeforeFill(array $data): array
{
    // Pastikan nomor_spt terisi jika tanggal_spt ada
    if (isset($data['tanggal_spt']) && (!isset($data['nomor_spt']) || empty($data['nomor_spt']))) {
        $tanggalSpt = \Carbon\Carbon::parse($data['tanggal_spt']);
        $data['nomor_spt'] = \App\Models\SppdDalamDaerah::generateNomorSptByDate($tanggalSpt);
    }
    
    return $data;
}

protected function mutateFormDataBeforeSave(array $data): array
{
    // Pastikan nomor_spt ter-generate jika tanggal_spt ada
    if (isset($data['tanggal_spt'])) {
        $tanggalSpt = \Carbon\Carbon::parse($data['tanggal_spt']);
        $data['nomor_spt'] = \App\Models\SppdDalamDaerah::generateNomorSptByDate($tanggalSpt);
    }
    
    return $data;
}
```

### 5. Alur Update Data

#### 5.1. Edit Mode
1. **Form Load**: Data existing di-load dengan nomor SPT yang sudah ada
2. **Tanggal Berubah**: User mengubah tanggal SPT
3. **Nomor Update**: Nomor SPT otomatis ter-generate berdasarkan tanggal baru
4. **Save**: Data disimpan dengan nomor SPT yang baru

#### 5.2. Create Mode
1. **Form Load**: Form kosong, nomor SPT belum ada
2. **Tanggal Dipilih**: User memilih tanggal SPT
3. **Nomor Generate**: Nomor SPT otomatis ter-generate berdasarkan tanggal
4. **Save**: Data disimpan dengan nomor SPT yang baru

### 6. Contoh Skenario Update

#### Skenario 1: Tanggal Berubah
```
Data Awal:
- Tanggal: 2025-04-11
- Nomor: 800.1.11.1/092/DD/2025

Update:
- Tanggal: 2025-04-15
- Nomor: 800.1.11.1/102/DD/2025 (otomatis ter-generate)
```

#### Skenario 2: Tanggal Sama
```
Data Awal:
- Tanggal: 2025-04-11
- Nomor: 800.1.11.1/092/DD/2025

Update:
- Tanggal: 2025-04-11 (tidak berubah)
- Nomor: 800.1.11.1/092.a/DD/2025 (otomatis ter-generate karena sudah ada)
```

#### Skenario 3: Tanggal Kosong
```
Data Awal:
- Tanggal: 2025-04-11
- Nomor: 800.1.11.1/092/DD/2025

Update:
- Tanggal: (dihapus)
- Nomor: (dihapus)
```

### 7. Keunggulan Sistem Update

#### 7.1. Konsistensi
- ✅ Nomor SPT selalu konsisten dengan tanggal
- ✅ Tidak ada duplikasi nomor SPT
- ✅ Penomoran berurutan dan teratur

#### 7.2. User Experience
- ✅ Update otomatis tanpa intervensi manual
- ✅ Feedback real-time saat mengubah tanggal
- ✅ Tidak perlu mengingat nomor SPT manual

#### 7.3. Data Integrity
- ✅ Validasi otomatis saat update
- ✅ Mencegah kesalahan penomoran
- ✅ Logging perubahan yang jelas

### 8. Troubleshooting Update

#### 8.1. Nomor SPT Tidak Update
- **Penyebab**: Cache browser atau JavaScript error
- **Solusi**: Refresh halaman atau clear cache

#### 8.2. Nomor SPT Salah
- **Penyebab**: Data database tidak konsisten
- **Solusi**: Gunakan command `debug:deteksi-tanggal` untuk analisis

#### 8.3. Update Gagal
- **Penyebab**: Validasi error atau database constraint
- **Solusi**: Periksa log error dan pastikan data valid

### 9. Testing Update

#### 9.1. Test Update Tanggal
```bash
# Test update tanggal yang berbeda
php artisan test:nomor-surat --tipe=DD --tanggal=2025-04-15

# Test update tanggal yang sama
php artisan test:deteksi-tanggal --tipe=DD --tanggal=2025-04-11
```

#### 9.2. Test Form Update
```bash
# Test form update
php artisan test:form-nomor-surat --tipe=DD --tanggal=2025-04-15
```

---

**Catatan**: Sistem update ini dirancang untuk memastikan konsistensi data dan user experience yang optimal. Pastikan untuk selalu melakukan testing sebelum deployment ke production. 