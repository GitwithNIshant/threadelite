<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .color-swatch {
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid #ddd;
        }
        .color-swatch:hover {
            transform: scale(1.1);
        }
        .color-swatch.active {
            border: 3px solid #000 !important;
        }
        .thumbnail {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .thumbnail:hover {
            transform: scale(1.05);
            border-color: #007bff !important;
        }
        .size-option {
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .size-option.active {
            background-color: #007bff !important;
            color: white !important;
        }
        .price {
            color: #e74c3c;
            font-weight: bold;
        }
        .product-image {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            background: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <!-- Product Images Section -->
            <div class="col-md-6">
                <div class="product-images">
                    <!-- Main Image -->
                    <div class="main-image mb-4">
                        <img id="primaryImage" 
                             src="{{ asset($product->primary_image_url) }}" 
                             alt="{{ $product->name }}" 
                             class="img-fluid rounded product-image"
                             style="max-height: 500px; width: 100%; object-fit: cover;">
                    </div>
                    
                    <!-- Image Thumbnails -->
                    <div class="image-thumbnails d-flex flex-wrap gap-2">
                        @foreach($product->images as $image)
                            <img src="{{ asset($image->image_url) }}" 
                                 alt="Thumbnail" 
                                 class="thumbnail img-thumbnail rounded"
                                 style="width: 80px; height: 80px; object-fit: cover;"
                                 data-image="{{ asset($image->image_url) }}">
                        @endforeach
                    </div>
                </div>
            </div>
            
            <!-- Product Details Section -->
            <div class="col-md-6">
                <!-- Product Name -->
                <h1 id="productName" class="mb-2">{{ $product->name }}</h1>
                
                <!-- Brand & Category -->
                @if($product->brand || $product->category)
                <div class="product-meta mb-3">
                    @if($product->brand)
                        <span class="text-muted">Brand: {{ $product->brand->name }}</span>
                    @endif
                    @if($product->category)
                        <span class="text-muted ms-2">| Category: {{ $product->category->name }}</span>
                    @endif
                </div>
                @endif
                
                <!-- Price -->
                <div class="price-section mb-4">
                    <h3 class="price" id="productPrice">₹{{ number_format($product->price, 2) }}</h3>
                </div>
                
                <!-- Color Options -->
                <div class="color-options mb-4">
                    <h5 class="mb-3">Available Colors:</h5>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach($colorVariants as $variant)
                            <div class="color-option text-center">
                                <div class="color-swatch {{ $variant->color_code == $product->color_code ? 'active' : '' }}"
                                     style="background-color: {{ $variant->color_code }}; width: 40px; height: 40px; border-radius: 50%;"
                                     data-color="{{ $variant->color_code }}"
                                     data-product-name="{{ $product->name }}"
                                     title="{{ $variant->color_code }}">
                                </div>
                                <small class="d-block mt-1 text-muted">{{ $variant->color_code }}</small>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Size Options -->
                <div class="size-options mb-4">
                    <h5 class="mb-3">Select Size:</h5>
                    <div class="d-flex flex-wrap gap-2" id="sizeOptions">
                        @foreach($availableSizes as $size)
                            <div class="size-option {{ $size == $product->size ? 'active' : '' }} border rounded px-3 py-2"
                                 data-size="{{ $size }}"
                                 style="min-width: 50px; text-align: center;">
                                {{ $size }}
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Description -->
                @if($product->description)
                <div class="description mb-4">
                    <h5>Description</h5>
                    <p class="text-muted" id="productDescription">{{ $product->description }}</p>
                </div>
                @endif
                
                <!-- Add to Cart Section -->
                <div class="cart-section">
                    <div class="d-grid gap-2 d-md-flex">
                        <button class="btn btn-primary btn-lg flex-fill" id="addToCartBtn">
                            Add to Cart - 
                            <span id="selectedColor">{{ $product->color_code }}</span>
                            <span id="selectedSize"> - {{ $product->size }}</span>
                        </button>
                        <button class="btn btn-outline-secondary btn-lg">
                            Wishlist
                        </button>
                    </div>
                </div>

                <!-- Product Info Card -->
                <div class="product-info mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Product Information</h5>
                            <div class="row">
                                <div class="col-6">
                                    <strong>SKU:</strong> <span id="productSku">{{ $product->sku }}</span>
                                </div>
                                <div class="col-6">
                                    <strong>Current Color:</strong> <span id="currentColor">{{ $product->color_code }}</span>
                                </div>
                                <div class="col-6 mt-2">
                                    <strong>Available Colors:</strong> {{ $colorVariants->count() }}
                                </div>
                                <div class="col-6 mt-2">
                                    <strong>Available Sizes:</strong> {{ $availableSizes->count() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const primaryImage = document.getElementById('primaryImage');
            const productName = document.getElementById('productName');
            const productPrice = document.getElementById('productPrice');
            const productDescription = document.getElementById('productDescription');
            const productSku = document.getElementById('productSku');
            const selectedColorSpan = document.getElementById('selectedColor');
            const selectedSizeSpan = document.getElementById('selectedSize');
            const currentColorSpan = document.getElementById('currentColor');
            const addToCartBtn = document.getElementById('addToCartBtn');
            const sizeOptions = document.getElementById('sizeOptions');
            
            let selectedSize = '{{ $product->size }}';
            let selectedColor = '{{ $product->color_code }}';

            // Color click handler
            document.querySelectorAll('.color-swatch').forEach(swatch => {
                swatch.addEventListener('click', function() {
                    const colorCode = this.getAttribute('data-color');
                    const productName = this.getAttribute('data-product-name');
                    
                    // Update active state
                    document.querySelectorAll('.color-swatch').forEach(s => {
                        s.classList.remove('active');
                    });
                    this.classList.add('active');
                    
                    // Show loading state
                    primaryImage.style.opacity = '0.5';
                    
                    // Fetch product data for selected color
                    fetch(`/products/color-variant?product_name=${encodeURIComponent(productName)}&color_code=${encodeURIComponent(colorCode)}`)
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data.success) {
                                // Update product details
                                if (data.primary_image) {
                                    primaryImage.src = data.primary_image.image_url;
                                } else if (data.images.length > 0) {
                                    primaryImage.src = data.images[0].image_url;
                                }
                                productPrice.textContent = `₹${parseFloat(data.product.price).toFixed(2)}`;
                                productSku.textContent = data.product.sku;
                                
                                // Update selected color
                                selectedColor = colorCode;
                                selectedColorSpan.textContent = colorCode;
                                currentColorSpan.textContent = colorCode;
                                
                                // Update thumbnails
                                updateThumbnails(data.images);
                                
                                // Update size options
                                updateSizeOptions(data.available_sizes, data.product.size);
                                
                                // Restore image opacity
                                primaryImage.style.opacity = '1';
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            primaryImage.style.opacity = '1';
                            alert('Error loading product for this color');
                        });
                });
            });
            
            // Size click handler
            sizeOptions.addEventListener('click', function(e) {
                if (e.target.classList.contains('size-option')) {
                    const size = e.target.getAttribute('data-size');
                    
                    // Update active state
                    document.querySelectorAll('.size-option').forEach(option => {
                        option.classList.remove('active');
                    });
                    e.target.classList.add('active');
                    
                    // Update selected size
                    selectedSize = size;
                    selectedSizeSpan.textContent = ` - ${size}`;
                }
            });
            
            // Thumbnail click handler
            function updateThumbnails(images) {
                const thumbnailsContainer = document.querySelector('.image-thumbnails');
                thumbnailsContainer.innerHTML = '';
                
                images.forEach(image => {
                    const thumbnail = document.createElement('img');
                    thumbnail.src = image.image_url;
                    thumbnail.alt = 'Thumbnail';
                    thumbnail.className = 'thumbnail img-thumbnail rounded';
                    thumbnail.style = 'width: 80px; height: 80px; object-fit: cover; cursor: pointer;';
                    thumbnail.setAttribute('data-image', image.image_url);
                    
                    thumbnail.addEventListener('click', function() {
                        primaryImage.src = this.getAttribute('data-image');
                    });
                    
                    thumbnailsContainer.appendChild(thumbnail);
                });
            }
            
            // Update size options
            function updateSizeOptions(availableSizes, defaultSize) {
                const sizeOptionsContainer = document.getElementById('sizeOptions');
                sizeOptionsContainer.innerHTML = '';
                
                availableSizes.forEach(size => {
                    const sizeOption = document.createElement('div');
                    sizeOption.className = `size-option ${size === defaultSize ? 'active' : ''} border rounded px-3 py-2`;
                    sizeOption.style = 'min-width: 50px; text-align: center; cursor: pointer;';
                    sizeOption.setAttribute('data-size', size);
                    sizeOption.textContent = size;
                    
                    sizeOption.addEventListener('click', function() {
                        document.querySelectorAll('.size-option').forEach(option => {
                            option.classList.remove('active');
                        });
                        this.classList.add('active');
                        selectedSize = size;
                        selectedSizeSpan.textContent = ` - ${size}`;
                    });
                    
                    sizeOptionsContainer.appendChild(sizeOption);
                });
                
                selectedSize = defaultSize;
                selectedSizeSpan.textContent = ` - ${defaultSize}`;
            }
            
            // Existing thumbnail click handler
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('thumbnail')) {
                    primaryImage.src = e.target.getAttribute('data-image');
                }
            });
            
            // Add to cart handler
            addToCartBtn.addEventListener('click', function() {
                const productData = {
                    product_id: {{ $product->id }},
                    product_name: '{{ $product->name }}',
                    color: selectedColor,
                    size: selectedSize,
                    price: parseFloat({{ $product->price }}),
                    image: primaryImage.src
                };
                
                // Simple cart implementation
                alert(`Added to cart:\nProduct: ${productData.product_name}\nColor: ${productData.color}\nSize: ${productData.size}\nPrice: ₹${productData.price.toFixed(2)}`);
                
                // You can implement AJAX cart addition here
                /*
                fetch('/cart/add', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(productData)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Product added to cart!');
                    }
                });
                */
            });
        });
    </script>
</body>
</html>