@extends('layouts.public')
{{-- @section('title', $company->title . ' ' . $company->title)
@section('meta_description', $company->title . ' ' . __('head.company') . ' ' . $company->meta_description)
@section('meta_keywords', $company->meta_keywords . ' ' . $company->title . ' ' . __('head.company')) --}}

@section('content')

    <img width="100%" height="350px" src="{{ asset('images/companies/' . $company->image) }}"
        title="{{ $company->title }}" class="" alt="{{ $company->title }}"> --}}
    <h1 class="text-center">{{ $company->title }}</h1>
    <div class="divider"></div>
    <br>
    <div class="container">
        <div id="companies">

            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ asset('images/companies/' . $company->image) }}" width="100%" height="250"
                        alt="{{ $company->title }}" title="{{ $company->title }}">
                </div>

                <div class="col-sm-6">
                    <div class="col-sm-9">
                        <h3>{{ __('single.category') }} {{ $company->category->name }}</h3>
                        <h3>{{ __('single.manager') }} {{ $company->manager }}</h3>
                        <h3>{{ __('single.telephone') }} {{ $company->telephone }}</h3>
                    </div>

                </div>


                <div class="row center-block">
                    <br>

                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ __('single.description') }}</p>
                        </div>
                        <div class="card-body">
                            <h2>{!! $company->description !!}</h2>
                        </div>
                    </div>
                </div>

                <div class="row"><br>

                    <div class="col-sm-12">
                        <h1 class="text-center">{{ __('single.products') }} {{ $company->title }}</h1>
                        <div class="divider"></div><br>
                    </div>

                    @if (count($company->products->where('active', 1)) > 0)
                        @foreach ($company->products->where('active', 1) as $product)
                            <div class="col-sm-3">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h2>{{ Str::limit($product->title, 20) }}</h2>
                                    </li>
                                    <li class="list-group-item"><img
                                            src="{{ asset('images/products/' . $product->image) }}" width="100%"
                                            height="100px" alt="{{ $product->title }}" title"{{ $product->title }}">
                                    </li>
                                        <h3>Τιμή: {{ $product->price }}</h3>
                                    </li>
                                    <li class="list-group-item">
                                        <h3>{!! Str::limit($product->description, 20) !!}</h3>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('product', $product->slug) }}"
                                            class="btn btn-default btn-block">Show</a>
                                    </li>
                                </ul>
                            </div>
                    @endforeach @else
                        <p class="text-center">No published products</p>
                    @endif

                </div>

            </div>
        </div>
    {{-- <br> --}}
    @endsection
