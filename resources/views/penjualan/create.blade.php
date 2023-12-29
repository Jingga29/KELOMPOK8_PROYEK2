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
    <div class="container">
        <h2>Masukkan Penjualan Baru</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('penjualan.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama_pembeli">Nama Pembeli:</label>
                <input type="text" name="nama_pembeli" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="lokasi_penjualan">Lokasi Penjualan:</label>
                <input type="text" name="lokasi_penjualan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jenis">Jenis:</label>
                <input type="text" name="jenis" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah (kg):</label>
                <input type="number" name="jumlah" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga (kg):</label>
                <input type="number" name="harga" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
