<section class="home-categories">
    <div class="">

        <div class="row">
            <div class="mx-auto">
                <h1 class="home-categories-header text-center">Δημοφιλείς Κατηγορίες Προϊόντων</h1>
            </div>
            @if ($categories)
            @foreach ($categories as $category)
            <div class="home-categories-item">
                <div class="hovereffect">
                    <img class="img-responsive" src="{{ asset('images/categories/'. $category->image) }}" alt="{{ $category->title }}">
                    <div class="overlay">
                        <h2>{{ $category->title }}</h2>
                        <p>
                            <a href="{{route('category', $category->slug)}}">LINK HERE</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            @else dffshtyhdf
            @endif


        </div>

    </div>

</section>
