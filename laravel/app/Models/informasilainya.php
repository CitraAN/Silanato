<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasilainya extends Model
{
    use HasFactory;

    protected $table = 'informasilainya';

    protected $fillable = [
        'judul',
        'deskripsi',
        'foto',
    ];

}
