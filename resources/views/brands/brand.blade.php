<div class="container py-3">
    <h3 class="mb-4 fw-bold text-center brand-headline">Our Best Clients</h3>

    <!-- Row 1 -->
    <div class="brand-row">
        <div class="brand-track">
            @foreach($brands->slice(0, 10) as $brand)
                <div class="brand-card">
                    <img src="{{ asset($brand->image_url) }}" alt="{{ $brand->name }}" class="brand-logo">
                </div>
            @endforeach
        </div>
    </div>

    <!-- Row 2 -->
    <div class="brand-row">
        <div class="brand-track">
            @foreach($brands->slice(10, 10) as $brand)
                <div class="brand-card">
                    <img src="{{ asset($brand->image_url) }}" alt="{{ $brand->name }}" class="brand-logo">
                </div>
            @endforeach
        </div>
    </div>
</div>
