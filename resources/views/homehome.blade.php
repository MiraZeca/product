<div class="container">
    <div class="row">
        <div class="col s6 offset-s3">
            <h2 class="center-align">Welcome to the store.</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($allProducts as $product)
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-content">
                        <div class="card-image">
                            <!-- Prikaz velike slike -->
                            <img 
                                id="main-image-{{ $product->id }}" 
                                src="{{ $product->image1_path ? asset('storage/' . $product->image1_path) : 'https://via.placeholder.com/400x300?text=No+Image' }}" 
                                alt="Product Image" 
                                class="responsive-img"
                            >
                        </div>
                        <div class="card-thumbnails">
                            <!-- Prikaz tri male slike -->
                            <div class="row">
                                <div class="col s4">
                                    <img 
                                    src="{{ $product->image1_path ? asset('storage/' . $product->image1_path) : 'https://via.placeholder.com/100x100?text=No+Image' }}" 
                                    class="responsive-img thumbnail"
                                    alt="Thumbnail 1"
                                    onclick="changeMainImage({{ $product->id }}, '{{ $product->image1_path ? asset('storage/' . $product->image1_path) : 'https://via.placeholder.com/400x300?text=No+Image' }}')"
                                >
                                </div>
                                <div class="col s4">
                                    <img 
                                    src="{{ $product->image2_path ? asset('storage/' . $product->image2_path) : 'https://via.placeholder.com/100x100?text=No+Image' }}" 
                                    class="responsive-img thumbnail"
                                    alt="Thumbnail 2"
                                    onclick="changeMainImage({{ $product->id }}, '{{ $product->image2_path ? asset('storage/' . $product->image2_path) : 'https://via.placeholder.com/400x300?text=No+Image' }}')"
                                >
                                </div>
                                <div class="col s4">
                                    <img 
                                    src="{{ $product->image3_path ? asset('storage/' . $product->image3_path) : 'https://via.placeholder.com/100x100?text=No+Image' }}" 
                                    class="responsive-img thumbnail"
                                    alt="Thumbnail 3"
                                    onclick="changeMainImage({{ $product->id }}, '{{ $product->image3_path ? asset('storage/' . $product->image3_path) : 'https://via.placeholder.com/400x300?text=No+Image' }}')"
                                >
                                </div>
                            </div>
                        </div>
                        <span class="card-title">{{ $product->name }}</span>
                        <p><strong>Category:</strong> {{ $product->category->name }}</p>
                        <p><strong>Price:</strong> {{ number_format($product->price, 2) }} RSD</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    function changeMainImage(productId, imageUrl) {
        const mainImage = document.getElementById(`main-image-${productId}`);
        if (mainImage) {
            mainImage.src = imageUrl;
        }
    }
</script>

<style>
    .card-thumbnails img {
        cursor: pointer;
        border: 2px solid transparent;
        transition: border-color 0.3s ease;
    }
    .card-thumbnails img:hover {
        border-color: #4caf50; /* Zelena boja kod hover efekta */
    }
    .card-image img {
        margin-bottom: 10px;
    }
</style>
