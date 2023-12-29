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
    .custom-width-3 { width: 250px; }
    .custom-width-4 { width: 150px; }
    .custom-width-5 { width: 150px; }

    .action-buttons {
        display: flex;
    }
</style>

<div>
    <a href="{{ route('panen.create') }}" class="btn btn-primary">Tambah Data</a>
</div>

<table border="1">
    <tr>
        <th>Tanggal</th>
        <th>Produk</th>
        <th>Lokasi Panen</th>
        <th>Pegawai Panen</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>

    @foreach ($panens as $panen)
        <tr>
            <td class="custom-width-1">{{ $panen->tanggal }}</td>
            <td class="custom-width-2">{{ $panen->produk }}</td>
            <td class="custom-width-3">{{ $panen->lokasi_panen }}</td>
            <td class="custom-width-4">{{ $panen->pegawai_panen }}</td>
            <td class="custom-width-5">{{ $panen->keterangan }}</td>
            <td class="action-buttons">
                <a href="{{ route('panen.edit', $panen->id) }}" class="btn btn-warning custom-button-width">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <form action="{{ route('panen.destroy', $panen->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger custom-button-width">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
