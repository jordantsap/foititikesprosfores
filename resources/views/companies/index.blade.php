@extends('layouts.public')
@section('title', __('head.companiespagetitle'))
@section('meta_description', __('meta.companiespagedescription'))
@section('meta_keywords', __('meta.companiespagekeywords'))

@section('content')
    <!-- Page Content -->
    <div id="companies">
        <div class="container">
            <div class="row">
                <h1 class="companies-header text-center">{{ __('page.companies') }}</h1>
<<<<<<< HEAD

=======
                {{-- <nav class="navbar">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#companytype-collapse" aria-expanded="false">
                        <span class="">{{ __('page.categories') }}</span>
                        <span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span>
                    </button>
                    <!-- List group -->
                    <div class="row">
                        <ul class="nav navbar-nav collapse navbar-collapse" id="companytype-collapse">
                            {{-- @foreach ($category as $companytype)
                            <li>
                                <a href="{{ route('companies-category', $category->slug)}}" class="">{{ $category->name }}&nbsp<span class="badge">{{$category->companies->where('active',1)->count()}}</span>
                            </a>
                            </li>
                            @endforeach
                            <li>
                                <script>
                                    document.write('<a href="' + document.referrer + '">{{ __('page.backlink') }}</a>');

                                </script>
                            </li>
                        </ul>
                    </div>
                </nav> --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                <div class="divider"></div>

                @if (count($companies) > 0)
                    <div class="row">
                        @foreach ($companies as $company)
                            <div class="col-sm-12 col-md-3 portfolio-item">

                                <div class="card">
<<<<<<< HEAD
                                    <a href="{{ route('company', $company->slug) }}">
=======
                                    <a href="{{ route('company.show', $company->slug) }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                        <img class="img-responsive img-fluid rounded" style="width:100%;height:150px;"
                                            src="{{ asset($company->image) }}" alt="{{ $company->title }}">
                                    </a>

                                    <div class="card-body text-center">
                                        <h2 class="card-title">
<<<<<<< HEAD
                                            <a href="{{ route('company', $company->slug) }}">
=======
                                            <a href="{{ route('company.show', $company->slug) }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                                {{ Str::limit($company->title, 20) }}
                                            </a>
                                        </h2>
                                        {{-- <div class="row"> --}}
                                            <h3><b>{{ __('page.category') }}</b>
                                                {{-- <a href="{{ route('companies-category', $company->category->slug) }}">
                                                </a> --}}
                                            {{ $company->category->title }}
                                        </h3>
                                        {{-- </div> --}}
                                        <br>

                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
<<<<<<< HEAD
                    <div class="d-flex justify-content-center mt-3">
                        {{ $companies->links() }}
                    </div>
                @else
                    <div class="d-flex justify-content-center noresults">
=======
                    <div class="col-sm-12 mt-3">
                        {{ $companies->links() }}
                    </div>
                @else
                    <div class="col-sm-12 noresults">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                        <h1><b>{{ __('page.noresults') }}</b></h1>
                    </div>
                @endif

            </div>



        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
    </div>
    {{-- <br> --}}
@endsection
