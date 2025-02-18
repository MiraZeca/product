@section('title')
    Admin
@endsection

@extends('master')

@section('main')
    <div class="container">
        <div class="row btnadmin">
            <div class="col s4">
                <button class="addbutton btn">
                    <a href="{{ route('product.create') }}">Add Product</a>
                </button>
            </div>
            <div class="col s4">
                <button class="addbutton btn">
                    <a href="{{ route('categories.create') }}">Add Category</a>
                </button>
            </div>
            <div class="col s4">
                <button class="addbutton btn">
                    <a href="{{ route('users.index') }}">Add User/Admin</a>
                </button>
            </div>
        </div>
        <table class="centered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Actions</th> <!-- Dodajemo kolonu za akcije -->
                </tr>
            </thead>

            <tbody>
                @foreach ($allProducts as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btnedit">Edit</a>

                            <!-- Delete Button -->
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btndelete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
