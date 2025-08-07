<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Helpers\NomorSuratHelper;

class SppdLuarDaerah extends Model
{
    use HasFactory;
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

    // Method baru untuk generate nomor berdasarkan tanggal tertentu
    public static function generateNomorSptByDate($tanggalBerangkat = null)
    {
        if (!$tanggalBerangkat) {
            $tanggalBerangkat = now();
        }
        
        return NomorSuratHelper::generateNomorSurat(
            $tanggalBerangkat->format('Y-m-d'),
            'LD',
            self::class
        );
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
