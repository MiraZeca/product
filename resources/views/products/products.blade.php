

@section('title')
    Add New Product
@endsection

@extends('master')

@section('main')
    <div class="container">
        <h2>Add New Product</h2>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Product Name -->
            <div class="input-field">
                <label for="name">Product Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <!-- Category Selection -->
            <div class="input-field">
                <label for="category">Category</label>
                <select id="category" name="category_id" required>
                    <option value="" disabled selected>Choose a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Price -->
            <div class="input-field">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" required>
            </div>

            <!-- Image Upload Fields -->
            <div class="input-field">
                <label for="image1">Image 1</label>
                <input type="file" id="image1" name="image1" accept="image/*">
            </div>

            <div class="input-field">
                <label for="image2">Image 2</label>
                <input type="file" id="image2" name="image2" accept="image/*">
            </div>

            <div class="input-field">
                <label for="image3">Image 3</label>
                <input type="file" id="image3" name="image3" accept="image/*">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success mb-5 btnadd">Add Product</button>
            <a href="{{ route('admin') }}" class="btn btn-success mb-5 btnadd">Back to All Products</a>

        </form>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const elems = document.querySelectorAll('select');
        const instances = M.FormSelect.init(elems);
    });
</script>
