<h1>All Categories</h1>
<ul>
  @foreach($categories as $category)
    <li><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></li>
  @endforeach
</ul>