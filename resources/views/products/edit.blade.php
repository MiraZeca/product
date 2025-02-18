

@extends('master')

@section('title', 'Edit Product')

@section('main')
    <div class="container">
        <h2>Edit Product</h2>
        
        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Product Name -->
            <div class="input-field">
                <label for="name">Product Name</label>
                <input type="text" id="name" name="name" value="{{ $product->name }}" required>
            </div>

            <!-- Category -->
            <div class="input-field">
                <label for="category">Category</label>
                <select id="category" name="category_id" required>
                    <option value="" disabled selected>Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Price -->
            <div class="input-field">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="{{ $product->price}}" required>
            </div>

            <!-- Image 1 -->
            <div class="input-field">
                <label for="image1">Image 1</label>
                <input type="file" id="image1" name="image1">
                @if($product->image1_path)
                    <div>
                        <img src="{{ asset('storage/' . $product->image1_path) }}" alt="Image 1" width="100" class="mt-2">
                    </div>
                @endif
            </div>

            <!-- Image 2 -->
            <div class="input-field">
                <label for="image2">Image 2</label>
                <input type="file" id="image2" name="image2">
                @if($product->image2_path)
                    <div>
                        <img src="{{ asset('storage/' . $product->image2_path) }}" alt="Image 2" width="100" class="mt-2">
                    </div>
                @endif
            </div>

            <!-- Image 3 -->
            <div class="input-field">
                <label for="image3">Image 3</label>
                <input type="file" id="image3" name="image3">
                @if($product->image3_path)
                    <div>
                        <img src="{{ asset('storage/' . $product->image3_path) }}" alt="Image 3" width="100" class="mt-2">
                    </div>
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Update Product</button>
            <a href="{{ route('admin') }}" class="btn btn-secondary">Back to Products</a>
        </form>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const elems = document.querySelectorAll('select');
        const instances = M.FormSelect.init(elems);
    });
</script>

