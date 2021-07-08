<div id="slidercarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($products as $item)

        <button type="button" data-bs-target="#slidercarousel" data-bs-slide-to="{{ $item->id}}" class="{{ $item->id==1?'active' : ''}}" aria-current="true"
            aria-label="{{ $item->title}}"></button>

        @endforeach
        {{-- <button type="button" data-bs-target="#slidercarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#slidercarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
    </div>
    <div class="carousel-inner">
        @foreach ($products as $item)
        <div class="carousel-item {{ $item->id==1?'active' : ''}}">
            <img src={{ asset('images/products/' . $item->image) }} class="d-block w-100" alt="{{ $item->title}}">
            <div class="carousel-caption d-none d-md-block">
                <h5>{{ $item->title}}</h5>
                <p>{{ Str::limit($item->title, 20)}}</p>
            </div>
        </div>
        @endforeach

        {{-- <div class="carousel-item">
            <img src={{ asset('images/products/technologia.jpeg') }} }} class="d-block w-100" alt="technologia">
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slidercarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>--}}
