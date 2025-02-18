@extends('master')

@section('title', 'User')

@section('main')
    <div class="container">
        <h1>User</h1>

        <div class="row">
            @foreach ($allProducts as $product)
                <div class="col s12 m6 l4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $product->name }}</span>
                            
                            <p><strong>Category:</strong> {{ $product->category->name }}</p>
                            <p><strong>Price:</strong> {{ number_format($product->price, 2) }} RSD</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-small waves-effect waves-light green"><i class="material-icons">favorite</i></a>
                            <a href="#" class="btn-small waves-effect waves-light blue"><i class="material-icons">local_grocery_store</i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection