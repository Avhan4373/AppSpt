<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailUsers extends Model
{
    // use HasFactory;
    protected $table = 'detail_users';
    protected $fillable = ['user_id', 'nip', 'pangkat_gol', 'jabatan'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
