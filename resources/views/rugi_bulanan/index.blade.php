@extends('layouts.admin')

@section('main-content')

<style>
    /* Gaya Tabel */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ff9800; /* Warna orange */
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #ff9800; /* Warna latar orange */
        color: white;
    }

    /* Gaya Tombol Aksi */
    .btn-primary {
        background-color: #ff9800; /* Warna orange */
        color: white;
        border: 1px solid #ff9800; /* Warna border sesuai dengan latar */
    }

    .btn-primary:hover {
        background-color: #e68a00; /* Warna orange lebih tua saat hover */
        border: 1px solid #e68a00; /* Warna border sesuai dengan latar saat hover */
    }

    .btn-warning {
        background-color: #ff9800; /* Warna orange */
        color: white;
        border: 1px solid #ff9800; /* Warna border sesuai dengan latar */
    }

    .btn-warning:hover {
        background-color: #e68a00; /* Warna orange lebih tua saat hover */
        border: 1px solid #e68a00; /* Warna border sesuai dengan latar saat hover */
    }

    .btn-danger {
        background-color: #ff3333; /* Warna merah */
        color: white;
        border: 1px solid #ff3333; /* Warna border sesuai dengan latar */
    }

    .btn-danger:hover {
        background-color: #e60000; /* Warna merah lebih tua saat hover */
        border: 1px solid #e60000; /* Warna border sesuai dengan latar saat hover */
    }

    .custom-width-1 { width: 100px; }
    .custom-width-2 { width: 100px; }

    .action-buttons {
        display: flex;
    }
</style>

<div>
    <h2>Data Laba Bulanan</h2>
    <a href="{{ route('rugi_bulanan.create') }}" class="btn btn-primary">Tambah Data</a>
</div>

<table border="1">
    <tr>
        <th>Tanggal</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>

    @php
        $totalRugi = 0; // Initialize total harga variable
    @endphp

    @foreach ($rugi_bulanan as $rugi_bulanan)
        <tr>
            <td class="custom-width-1">{{ $rugi_bulanan->tanggal }}</td>
            <td class="custom-width-2">{{ $rugi_bulanan->jumlah }}</td>
            <td class="action-buttons">
                <a href="{{ route('rugi_bulanan.edit', $rugi_bulanan->id) }}" class="btn btn-warning custom-button-width">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <form action="{{ route('rugi_bulanan.destroy', $rugi_bulanan->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger custom-button-width" onclick="return confirm('Apakah Anda yakin ingin menghapus data pembelian?')">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </form>
            </td>
        </tr>

        @php
            $totalRugi += $rugi_bulanan->jumlah; // Update total harga
        @endphp

    @endforeach

    <tr>
        <td colspan="1"><strong>Total :</strong></td>
        <td>{{ number_format($totalRugi) }}</td>
        <td></td>
    </tr>
</table>
@endsection
