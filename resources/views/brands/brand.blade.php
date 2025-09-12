  <!-- Brand Grid -->
<div class="container py-2">
    <h3 class="mb-4 fw-bold text-center brand-headline">Our Brands</h3>
    <div class="brand-grid">
        @foreach ($brands as $brand)
            <div class="brand-card p-3">
                <img src="{{ asset($brand->image_url) }}" 
                     alt="{{ $brand->name }}" 
                     class="brand-logo">
                <!-- <div class="mt-2 brand-name">{{ ucfirst($brand->name) }}</div>  -->
            </div>
        @endforeach
    </div>
</div>
<div class="promo-section">
  <div class="promo-grid">
    <!-- Box 1 -->
    <div class="promo-box blue">
      <h2>Order It</h2>
      <p>Choose the quantities and sizes you need then checkout.</p>
      <a href="#" class="btn">Start Designing</a>
    </div>

    <!-- Box 2 -->
    <div class="promo-box image">
      <img src="images/tshirt1.jpg" alt="Promo Image 1">
    </div>

    <!-- Box 3 -->
    <div class="promo-box image">
      <img src="images/tshirt2.jpg" alt="Promo Image 2">
    </div>

    <!-- Box 4 -->
    <div class="promo-box white">
      <h2>Spend $250 + More, Get 25% Off</h2>
      <p>(Coupon Not Valid With Promotional Products)</p>
      <h3 class="discount">25% OFF For Over $250</h3>
      <p class="code">INKSTITCH25</p>
      <a href="#" class="btn">Shop Now</a>
    </div>
  </div>
</div>
