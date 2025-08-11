<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use LogsActivity;

    protected $fillable = [
        'nomor_surat',
        'pengirim',
        'tanggal_surat',
        'perihal'
    ];
}
