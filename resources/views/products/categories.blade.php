@extends('master')

@section('title', 'Add Category')

@section('main')
    <div class="container">
        <h2>Create New Category</h2>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="input-field">
                <label for="name">Category Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <button type="submit" class="btn">Create Category</button>
            <a href="{{ route('admin') }}" class="btn btn-secondary">Back to Products</a>
        </form>
    </div>
@endsection
