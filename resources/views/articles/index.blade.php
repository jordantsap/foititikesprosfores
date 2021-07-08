{{-- @section('title', __('head.products'))
@section('meta_description', __('meta.productspagedescription'))
@section('meta_keywords', __('meta.productspagekeywords')) --}}
@include('partials.head')
@include('partials.header')


@section('content')

    <section class="blogpage">
        <div class="container">
            <div class="row">

                <div class="row" id="blogpage">
                    <div class="mx-auto">
                        <h1 class="home-posts-header text-center">Blog page</h1>
                        <!-- <hr class="home-categories"> -->
                    </div>
                    @if ($articles)

                        @foreach ($articles as $article)

                            <div class="home-blog-posts-item">
                                <a href="{{ route('article', $article->slug) }}">
                                    <img class="" width="100%" height="250px" src="{{ asset('images/articles/'.$article->image) }}"
                                        alt="{{ $article->title }}">
                                    <h2>{{ $article->title }}</h2>
                                </a>
                                <h3 class="">
                                    {{ $article->description }}
                                </h3>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-center mt-4">
                            {{ $articles->links() }}
                        </div>
                    @else
                        <div class="col-xs-12 noresults">
                            <h1><b>{{ __('page.noresults') }}</b></h1>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
@yield('content')

@include("partials.footer")
