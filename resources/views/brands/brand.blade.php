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
