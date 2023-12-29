<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'produk',
        'lokasi_panen',
        'pegawai_panen',
        'keterangan',
    ];
    protected $table = 'panen';

}

