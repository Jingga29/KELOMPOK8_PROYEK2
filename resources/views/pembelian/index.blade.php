@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <h2>Data Pembelian Dari Petani</h2>
        <a href="{{ route('pembelian.create') }}" class="btn btn-primary">Masukkan Pembelian</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <style>
            /* Your existing styles remain unchanged */
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

        <table class="table table-custom">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama Petani</th>
                    <th>Lokasi Pembelian</th>
                    <th>Jumlah Ikan (kg)</th>
                    <th>Harga Ikan (kg)</th>
                    <th>Total Harga</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalHarga = 0; // Initialize the totalHarga variable
                @endphp
            
                @foreach($pembelians as $item)
                    <tr>
                        <td style="padding: 5px; width: 15%;">{{ $item->tanggal }}</td>
                        <td style="padding: 5px; width: 15%;">{{ $item->nama_petani }}</td>
                        <td style="padding: 5px; width: 15%;">{{ $item->lokasi_pembelian }}</td>
                        <td style="padding: 5px; width: 15%;">{{ number_format($item->jumlah_ikan, 2) }}</td>
                        <td style="padding: 5px; width: 15%;">{{ number_format($item->harga_ikan, 0, ',', '.') }}</td>
                        <td style="padding: 5px; width: 15%;">{{ number_format($item->jumlah_ikan * $item->harga_ikan, 0, ',', '.') }}</td>
                        <td style="padding: 5px; width: 10%;">
                            <a href="{{ route('pembelian.edit', $item->id) }}" class="btn btn-warning btn-custom"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('pembelian.destroy', $item->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-custom" onclick="return confirm('Apakah Anda yakin ingin menghapus data pembelian?')"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $totalHarga += $item->jumlah_ikan * $item->harga_ikan;
                    @endphp
                @endforeach
            </tbody>
            <tr>
                <td colspan="5"></td>
                <td style="padding: 5px; width: 15%;">Total: {{ number_format($totalHarga, 0, ',', '.') }}</td>
                <td></td>
            </tr>
        </table>
    </div>
@endsection
