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

<div>
    <h2>Edit Data BOP</h2>
    <form action="{{ route('bop.update', $bop->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" value="{{ $bop->tanggal }}" required>
        <br>
        <label for="item">Item:</label>
        <input type="text" name="item" value="{{ $bop->item }}" required>
        <br>
        <label for="nominal">Nominal:</label>
        <input type="text" name="nominal" value="{{ $bop->nominal }}" required>
        <br>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
</div>

@endsection
