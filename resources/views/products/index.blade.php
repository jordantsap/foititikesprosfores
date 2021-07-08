@extends('layouts.public')
{{-- @section('title', __('head.products'))
@section('meta_description', __('meta.productspagedescription'))
@section('meta_keywords', __('meta.productspagekeywords')) --}}

@section('content')

    <div class="container">
        <div class="row">
            <h1 class="products-header text-center">{{ __('page.products') }}</h1>
            {{-- <div class="divider"></div> --}}
            {{-- <div class="col-sm-12"> --}}

            <div class="col-sm-3" id="sidebar">
                @include('partials.sidebar')
            </div>

            <div class="col-sm-9">
                {{-- <livewire:products /> --}}
                @if ($products)
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                <a href="{{ route('product', $product->slug) }}">
                                    <img class="img-responsive rounded" style="width:100%;height:150px;"
<<<<<<< HEAD
                                        src="{{ asset('images/products/'.$product->image) }}" alt="{{ $product->title }}">
=======
                                        src="{{ asset($product->image) }}" alt="{{ $product->title }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                    <h2>{{ Str::limit($product->title, 20) }}</h2>
                                </a>
                                <h3><b>{{ __('Κατηγορία') }}</b> <br>
                                    <a href="{{ route('category', $product->category->slug) }}">
                                        {{ $product->category->title }}</a>
                                </h3>
                                <h4><b>{{ __('Εταιρεία') }}</b>
                                    <a
                                        href="{{ $product->company ? route('company.show', $product->company->slug) : 'none' }}"><br>{{ Str::limit($product->company ? $product->company->title : '#', 12) }}</a>
                                </h4>
                                <h4 class="col-sm-12 text-center"><b>{{ __('Τιμή') }}</b> <br>€ {{ $product->price }}
                                </h4>
                                <h5> <a href="{{ $product->link }}" title="{{ $product->link }}" target="_blank" >Go to Product
                                    </a> </h5>
                                <br>
                            </div>
                        @endforeach
                    </div>
                    {{-- <br> --}}
                @else
                    <div class="d-flex justify-content-center noresults">
                        <h1 class="align-middle"><b>{{ __('page.noresults') }}</b></h1>
                    </div>
                @endif


                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
            </div>



        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
    {{-- <br> --}}

@endsection
