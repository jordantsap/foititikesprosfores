<div id="slidercarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($homeproducts as $key => $item)

            <button type="button" data-bs-target="#slidercarousel" data-bs-slide-to="{{ $item->id }}"
                class="{{ $key == 1 ? 'active' : '' }}" aria-current="true"
                aria-label="{{ $item->title }}"></button>

        @endforeach
        {{-- <button type="button" data-bs-target="#slidercarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#slidercarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
    </div>
    <div class="carousel-inner">
        @foreach ($homeproducts as $key => $item)
            <a href="{{ route('product', $item->slug) }}">
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src={{ asset('images/products/' . $item->image) }} class="d-block w-100"
                        alt="{{ $item->title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $item->title }}</h5>
                        <p>{{ Str::limit($item->title, 20) }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#slidercarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slidercarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
