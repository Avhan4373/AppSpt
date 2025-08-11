<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RincianKategori extends Model
{
    use LogsActivity;

    protected $fillable = [
        'category_id',
        'sub_kategori_id',
        'nomor_rincian_kategori',
        'nama_rincian_kategori',
    ];

    public function RincianKategori(): HasMany
    {
        return $this->hasMany(RincianKategori::class);
    }
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function SubKategori(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SubKategori::class);
    }
}
