<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungan';

    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'no_hp',
        'hubungan',
        'nama_wbp',
        'jadwal_kunjungan',
        'jam_kunjungan',
        'jk',
        'file_id',
        'foto',
        'jumlah_pengunjung',
        'status',
        'keterangan',
    ];
}
