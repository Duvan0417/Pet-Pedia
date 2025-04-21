<!-- resources/views/veterinarians/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register a Veterinarian</h2>
    <form action="{{ route('veterinarians.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="hours" class="form-label">Hours:</label>
            <input type="text" class="form-control" id="hours" name="hours" required>
        </div>

        <div class="mb-3">
            <label for="services_offered" class="form-label">Services Offered:</label>
            <textarea class="form-control" id="services_offered" name="services_offered" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
