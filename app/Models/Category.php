<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori',
    ];

    public function ruang()
    {
        return $this->hasMany(PlayStation::class, 'kategori_id', 'id');
    }
}
