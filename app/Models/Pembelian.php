<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'nama_petani',
        'lokasi_pembelian',
        'jumlah_ikan',
        'harga_ikan',
        // Add other fillable columns as needed
    ];
}