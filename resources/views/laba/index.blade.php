@extends('layouts.admin')

@section('main-content')
    <div class="container">
        <h2>Data Laporan Laba Rugi Harian</h2>
        <a href="{{ route('laba.create') }}" class="btn btn-primary">Masukkan Laporan Laba Rugi Harian</a>

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

    .action-buttons {
        display: flex;
    }
        </style>

        <table class="table table-custom">
            <thead>
                <tr>
                    <th>Nota</th> <!-- Ganti "Item" menjadi "Nota" -->
                    <th>Nominal</th> <!-- Tetap menggunakan "Nominal" -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totallaba = 0; // Initialize the totallaba variable
                @endphp
            
                @foreach($labas as $laba)
                    <tr>
                        <td style="padding: 5px; width: 25%;">{{ $laba->nota }}</td> <!-- Ganti "item" menjadi "nota" -->
                        <td style="padding: 5px; width: 25%;">{{ number_format($laba->nominal, 0, ',', '.') }}</td>
                        <td style="padding: 5px; width: 25%;">
                            <a href="{{ route('laba.edit', $laba->id) }}" class="btn btn-warning btn-custom"><i class="fas fa-pen-to-square"></i></a>
                            <form action="{{ route('laba.destroy', $laba->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-custom" onclick="return confirm('Apakah Anda yakin ingin menghapus data laba?')"><i class="fas fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $totallaba += $laba->nominal;
                    @endphp
                @endforeach
            </tbody>
            <tr>
                <td colspan="2"></td>
                <td style="padding: 5px; width: 25%;">Total: {{ number_format($totallaba, 0, ',', '.') }}</td>
            </tr>
        </table>
    </div>
@endsection
