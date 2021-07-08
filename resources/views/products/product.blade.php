@extends('layouts.public')
@section('title', $product->category->title . ' ' . $product->title)
@section('meta_description', $product->category->title . ' ' . $product->meta_description)
@section('meta_keywords', $product->meta_keywords . ' ' . $product->category->title)

@section('content')
    <img width="100%" height="350px" src="{{ asset('images/products/'.$product->image) }}" title="{{ $product->title }}" class=""
        alt="{{ $product->title }}">
    <div class="container">
        <div id="articles">
            <div class="row">
                <div class="col-xs-12">
                    <br>
                    <h1 class="text-center">{{ $product->title }}</h1>
                    <div class="divider"></div><br>
                </div>

                <div class="col-xs-4 text-center">

                    <ul class="list-group">
                        <li class="list-group-item bold">
                            <h2>{{ __('Κατηγορία') }}
                                <a href="{{ route('category', $product->category->slug) }}">
                                    {{ Str::limit($product->category->title, 200) }}
                                </a>
                            </h2>
                        </li>
                        <li class="list-group-item bold">
                            <h2>{{ __('Χρώμα') }}
                                {{ $product->color->title}}
                            </h2>
                        </li>
                        <li class="list-group-item bold">
                            <h2>{{ __('Τιμή') }}
                                {{ $product->price}}
                            </h2>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 center-block">
                    <br>
                    <div class="panel panel-primary text-center">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ __('single.description') }}</p>
                        </div>
                        <div class="panel-body">
                            <h4>{{ $product->description }}</h4>
                            <h5> <a href="{{ $product->link }}" title="{{ $product->link }}" target="_blank" >Go to Product
                            </a> </h5>
                        </div>
                    </div>
                </div>


            </div>
            <br>
        @endsection
