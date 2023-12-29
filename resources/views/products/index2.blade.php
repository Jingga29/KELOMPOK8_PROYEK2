<!-- Display a list of products -->
@extends('layouts.user')

@section('content')
    <h1>Product List</h1>
    @foreach ($products as $product)
        <div>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <a href="{{ url("/products/{$product->id}") }}">View Details</a>
        </div>
    @endforeach
@endsection
