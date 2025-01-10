<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    protected $fillable = [
        'nomor_sk',
        'tanggal_sk',
        'perihal',
    ];

    protected $dates = [
        'tanggal_sk'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($sk) {
            if (empty($sk->nomor_sk)) {
                $lastSk = static::whereYear('tanggal_sk', date('Y'))
                    ->orderBy('id', 'desc')
                    ->first();

                if (!$lastSk) {
                    $sk->nomor_sk = '001 TAHUN ' . date('Y');
                } else {
                    $lastNumber = (int) substr($lastSk->nomor_sk, 0, 3);
                    $nextNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
                    $sk->nomor_sk = $nextNumber . ' TAHUN ' . date('Y');
                }
            }
        });
    }

}
