<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panduan extends Model
{
    use HasFactory;

    protected $table = 'panduan';

    protected $fillable = [
        'id',
        'judul',
        'deskripsi',
        'created_at',
        'updated_at',
    ];

    public function panduan()
    {
        return $this->hasMany(panduan::class);
    }
}
