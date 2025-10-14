<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thread Elite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
      



  {{-- Bootstrap 5 --}}
  

    <style>
        /* Custom styles */
        .color-circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: inline-block;
            border: 1px solid #ccc;
            margin-right: 5px;
        }

        .filter-section {
            max-width: 250px;
        }

        /* Remove gaps between navbars */
        .main-navbar,
        .product-navbar {
            margin: 0 !important;
            padding: 0 !important;
        }

        .product-navbar .container {
            padding: 0 !important;
        }

        /* Optional: Adjust dropdown menu */
        .dropdown-menu.square-box {
            min-width: 180px;
        }
        body {
            background-color: #e5e6ecff;
        }
    </style>
</head>

<body>
    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light main-navbar sticky-top" style="background-color: #680502;">
        <div class="container d-flex align-items-center justify-content-between p-0">
            <div class="d-flex align-items-center">
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('logo/image1.svg') }}" alt="Ink N Stitch Logo" width="298.9" height="56">
                </a>
            </div>

            <!-- <div class="search-container me-3">
                <div class="search-box d-flex">
                    <input type="text" class="form-control" placeholder="Enter keywords to search...">
                    <button class="btn btn-primary ms-2"><i class="fas fa-search"></i></button>
                </div>
            </div> -->
            <!-- Right: Search Box -->
      <div class="search-container">
        <div class="search-box">
          <input type="text" class="search-input" placeholder="Enter keywords to search...">
          <button class="search-button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                      <!-- Home -->
          <li class="nav-item"><a class="nav-link" href="{{ url('/') }}" style="color: #eceadf !important;">Home</a></li>

          <!-- About -->
          <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}" style="color: #eceadf !important;">About Us</a></li>

          <!-- Products -->
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #eceadf !important;">Products</a>
          </li>

          <!-- Contact -->
          <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}" style="color: #eceadf !important;">Contact</a></li>
          <!-- phone number -->

          <!-- <li class="nav-item"><a class="nav-link" href="{{ url('/phonenumber') }}" style="fontco"><i class="fas fa-phone"></i> +91 98222 92306 </a></li> -->
          <li class="nav-item">
            <a class="nav-link custom-phone-link" href="{{ url('/') }}" style="color: #058ff7 !important;">
              <i class="fas fa-phone"></i>+91 98222 92306
            </a>
          </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Product Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light product-navbar border-bottom" style="background-color: #eceadf;">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <!-- Polo T-Shirts -->
                <li class="nav-item dropdown">
                    <a class="nav-link product-link dropdown-toggle" href="#">POLO T-SHIRTS</a>
                    <div class="dropdown-menu square-box">
                        <a class="dropdown-item" href="#">Cotton</a>
                        <a class="dropdown-item" href="#">Dry Fit</a>
                        <a class="dropdown-item" href="#">Female</a>
                        <a class="dropdown-item" href="#">Kids</a>
                        <a class="dropdown-item" href="#">Branded</a>
                    </div>
                </li>

                <!-- Roundneck T-Shirts -->
                <li class="nav-item dropdown">
                    <a class="nav-link product-link dropdown-toggle" href="#">ROUNDNECK T-SHIRTS</a>
                    <div class="dropdown-menu square-box">
                        <a class="dropdown-item" href="#">Dry Fit</a>
                        <a class="dropdown-item" href="#">Female</a>
                        <a class="dropdown-item" href="#">Kids</a>
                        <a class="dropdown-item" href="#">Branded</a>
                    </div>
                </li>

                <!-- Shirts -->
                <li class="nav-item dropdown">
                    <a class="nav-link product-link dropdown-toggle" href="#">SHIRTS</a>
                    <div class="dropdown-menu square-box">
                        <a class="dropdown-item" href="#">Cotton</a>
                        <a class="dropdown-item" href="#">Polo</a>
                        <a class="dropdown-item" href="#">Female</a>
                        <a class="dropdown-item" href="#">Kids</a>
                    </div>
                </li>

                <!-- Sweat Shirts -->
                <li class="nav-item dropdown">
                    <a class="nav-link product-link dropdown-toggle" href="#">SWEAT SHIRTS</a>
                    <div class="dropdown-menu square-box">
                        <a class="dropdown-item" href="#">Unisex</a>
                        <a class="dropdown-item" href="#">Male</a>
                        <a class="dropdown-item" href="#">Female</a>
                    </div>
                </li>

                <!-- Jackets -->
                <li class="nav-item dropdown">
                    <a class="nav-link product-link dropdown-toggle" href="#">JACKETS</a>
                    <div class="dropdown-menu square-box">
                        <a class="dropdown-item" href="#">Leather</a>
                        <a class="dropdown-item" href="#">Male</a>
                        <a class="dropdown-item" href="#">Unisex</a>
                        <a class="dropdown-item" href="#">Female</a>
                    </div>
                </li>

                <!-- Uniforms -->
                <li class="nav-item dropdown">
                    <a class="nav-link product-link dropdown-toggle" href="#">UNIFORMS</a>
                    <div class="dropdown-menu square-box">
                        <a class="dropdown-item" href="#">Alvon</a>
                        <a class="dropdown-item" href="#">Dangri</a>
                        <a class="dropdown-item" href="#">Staff Uniform</a>
                        <a class="dropdown-item" href="#">Blazer</a>
                    </div>
                </li>

                <!-- Others -->
                <li class="nav-item"><a class="nav-link product-link" href="#">CAPS</a></li>
                <li class="nav-item"><a class="nav-link product-link" href="#">BAGS</a></li>
                <li class="nav-item"><a class="nav-link product-link" href="#">GIFTS</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <!-- Filter Sidebar -->
            <div class="col-md-3 filter-section">
                <h4>Filters</h4>
                <form method="GET" action="{{ url()->current() }}">
                    <!-- Size Filter -->
                    <div class="mb-3">
                        <h6>Size</h6>
                        @foreach(['XS','S','M','L','XL','XXL'] as $size)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="size[]" value="{{ $size }}"
                                {{ in_array($size, request()->get('size', [])) ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $size }}</label>
                        </div>
                        @endforeach
                    </div>

                    <!-- Color Filter -->
                    <div class="mb-3">
                        <h6>Color</h6>
                        @foreach($colors as $color)
                        <div class="form-check d-inline-block me-2">
                            <input class="form-check-input" type="checkbox" name="color[]" value="{{ $color }}"
                                id="color_{{ $color }}"
                                {{ in_array($color, request()->get('color', [])) ? 'checked' : '' }}>
                            <label class="form-check-label" for="color_{{ $color }}">
                                <span class="color-circle" style="background-color: {{ $color }};"></span>
                            </label>
                        </div>
                        @endforeach
                    </div>

                    <!-- Price Filter -->
                    <div class="mb-3">
                        <h6>Price</h6>
                        <div class="d-flex gap-2 mb-2">
                            <div style="padding:5px 10px; border:1px solid #ccc; border-radius:5px; min-width:60px; text-align:center;">
                                Min: ₹<span id="price_value">250</span>
                            </div>
                            <div style="padding:5px 10px; border:1px solid #ccc; border-radius:5px; min-width:60px; text-align:center;">
                                Max: ₹<span id="price_Max">1000</span>
                            </div>
                        </div>
                        <input type="range" id="price_range" class="form-range" min="250" max="1000" step="50" value="0">
                    </div>

                    
                </form>
            </div>

            <!-- Products Grid -->
            <div class="col-md-9">
    <!-- Category Title + Color + Description -->
    <div class="d-flex align-items-center mb-3">
        <h1 class="me-3">{{ $category->name }} category works</h1>

    
    </div>

    
    {{-- ✅ Product Grid --}}
    @if($products->isEmpty())
        <p class="text-muted">No products found in this category.</p>
    @else
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 text-center shadow-sm">
                        <a href="{{ route('products.show', $product->slug) }}">
                            <img src="{{ asset($product->primary_image_url) }}"
                                 class="card-img-top"
                                 alt="{{ $product->name }}"
                                 style="height:200px; object-fit:cover;">
                        </a>
                        <div class="card-body">
                            <h6 class="text-secondary small mb-1"> Brand: {{ $product->brand->name }}</h6>
                            <p class="card-title">{{ $product->name }}</p>

                            {{-- ✅ Product Size (optional) --}}
                            @if(!empty($product->size))
                                <p class="text-secondary small mb-1">Size: {{ $product->size }}</p>
                            @endif

                            <p class="card-text fw-bold text-dark">
                                ₹{{ number_format($product->price, 2) }}
                            </p>
                                {{-- ✅ Small clickable color circle --}}
        @if(!empty($product->color_code))
            <p
               title="Category Color"
               style="display:inline-block;
                      width:28px;
                      height:28px;
                      border-radius:50%;
                      background-color:{{ $product->color_code }};
                      border:2px solid #ccc;
                      transition:transform 0.2s ease;">
            </p>
        @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

        </div>
    </div>

   

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/5f5e5e5e5e.js" crossorigin="anonymous"></script>
    <script>
        // Dropdown submenu logic if needed
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".main-navbar .dropdown-submenu").forEach(function(submenu) {
                submenu.addEventListener("mouseenter", function() {
                    let menu = submenu.querySelector(".dropdown-menu");
                    if (!menu) return;

                    let rect = menu.getBoundingClientRect();

                    if (rect.right > window.innerWidth - 20) {
                        submenu.classList.add("open-left");
                    } else {
                        submenu.classList.remove("open-left");
                    }
                });
            });
        });

        //show range
            const priceRange = document.getElementById('price_range');
    const priceValue = document.getElementById('price_value');

    // Update live price display
    priceRange.addEventListener('input', function() {
        priceValue.textContent = priceRange.value;
    });
    </script>
</body>

</html>
