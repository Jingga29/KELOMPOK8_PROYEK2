<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'telp',
        'jenis_produk',
        'pesan',
    ];
}
