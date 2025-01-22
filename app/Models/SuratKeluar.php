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
        return $this->belongsTo(RincianKategori::class, 'rincian_kategori_id')->withDefault();
    }

    public function getCombinedNomorAttribute(): string
    {
        return ($this->category ? $this->category->nomor_kategori : '') . '/' . $this->RincianKategori->nomor_rincian_kategori . '/' . $this->nomor_surat;
    }

    public static function generateNomorSurat()
    {
        $latestSurat = self::whereYear('created_at', date('Y'))
            ->latest()
            ->first();

        $currentNumber = $latestSurat ? intval(substr($latestSurat->nomor_surat, 0, 3)) + 1 : 1;

        return sprintf('%03d/DISTAN/%s', $currentNumber, date('Y'));
    }

    public function getFullNomorSuratAttribute()
    {
        $kategori = $this->category ? $this->category->nomor_kategori : '';
        $subKategori = $this->SubKategori ? $this->SubKategori->nomor_sub_kategori : '';
        $rincianKategori = $this->RincianKategori ? $this->RincianKategori->nomor_rincian_kategori : '';

        return sprintf('%s.%s.%s/%s',
            $kategori,
            $subKategori,
            $rincianKategori,
            $this->nomor_surat
        );
    }
}
