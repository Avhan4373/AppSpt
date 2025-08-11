<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubKategori extends Model
{
    use LogsActivity;

    protected $fillable = [
        'category_id',
        'nomor_sub_kategori',
        'nama_sub_kategori',
    ];

    public function SubKategori(): HasMany
    {
        return $this->hasMany(SubKategori::class);
    }
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function rincianKategori()  // Perhatikan penamaan menggunakan camelCase
    {
        return $this->belongsTo(RincianKategori::class);
    }


}
