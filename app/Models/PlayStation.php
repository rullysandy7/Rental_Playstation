<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayStation extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_id',
        'alat_id',
        'deskripsi',
        'harga',
        'gambar',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategori_id');
    }

    public function alat()
    {
        return $this->belongsTo(Alat::class, 'alat_id');
    }
}
