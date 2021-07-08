<section class="home-tips">
    <div class="container">

        <div class="row">
            <div class="mx-auto">
                <h1 class="home-tips-header text-center">Χρήσιμα Tips</h1>
                <hr class="home-tips">
            </div>
            @if ($hometips)
            @foreach ($hometips as $tip)
            <div class="home-tips-item">
                <a href="{{ route('article', $tip->slug)}}">
                    <img class="" width="100%" height="250px" src="{{ 'images/articles/'.$tip->image }}" alt="">
                    <h2>
                        {{ $tip->title}}
                    </h2>
                </a>
                <h3 class="">
                    {{ Str::limit($tip->description, 20)}}
                </h3>
            </div>

            @endforeach

            @else dfhsddghddfj

            @endif
        </div>

    </div>

</section>

