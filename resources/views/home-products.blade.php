<section class="home-products">
    <div class="container">
        <div class="row">
            <div class="mx-auto">
                <h1 class="home-products-header text-center">Εβδομαδιαίες Προσφορές</h1>
            </div>
            @if ($homeproducts)
            @foreach ($homeproducts as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
<<<<<<< HEAD
                    <img class="img-responsive" width="100%" height="200px" src="{{ asset('images/products/'.$product->image) }}" alt="">
=======
                    <img class="img-responsive" width="100%" height="200px" src="{{ $product->image }}" alt="">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

                    <div class="overlay">
                        <h2>{{ $product->title}}</h2>
                        <p>
                            <a href="{{route('product', $product->slug)}}">LINK HERE</a>
                        </p>
                    </div>
                    Κατηγορια
                    <br>
                    {{ $product->category->title}}
                    <br>
                    Ονομασια
                    <br>
                    {{ $product->title}}
                    <br>
                    Τιμή
                    {{ $product->price}}
                </div>
            </div>
            @endforeach
            @else

            @endif

        </div>
    </div>
</section>
