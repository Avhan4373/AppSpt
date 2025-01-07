<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $fillable = [
        'category_id',
        'nomor_kategori',
        'nomor_surat',
        'tujuan_surat',
        'tanggal_surat',
        'perihal'
    ];

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function getCombinedNomorAttribute(): string
    {
        return $this->category()->nomor_kategori . '/' . $this->nomor_surat;
    }
}
