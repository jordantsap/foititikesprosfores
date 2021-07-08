@extends('admin.layouts.app')

@section('content')
<<<<<<< HEAD
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -content-header content-->
        <section class="">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    {{-- <h1 class="box-title"><b>Καλώς ήρθες</b></h1> --}}
                    {{-- float right section --}}
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="">
                    @role('Partner')
                    @if (Auth::user()->company)
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="title">Επωνυμία</label>
                                    <input type="text" class="form-control" id="title"
                                        placeholder="{{ Auth::user()->company->title }}"
                                        value="{{ Auth::user()->company->title }}" disabled>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="category_id">Category</label>
                                    <div class="form-control" name="category_id" id="category_id">
                                        @if (!empty(Auth::user()->company->category))
                                            {{ Auth::user()->company->category->title }}
                                        @else Null
                                        @endif
                                    </div>
                                </div>
                                <div class="form-control col-sm-2 text-center">
                                    <a class="btn btn-primary"
                                        href="{{ route('my.company.edit', Auth::user()->company->id) }}">Edit</a> -
                                    {{-- @endcan
                                                @can('view_companies', App\Company::class) --}}
                                    <a class="btn btn-primary"
                                        href="{{ route('my.company.show', Auth::user()->company->id) }}">View</a>
                                </div>

                            </div>
                            <div class="row text-center">
                                <button class="btn btn-default">
                                    <a class="card-text" href="{{ route('my.products.create') }}">Δημιουργήστε  το προϊόν σας</a>
                                </button>
                            </div>
                        </div>
                    @else
                        {{-- no company for authenticated user --}}
                        <div class="d-flex justify-content-center justify-content-middle card-group">
                            {{-- <div class="card">
                                <div class="card-body">

                                    <a class="card-text" href="{{ route('companies.create') }}">Δημιουργήστε το κατάστημά
                                        σας</a>
                                </div>
                            </div> --}}
                    @endif
                    @if (Auth::user()->has('company.products'))
                        <div class="container-fluid">
                            <h1 class="text-center">Τα προϊόντα σας</h1>
                            <div class="row">
                                @foreach (Auth::user()->company->products as $product)

                                    <div class="col-sm-12 col-md-3 col-lg-3 text-center pb-2">
                                        <a href="{{ route('product', $product->slug) }}">
                                            <img class="img-responsive rounded" style="width:100%;height:150px;"
                                                src="{{ asset('images/products/'.$product->image) }}" alt="{{ $product->title }}">
                                            <h2>{{ Str::limit($product->title, 20) }}</h2>
                                        </a>
                                        <h3><b>{{ __('Κατηγορία') }}</b> <br>
                                            <a href="{{ route('category', $product->category->slug) }}">
                                                {{ $product->category->title }}</a>
                                        </h3>
                                        <h4><b>{{ __('Εταιρεία') }}</b>
                                            <a
                                                href="{{ $product->company ? route('my.company.show', $product->company->slug) : 'none' }}"><br>{{ Str::limit($product->company ? $product->company->title : '#', 12) }}</a>
                                        </h4>
                                        <h4 class="col-sm-12 text-center"><b>{{ __('Τιμή') }}</b> <br>€
                                            {{ $product->price }}
                                        </h4>
                                        <h5> <a href="{{ $product->link }}" title="{{ $product->link }}"
                                                target="_blank">Go to Product
                                            </a> </h5>
                                        <a class="btn btn-primary"
                                            href="{{ route('my.products.edit', $product->id) }}">Edit</a> -

                                        <a class="btn btn-primary"
                                            href="{{ route('my.products.show', $product->id) }}">View</a>
                                        <br>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="d-flex justify-content-center justify-content-middle card">
                            <div class="card-body">

                                <a class="card-text" href="{{ route('my.products.create') }}">Δημιουργήστε  το προϊόν σας</a>
                            </div>
                        </div>

                    @endif
                </div>
                @endrole

            </div>
            <!-- /.box-body -->
            <!-- /.box-footer-->
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
=======
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>it all starts here</small>
    </h1>
    {{-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol> --}}
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h1 class="box-title"><b>Needs</b></h1>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        use purifyer into controllers
        <br>
        orderBy likes

      </div>
      <!-- /.box-body -->
      {{-- <div class="box-footer">
        Footer
      </div> --}}
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
@endsection
