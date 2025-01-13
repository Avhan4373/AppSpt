<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SppdLuarDaerah extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nomor_spt',
        'tujuan_spt',
        'perihal',
        'tanggal_spt'
    ];
    protected $casts = [
        'tanggal_spt' => 'date',
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
        // Ambil nomor terakhir dari database
        $lastRecord = SppdLuarDaerah::orderBy('id', 'desc')->first();

        // Jika tidak ada data sebelumnya, mulai dari 001
        if (!$lastRecord || !$lastRecord->nomor_spt) {
            $newNumber = '001';
        } else {
            // Pastikan nomor_spt memiliki format yang benar
            $parts = explode('/', $lastRecord->nomor_spt);
            if (count($parts) >= 2) {
                $lastNumber = intval($parts[1]); // Ambil bagian 001
                $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT); // Tambahkan 1
            } else {
                // Jika format tidak sesuai, mulai dari 001
                $newNumber = '001';
            }
        }

        // Format nomor sesuai kebutuhan
        $nomorSpt = "800.1.11.1/{$newNumber}/LD/" . date('Y'); // Tahun dinamis

        return $nomorSpt;
    }


    protected static function boot()
    {
        parent::boot();
        // Generate nomor_spt secara otomatis sebelum data disimpan
        static::creating(function ($model) {
            $model->nomor_spt = self::generateNomorSpt();
        });
    }
}
