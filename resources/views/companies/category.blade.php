@extends('layouts.public')
@section('title', $companytype->name . ' ' . __('head.companycategory'))
@section('meta_description', __('meta.companycategorydescription') . ' ' . $companytype->name)
@section('meta_keywords', $companytype->name . ' ' . __('meta.companycategorykeywords'))

@section('content')
    <!-- Page Content -->
    <div id="companies">
        <div class="container">
            <div class="row">
                <h1 class="">{{ __('page.companies') }}</h1>
                <nav class="navbar">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#companytype-collapse" aria-expanded="false">
                        <span class="">{{ __('page.categories') }}</span>
                        <span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span>
                    </button>
                    <!-- List group -->
                    <div class="row">
                        <ul class="nav navbar-nav collapse navbar-collapse" id="companytype-collapse">
                            @foreach ($companytypes as $companytype)
                                <li>
                                    <a href="{{ route('companies-category', $companytype->slug) }}"
                                        class="">{{ $companytype->name }}&nbsp<span
                                            class="badge">{{ $companytype->companies->where('active', 1)->count() }}</span>
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
                </nav>
                <div class="divider"></div>

                <div class="row">
                    @if (count($companies) > 0)
                        @foreach ($companies as $company)
                            <div class="col-sm-12 col-md-3 portfolio-item">
                                <div class="card h-100">
                                    <a href="{{ route('company', $company->slug) }}">
                                        <img class="img-responsive img-fluid rounded" style="width:100%;height:150px;"
                                            src="{{ asset('images/companies/' . $company->image) }}"
                                            alt="{{ $company->title }}">
                                    </a>
                                </div>
                                <div class="card-body text-center">
                                    <h2 class="card-title">
                                        <a
                                            href="{{ route('company', $company->slug) }}">{{ str_limit($company->title, 20) }}</a>
                                    </h2>

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h3><b>{{ __('page.category') }}</b> <a
                                                    href="{{ route('companies-category', $company->category->slug) }}">{{ $company->category->name }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <br>
                    @else
                        <div class="col-xs-12 noresults">
                            <h1><b>{{ __('page.noresults') }}</b></h1>
                        </div>
                    @endif

                </div>


                <div class="col-xs-9">
                    {{ $companies->links() }}
                </div>

            </div>
            <!-- /.row -->


        </div>
        <!-- /.container -->
    </div>
    <br>
@endsection
