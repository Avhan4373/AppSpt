<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Helpers\NomorSuratHelper;

class SppdDalamDaerah extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_ids', // Jika Anda menambahkan kolom ini
        'nomor_spt',
        'tujuan_spt',
        'perihal',
        'tanggal_spt'
        ];
    protected $casts = [
        'user_ids' => 'array', // Cast kolom user_ids ke tipe array
        'tanggal_spt' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public static function generateNomorSpt()
    {
        return self::generateNomorSptByDate(now());
    }

    // Method baru untuk generate nomor berdasarkan tanggal tertentu
    public static function generateNomorSptByDate($tanggalSpt = null)
    {
        if (!$tanggalSpt) {
            $tanggalSpt = now();
        }
        
        return NomorSuratHelper::generateNomorSurat(
            $tanggalSpt->format('Y-m-d'),
            'DD',
            self::class
        );
    }

    // Accessor untuk mengubah array string ke integer
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

    // Tambahkan method untuk mendapatkan nama users
    public function getUserNames()
    {
        $userIds = $this->user_ids;
        if (empty($userIds)) {
            return [];
        }

        return User::whereIn('id', $userIds)->pluck('name')->toArray();
    }
    
    public function sppdDalamDaerahs()
    {
        return $this->hasMany(SppdDalamDaerah::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Generate nomor_spt secara otomatis sebelum data disimpan
        static::creating(function ($model) {
            // Hanya generate nomor jika tanggal_spt sudah ada dan nomor_spt belum ada
            if ($model->tanggal_spt && !$model->nomor_spt) {
                $model->nomor_spt = self::generateNomorSptByDate($model->tanggal_spt);
            }
        });

        // Update nomor_spt secara otomatis ketika tanggal_spt berubah
        static::updating(function ($model) {
            // Cek apakah tanggal_spt berubah
            if ($model->isDirty('tanggal_spt')) {
                $newTanggalSpt = $model->tanggal_spt;
                
                // Jika ada tanggal baru, generate nomor baru
                if ($newTanggalSpt) {
                    $model->nomor_spt = self::generateNomorSptByDate($newTanggalSpt);
                }
            }
        });
    }
}
