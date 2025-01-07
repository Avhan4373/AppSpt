<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerjalananDinas extends Model
{
    protected $fillable = [
        'user_id', 'no_spt', 'uraian', 'tgl_berangkat', 'tgl_kembali',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
