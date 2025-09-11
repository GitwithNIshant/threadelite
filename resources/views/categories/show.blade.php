<!-- category Grid -->
<div class="container py-2">
  <div class="mb-4 text-center my-5">
    <h1 class="fw-bold">Shop Our Top Categories</h1>
    <p class="text-muted">Find the perfect style for every occasion</p>
  </div>
  <div class="category-grid">
    @foreach ($categories as $category)
    <div class="category-card p-3">
      <h2>{{ ucfirst($category->name) }}</h2>
      @if($category->image_url)
      <img src="{{ asset($category->image_url) }}" alt="{{ $category->name }}" class="category-logo">
      @endif
    </div>
    @endforeach
  </div>
</div>