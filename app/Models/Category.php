<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'nomor_kategori',
        'nama_kategori',
    ];

    public function category(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
