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
                <div class="divider"></div>

                @if (count($companies) > 0)
                    <div class="row">
                        @foreach ($companies as $company)
                            <div class="col-sm-12 col-md-3 portfolio-item">

                                <div class="card">
                                    <a href="{{ route('company', $company->slug) }}">
                                        <img class="img-responsive img-fluid rounded" style="width:100%;height:150px;"
                                            src="{{ asset($company->image) }}" alt="{{ $company->title }}">
                                    </a>

                                    <div class="card-body text-center">
                                        <h2 class="card-title">
                                            <a href="{{ route('company', $company->slug) }}">
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
                    <div class="d-flex justify-content-center mt-3">
                        {{ $companies->links() }}
                    </div>
                @else
                    <div class="d-flex justify-content-center noresults">
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
