@extends('layouts.admin')

@section('main-content')

<style>
    /* Add your custom styles here */
</style>

<div>
    <a href="{{ route('laba.index') }}" class="btn btn-primary">Kembali</a>
</div>

<form action="{{ route('laba.update', $laba->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nota">Nota:</label>
    <input type="text" name="nota" value="{{ $laba->nota }}" required>

    <label for="nominal">Nominal:</label>
    <input type="number" name="nominal" value="{{ $laba->nominal }}" required>

    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>

@endsection
