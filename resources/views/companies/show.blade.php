<<<<<<< HEAD
﻿@extends('layouts.public')
=======
﻿{{-- @extends('layouts.public') --}}
@extends('layouts.public')
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
{{-- @section('title', $company->title . ' ' . $company->title)
@section('meta_description', $company->title . ' ' . __('head.company') . ' ' . $company->meta_description)
@section('meta_keywords', $company->meta_keywords . ' ' . $company->title . ' ' . __('head.company')) --}}

@section('content')

<<<<<<< HEAD
    <img width="100%" height="350px" src="{{ asset('images/companies/' . $company->image) }}"
        title="{{ $company->title }}" class="" alt="{{ $company->title }}"> --}}
    <h1 class="text-center">{{ $company->title }}</h1>
=======
    {{-- <img width="100%" height="350px" src="{{ asset('images/companies/' . $company->image) }}"
        title="{{ $company->title }}" class="" alt="{{ $company->title }}"> --}}
    {{-- <h1 class="text-center">{{ $company->title }}</h1> --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    <div class="divider"></div>
    <br>
    <div class="container">
        <div id="companies">

            <div class="row">
                <div class="col-sm-6">
<<<<<<< HEAD
                    <img src="{{ asset('images/companies/' . $company->image) }}" width="100%" height="250"
                        alt="{{ $company->title }}" title="{{ $company->title }}">
=======
                    {{-- <img src="{{ asset('images/companies/' . $company->image) }}" width="100%" height="250"
                        alt="{{ $company->title }}" title="{{ $company->title }}"> --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                </div>

                <div class="col-sm-6">
                    <div class="col-sm-9">
<<<<<<< HEAD
                        <h3>{{ __('single.category') }} {{ $company->category->name }}</h3>
                        <h3>{{ __('single.manager') }} {{ $company->manager }}</h3>
                        <h3>{{ __('single.telephone') }} {{ $company->telephone }}</h3>
=======
                        {{-- <h3>{{ __('single.category') }} {{ $company->category->name }}</h3>
                        <h3>{{ __('single.manager') }} {{ $company->manager }}</h3>
                        <h3>{{ __('single.telephone') }} {{ $company->telephone }}</h3> --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                    </div>

                </div>


                <div class="row center-block">
                    <br>

                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ __('single.description') }}</p>
                        </div>
                        <div class="card-body">
<<<<<<< HEAD
                            <h2>{!! $company->description !!}</h2>
=======
                            {{-- <h2>{!! $company->description !!}</h2> --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                        </div>
                    </div>
                </div>

                <div class="row"><br>

                    <div class="col-sm-12">
                        <h1 class="text-center">{{ __('single.products') }} {{ $company->title }}</h1>
                        <div class="divider"></div><br>
                    </div>

                    @if (count($company->products->where('active', 1)) > 0)
<<<<<<< HEAD
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
=======
                        @foreach ($company->products->where('active', 1) as $company)
                            <div class="col-sm-3">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <h2>{{ Str::limit($company->title, 20) }}</h2>
                                    </li>
                                    <li class="list-group-item"><img
                                            src="{{ asset('images/products/' . $company->image) }}" width="100%"
                                            height="100px" alt="{{ $company->title }}" title"{{ $company->title }}">
                                    </li>
                                        <h3>Τιμή: {{ $company->price }}</h3>
                                    </li>
                                    <li class="list-group-item">
                                        <h3>{!! Str::limit($company->description, 20) !!}</h3>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{ route('product', $company->slug) }}"
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
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
