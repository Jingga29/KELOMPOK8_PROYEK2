<!-- resources/views/form.blade.php -->

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
    <div class="container">
        <h1>Contact Form</h1>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="post">
            @csrf
            <!-- Add your form fields here -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
