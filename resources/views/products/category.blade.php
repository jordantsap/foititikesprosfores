@extends('layouts.public')
@section('title', $category->title . ' ' . $category->title)
@section('meta_description', $category->title . ' ' . __('head.company') . ' ' . $category->meta_description)
@section('meta_keywords', $category->meta_keywords . ' ' . $category->title . ' ' . __('head.company'))

@section('content')
<<<<<<< HEAD
<img class="img-responsive img-fluid rounded" style="width:100%;height:150px;" src="{{ asset('images/categories/' . $category->image) }}" alt="{{ $category->title }}">
=======
<img class="img-responsive img-fluid rounded" style="width:100%;height:150px;" src="{{ asset($category->image) }}" alt="{{ $category->title }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    <div id="type">
        <div class="container">
            <div class="row">
                <h1 class="type products-header text-center">{{ __('page.products') }} {{ $category->title}}</h1>
                <div class="divider"></div>

                <div class="col-sm-3" id="sidebar">
                    @include('partials.sidebar')
                </div>

                <div class="col-sm-9">
                    <div class="row">
                        @if (count($category->products) > 0)
                            @foreach ($category->products as $product)
                                <div class="col-sm-4 text-center">
                                    <a href="{{ url('product', $product->slug) }}">

                                        <img class="img-responsive img-fluid rounded" style="width:100%;height:150px;"
<<<<<<< HEAD
                                            src="{{ asset('images/products/'.$product->image) }}" alt="{{ $product->title }}">
=======
                                            src="{{ asset($product->image) }}" alt="{{ $product->title }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

                                        <h2>{{ Str::limit($product->title, 20) }}</h2>

                                    </a>
                                    <h3><b>{{ __('Κατηγορία: ') }}</b> <br>
                                        <a href="{{ url('category', $product->category->slug) }}">
                                            {{ $product->category->title }}</a>
                                    </h3>
                                    <h4><b>{{ __('Εταιρεία') }}</b> <a
                                            href="{{ $product->company ? route('company.show', $product->company->slug) : '#' }}"><br>{{ Str::limit($product->company ? $product->company->title : '#', 10) }}</a>
                                    </h4>
                                    <h4 class="col-12 text-center"><b>{{ __('Τιμή') }}</b> <br>€ {{ $product->price }}
                                    </h4>
                                    <h4>
                                        <a href="{{ $product->link }}" title="{{ $product->link }}" target="_blank" >Go to Product
                                        </a>
                                    </h4>
                                                            <br>
                            </div>
                    @endforeach
                </div>
                @else
                    <div class="d-flex justify-content-center noresults">
                        <h1 class="align-middle"><b>{{ __('page.noresults') }}</b></h1>
                    </div>
                @endif

            </div>

            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>

        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
    </div>
    <br>
@endsection
