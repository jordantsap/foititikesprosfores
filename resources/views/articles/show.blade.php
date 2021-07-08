@extends('layouts.public')
{{-- @section('title', $article->type->title . ' ' . $article->title) --}}
{{-- @section('meta_description', $article->type->title . ' ' . $article->meta_description) --}}
{{-- @section('meta_keywords', $article->meta_keywords . ' ' . $article->type->title) --}}

@section('content')
<<<<<<< HEAD
    <img width="100%" height="350px" src="{{ asset('images/articles/'.$article->image) }}" title="{{ $article->title }}" class=""
=======
    <img width="100%" height="350px" src="{{-- $article->image --}}" title="{{ $article->title }}" class=""
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        alt="{{ $article->title }}">
    <div class="container">
        <div id="articles">
            <div class="row">
                <div class="col-xs-12">
                    <br>
                    <h1 class="text-center">{{ $article->title }}</h1>
                    <div class="divider"></div><br>
                </div>

                <div class="col-xs-4 text-center">

                    <ul class="list-group">
                        <li class="list-group-item bold">
                            <h2>{{ __('single.type') }}
                                @if ($article->type)
                                <a href="{{ route('category', $article->type->slug) }}">
                                    {{ Str::limit($article->type->title, 200) }}
                                </a>
                                @else
                                    No type
                                @endif
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
                            <h2>{!! $article->description !!}</h2>
                        </div>
                    </div>
                </div>


            </div>
            <br>
        @endsection
