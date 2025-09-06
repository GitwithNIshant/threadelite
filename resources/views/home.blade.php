@extends('partials.navbar')

@section('content')


  <!-- Brand Grid -->
<div class="container my-5">
    <h3 class="mb-4 text-center fw-bold">Our Brands</h3>
    <div class="brand-grid">
        @foreach ($brands as $brand)
            <div class="brand-card text-center p-3">
                <img src="{{ asset($brand->image_url) }}" 
                     alt="{{ $brand->name }}" 
                     class="brand-logo">
                <div class="mt-2 brand-name">{{ ucfirst($brand->name) }}</div>
            </div>
        @endforeach
    </div>
</div>

<style>
.brand-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 20px;
}

.brand-card {
 background: #fff;
  border-radius: 12px;
  overflow: hidden;  /* crop anything outside */
  transition: all 0.3s ease;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  text-align: center;
   height: 200px;          /* full fixed height */
  width: 100%; 
  display: flex;
  flex-direction: column;
   padding: 0;  
}

.brand-card:hover {
  transform: translateY(-5px) scale(1.05);
  box-shadow: 0 6px 16px rgba(0,0,0,0.2);
}

.brand-logo {
  width: 100%;
  height: 100%;
  object-fit: contain;  /* fills full width & height */
  display: block;
}
.container img {
    max-height: 50px;
    height: auto;
}
.brand-name {
  font-weight: 600;
  font-size: 14px;
  padding: 10px;
  background: #ffffffff;
}

/* Responsive */
@media (max-width: 1200px) {
  .brand-grid {
    grid-template-columns: repeat(4, 1fr);
  }
}
@media (max-width: 992px) {
  .brand-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}
@media (max-width: 576px) {
  .brand-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
</style>




<!-- Categories Section -->
<div class="container my-5">
    <div class="d-flex justify-content-between flex-wrap flex-lg-nowrap category-row">

        <div class="category-item">
            <img src="images/polo.jpg" alt="U.S Polo T-shirt" class="category-img">
            <p class="category-name">U.S Polo T-shirt</p>
        </div>

        <div class="category-item">
            <img src="images/roundneck.jpg" alt="Roundneck T-shirt" class="category-img">
            <p class="category-name">Roundneck T-shirt</p>
        </div>

        <div class="category-item">
            <img src="images/jackets.jpg" alt="Jackets" class="category-img">
            <p class="category-name">Jackets</p>
        </div>

        <div class="category-item">
            <img src="images/uniform.jpg" alt="Uniform" class="category-img">
            <p class="category-name">Uniform</p>
        </div>

        <div class="category-item">
            <img src="images/sweatshirt.jpg" alt="Sweat Shirt" class="category-img">
            <p class="category-name">Sweat Shirt</p>
        </div>

        <div class="category-item">
            <img src="images/shirts.jpg" alt="Shirts" class="category-img">
            <p class="category-name">Shirts</p>
        </div>

        <div class="category-item">
            <img src="images/bags.jpg" alt="Bags" class="category-img">
            <p class="category-name">Bags</p>
        </div>

        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="category-item">
                <div class="category-img category-circle">BRANDS</div>
                <p class="category-name">Brands</p>
            </div>
        </div>
    </div>
</div>

<!-- Product Grid -->
<div class="container my-5">
    <div class="product-grid">

        <!-- Product 1 -->
        <div class="product-card">
            <div class="product-img">
                <img src="images/polotshirt1.jpg" alt="U.S. Polo Light Blue Polo T-shirt">
            </div>
            <div class="product-info">
                <p class="title">U.S. Polo Plain Light Blue Polo T-shirt</p>
                <p class="price">₹1,499</p>
                <div class="rating">⭐⭐⭐⭐⭐ <span>(320)</span></div>
                <div class="colors">
                    <span style="background:lightblue"></span>
                    <span style="background:navy"></span>
                    <span style="background:black"></span>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <div class="product-img">
                <img src="images/polotshirt2.jpg" alt="U.S. Polo Ocean Blue Polo T-shirt">
            </div>
            <div class="product-info">
                <p class="title">U.S. Polo Ocean Blue Polo T-shirt</p>
                <p class="price">₹1,799</p>
                <div class="rating">⭐⭐⭐⭐ <span>(210)</span></div>
                <div class="colors">
                    <span style="background:blue"></span>
                    <span style="background:skyblue"></span>
                    <span style="background:black"></span>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <div class="product-img">
                <img src="images/polotshirt3.jpg" alt="U.S. Polo Black Polo T-shirt">
            </div>
            <div class="product-info">
                <p class="title">U.S. Polo Plain Black Polo T-shirt</p>
                <p class="price">₹1,599</p>
                <div class="rating">⭐⭐⭐⭐⭐ <span>(410)</span></div>
                <div class="colors">
                    <span style="background:black"></span>
                    <span style="background:gray"></span>
                    <span style="background:white"></span>
                </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <div class="product-img">
                <img src="images/polotshirt4.jpg" alt="U.S. Polo Light Blue Polo T-shirt">
            </div>
            <div class="product-info">
                <p class="title">U.S. Polo Light Blue Polo T-shirt</p>
                <p class="price">₹1,699</p>
                <div class="rating">⭐⭐⭐⭐ <span>(180)</span></div>
                <div class="colors">
                    <span style="background:lightblue"></span>
                    <span style="background:blue"></span>
                    <span style="background:black"></span>
                </div>
            </div>
        </div>
        <!-- Product 1 -->
        <div class="product-card">
            <div class="product-img">
                <img src="images/polotshirt5.jpg" alt="U.S. Polo Light Blue Polo T-shirt">
            </div>
            <div class="product-info">
                <p class="title">U.S. Polo Plain Light Blue Polo T-shirt</p>
                <p class="price">₹1,499</p>
                <div class="rating">⭐⭐⭐⭐⭐ <span>(320)</span></div>
                <div class="colors">
                    <span style="background:lightblue"></span>
                    <span style="background:navy"></span>
                    <span style="background:black"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="product-card">
        <div class="product-img">
            <img src="images/polotshirt6.jpg" alt="U.S. Polo Ocean Blue Polo T-shirt">
        </div>
        <div class="product-info">
            <p class="title">U.S. Polo Ocean Blue Polo T-shirt</p>
            <p class="price">₹1,799</p>
            <div class="rating">⭐⭐⭐⭐ <span>(210)</span></div>
            <div class="colors">
                <span style="background:blue"></span>
                <span style="background:skyblue"></span>
                <span style="background:black"></span>
            </div>
        </div>
    </div>

</div>

@endsection