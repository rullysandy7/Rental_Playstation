<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_alat',
    ];

    public function alat()
    {
        return $this->hasMany(PlayStation::class, 'alat_id', 'id');
    }
}
