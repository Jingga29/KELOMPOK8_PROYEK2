<!-- resources/views/pembelian/create.blade.php -->

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
        <h2>Tambah Pembelian</h2>
        <form action="{{ route('pembelian.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_petani">Nama Petani:</label>
                <input type="text" name="nama_petani" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lokasi_pembelian">Lokasi Pembelian:</label>
                <input type="text" name="lokasi_pembelian" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jumlah_ikan">Jumlah Ikan (kg):</label>
                <input type="number" step="0.01" name="jumlah_ikan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga_ikan">Harga Ikan (kg):</label>
                <input type="number" step="0.01" name="harga_ikan" class="form-control" required>
            </div>
            <!-- Add other form fields as needed -->
            <button type="submit" class="btn btn-primary">Tambah Pembelian</button>
        </form>
    </div>
@endsection
