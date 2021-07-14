@extends('layouts.public')
@section('title', $type->title . ' ' . $type->title)
@section('meta_description', $type->title . ' ' . __('head.company') . ' ' . $type->meta_description)
@section('meta_keywords', $type->meta_keywords . ' ' . $type->title . ' ' . __('head.company'))

@section('content')
<img class="img-responsive img-fluid rounded" style="width:100%;height:150px;" src="{{ asset($type->image) }}" alt="{{ $type->title }}">
    <div id="type">
        <div class="container">
            <div class="row">
                <h1 class="type-header text-center">{{ __('page.products') }} {{ $type->title}}</h1>
                <div class="divider"></div>


                <div class="col-sm-3">
                    @include('partials.sidebar')
                </div>


                <div class="col-sm-9">
                    <div class="row">
                        @if (count($type->category->products) > 0)
                            @foreach ($type->products as $product)
                                <div class="col-sm-4 text-center">
                                    <a href="{{ url('product', $product->slug) }}">

                                        <img class="img-responsive img-fluid rounded" style="width:100%;height:150px;"
                                            src="{{ asset('images/products/'.$product->image) }}" alt="{{ $product->title }}">

                                        <h2>{{ Str::limit($product->title, 20) }}</h2>

                                    </a>
                                    <h3><b>{{ __('Κατηγορία: ') }}</b> <br>
                                        <a href="{{ route('types', $product->type->slug) }}">
                                            {{ $product->type->title }}</a>
                                    </h3>
                                    <h4><b>{{ __('Εταιρεία') }}</b> <a
                                            href="{{ url('company', $product->company ? $product->company->slug : null) }}"><br>{{ Str::limit($product->company ? $product->company->title : '#', 10) }}</a>
                                    </h4>
                                    <h4 class="col-sm-4"><b>{{ __('Τιμή') }}</b> <br>€ {{ $product->price }}
                                    </h4>
                                    <h4>
                                        <a href="{{ $product->link }}" title="{{ $product->link }}" target="_blank" >Go to Product
                                        </a>
                                    </h4>
                                                            <br>
                            </div>
                    @endforeach

                                <div class="d-flex justify-content-center">
                                    {{ $products->links() }}
                                </div>
                </div>
                @else
                    <div class="d-flex justify-content-center noresults">
                        <h1 class="align-middle"><b>{{ __('page.noresults') }}</b></h1>
                    </div>
                @endif

            </div>

        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
    </div>
    <br>
@endsection
