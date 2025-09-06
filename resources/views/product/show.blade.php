<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: ₹{{ $product->price }}</p>
<img src="{{ $product->primary_image_url }}" alt="{{ $product->name }}">
