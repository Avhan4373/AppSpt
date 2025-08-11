<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Helpers\NomorSuratHelper;
use Carbon\Carbon;

class SppdLuarDaerah extends Model
{
    use HasFactory, LogsActivity;
    protected $fillable = [
        'user_id',
        'user_ids', // Jika Anda menambahkan kolom ini
        'nomor_spt',
        'tujuan_spt',
        'perihal',
        'tanggal_berangkat',
        'tanggal_kembali',
        'dasar_surat', // Add this new field
    ];
    protected $casts = [
        'user_ids' => 'array', // Cast kolom user_ids ke tipe array
        'tanggal_berangkat' => 'date',
        'tanggal_kembali' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sppdLuarDaerahs()
    {
        return $this->hasMany(SppdLuarDaerah::class);
    }
    
    public static function generateNomorSpt()
    {
        return self::generateNomorSptByDate(now());
    }

    // Method generate nomor berdasarkan tanggal tertentu dengan aturan:
    // - Ambil nomor terakhir di bulan yang dipilih.
    // - Jika bulan tersebut belum ada data, lanjutkan nomor dari bulan sebelumnya (di tahun yang sama), bukan reset ke 001.
    // - Untuk tanggal yang sama di bulan yang sama, penanganan huruf tetap mengikuti helper.
    public static function generateNomorSptByDate($tanggalBerangkat = null)
    {
        if (!$tanggalBerangkat) {
            $tanggalBerangkat = now();
        }

        $tanggalObj = $tanggalBerangkat instanceof Carbon ? $tanggalBerangkat : Carbon::parse($tanggalBerangkat);
        $year = (int) $tanggalObj->format('Y');
        $month = (int) $tanggalObj->format('m');

        // Cek apakah bulan ini sudah ada data
        $monthHasRecords = self::whereYear('tanggal_berangkat', $year)
            ->whereMonth('tanggal_berangkat', $month)
            ->exists();

        if ($monthHasRecords) {
            // Delegasikan ke helper untuk logika dalam-bulan (termasuk huruf pada tanggal yang sama)
            return NomorSuratHelper::generateNomorSurat(
                $tanggalObj->format('Y-m-d'),
                'LD',
                self::class
            );
        }

        // Jika belum ada data di bulan ini, cari nomor terbesar dari awal tahun s.d. akhir bulan sebelumnya
        $firstDayOfMonth = Carbon::create($year, $month, 1)->startOfDay();
        $previousRecords = self::whereYear('tanggal_berangkat', $year)
            ->where('tanggal_berangkat', '<', $firstDayOfMonth)
            ->get(['nomor_spt']);

        $maxBaseNumber = 0;
        foreach ($previousRecords as $record) {
            if (empty($record->nomor_spt)) {
                continue;
            }
            $parts = explode('/', $record->nomor_spt);
            if (count($parts) < 2) {
                continue;
            }
            $numberPart = $parts[1];
            if (preg_match('/^(\d+)\.([a-z])$/', $numberPart, $m)) {
                $base = (int) $m[1];
                $maxBaseNumber = max($maxBaseNumber, $base);
            } elseif (preg_match('/^(\d+)$/', $numberPart, $m)) {
                $base = (int) $m[1];
                $maxBaseNumber = max($maxBaseNumber, $base);
            }
        }

        $nextBase = $maxBaseNumber + 1; // jika tidak ada record sebelumnya, akan menjadi 1
        $newNumber = str_pad((string) $nextBase, 3, '0', STR_PAD_LEFT);

        // Format akhir: 800.1.11.1/{nomor}/{LD}/{tahun}
        return sprintf('800.1.11.1/%s/LD/%d', $newNumber, $year);
    }

    public function getUserIdsAttribute($value)
    {
        if (is_null($value)) {
            return [];
        }

        if (is_string($value) && !is_array(json_decode($value, true))) {
            return json_decode($value, true) ?: [];
        }

        return $value;
    }

    // Mutator untuk user_ids (jika masih diperlukan)
    public function setUserIdsAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['user_ids'] = json_encode($value);
        } elseif (is_string($value) && is_array(json_decode($value, true))) {
            $this->attributes['user_ids'] = $value;
        } else {
            $this->attributes['user_ids'] = json_encode([]);
        }
    }

    public function getUserNames()
    {
        $userIds = $this->user_ids;
        if (empty($userIds)) {
            return [];
        }

        return User::whereIn('id', $userIds)->pluck('name')->toArray();
    }

    protected static function boot()
    {
        parent::boot();
        
        // Generate nomor_spt secara otomatis sebelum data disimpan
        static::creating(function ($model) {
            // Hanya generate nomor jika tanggal_berangkat sudah ada dan nomor_spt belum ada
            if ($model->tanggal_berangkat && !$model->nomor_spt) {
                $model->nomor_spt = self::generateNomorSptByDate($model->tanggal_berangkat);
            }
        });
    }
}
