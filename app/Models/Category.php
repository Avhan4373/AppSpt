<?php

namespace App\Models;

use App\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use LogsActivity;

    protected $fillable = [
        'nomor_kategori',
        'nama_kategori',
    ];

    public function category(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
