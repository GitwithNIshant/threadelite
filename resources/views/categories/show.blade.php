<h1>{{ $category->name }}</h1>
<ul>
  @foreach($products as $product)
    <li>
      <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
      (₹{{ $product->price }})
    </li>
  @endforeach
</ul>
