@extends('layouts.admin')

@section('main-content')
<style>
    /* Gaya Formulir */
    form {
        margin: 20px auto;
        border-radius: 5px;
        background-color: #fff3e6; /* Warna latar kuning muda */
    }

    h1 {
        color: #ff9800; /* Warna orange */
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #ff9800; /* Warna orange */
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ff9800; /* Warna orange */
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        background-color: #ff9800; /* Warna orange */
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #e68a00; /* Warna orange lebih tua saat hover */
    }
</style>
<h1>Edit Data Panen</h1>

<form method="post" action="{{ route('panen.update', $panen->id) }}">
    @csrf
    @method('PUT')
    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" value="{{ $panen->tanggal }}" required><br>

    <label for="produk">Produk:</label>
    <input type="text" name="produk" value="{{ $panen->produk }}" required><br>

    <label for="lokasi_panen">Lokasi Panen:</label>
    <input type="text" name="lokasi_panen" value="{{ $panen->lokasi_panen }}" required><br>

    <label for="pegawai_panen">Pegawai Panen:</label>
    <input type="text" name="pegawai_panen" value="{{ $panen->pegawai_panen }}" required><br>

    <label for="keterangan">Keterangan:</label>
    <textarea name="keterangan">{{ $panen->keterangan }}</textarea><br>

    <button type="submit">Simpan Perubahan</button>
</form>
@endsection