<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $fillable = [
        'category_id',
        'sub_kategori_id',
        'rincian_kategori_id',
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

    public function SubKategori()
    {
        return $this->belongsTo(SubKategori::class);
    }

    public function RincianKategori()
    {
        return $this->belongsTo(RincianKategori::class);
    }

    public function getCombinedNomorAttribute(): string
    {
        return ($this->category ? $this->category->nomor_kategori : '') . '/' . $this->RincianKategori->nomor_rincian_kategori .'/'.$this->nomor_surat;
    }
}
