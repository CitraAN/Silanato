<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dasaruu extends Model
{
    use HasFactory;

    protected $table = 'dasaruu';

    protected $fillable = [
        'id',
        'deskripsi',
        'file',
    ];

    public function dasaruu()
    {
        return $this->hasMany(dasaruu::class);
    }
}
