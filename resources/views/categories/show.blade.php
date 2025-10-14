<!-- category Grid -->
<div class="container py-5">
  <div class="mb-4 text-center my-5">
    <h1 class="fw-bold">Shop Our Top Categories show</h1>
    <p class="text-muted">Find the perfect style for every occasion</p>
  </div>

  <div class="category-grid d-flex flex-wrap gap-3 justify-content-center">
    @foreach ($categories as $category)
      <a href="{{ route('category.show', $category->slug) }}" class="category-card p-3 text-decoration-none text-dark">
        @if($category->image_url)
          <img src="{{ asset($category->image_url) }}" alt="{{ $category->name }}" class="category-logo mb-2" style="width:200px; height:200px; object-fit:cover; border-radius:10px;">
        @endif
        <h2 class="text-center mt-2">{{ ucfirst($category->name) }}</h2>
      </a>
    @endforeach
  </div>
</div>
