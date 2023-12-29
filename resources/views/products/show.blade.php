<!-- resources/views/products/show.blade.php -->

@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>

                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Price:</strong> ${{ $product->price }}
                    </li>
                    <!-- Add more details as needed -->
                    <!-- For example, you can include information like: -->
                    <li class="list-group-item">
                        <strong>Category:</strong> {{ $product->category }}
                    </li>
                    <li class="list-group-item">
                        <strong>Stock:</strong> {{ $product->stock }}
                    </li>
                </ul>

                <!-- Add more sections or details as needed -->

                <!-- Add a link to go back to the product list -->
                <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back to Product List</a>
            </div>
            <div class="col-md-4">
                <!-- You can add an image or other related content here -->
                <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
