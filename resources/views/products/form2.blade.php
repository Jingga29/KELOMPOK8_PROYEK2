<!-- Display the form -->
@extends('layouts.user')

@section('content')
<style>
    body {
        background: linear-gradient(to bottom, #f2f2f2, #ff8a00);
    }

    /* Reset styling */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Style form */
    form {
        max-width: 700px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
        padding: 20px;
        border: 1px solid rgb(20, 19, 19);
        border-radius: 5px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    textarea,
    select {
        width: 100%;
        padding: 8px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }

    textarea {
        height: 100px;
    }

    input[type="number"] {
        width: 70px;
    }

    button {
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>
</head>

<body>
<br><center><h1>FORMULIR PEMESANAN</h1></center><br><br>
<form action="/proses-pemesanan" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="hp">No. Hp:</label>
        <input type="text" id="hp" name="hp" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat Pengiriman:</label>
        <textarea id="alamat" name="alamat" required></textarea>
    </div>
    <div class="form-group">
        <label for="ukuran">Ukuran:</label>
        <select id="ukuran" name="ukuran">
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah:</label>
        <input type="number" id="jumlah" name="jumlah" min="1" required>
    </div>
    <div class="form-group">
        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit">Pesan Sekarang</button>
    </div>
</form>
</body>
@endsection
