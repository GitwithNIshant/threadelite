

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center">Shop by Category</h2>
    <div class="row row-cols-2 row-cols-md-4 g-4">
        @foreach($categories as $category)
            <div class="col">
                <div class="card h-100 text-center shadow-sm border-0">
                    <a href="{{ route('categories.show', $category->slug) }}">
                        <img src="{{ asset($category->image_url ?? 'images/no-image.png') }}" 
                             alt="{{ $category->name }}"
                             class="card-img-top mx-auto d-block p-3"
                             style="height:150px; width:auto; object-fit:contain;">
                        <div class="card-body">
                            <h6 class="card-title">{{ $category->name }}</h6>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
