<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'nama_pembeli',
        'lokasi_penjualan',
        'jenis',
        'jumlah',
        'harga',
    ];
}