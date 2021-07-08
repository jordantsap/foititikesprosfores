@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Company : {{ $company->title }}
                {{-- @can('update_companies', App\Company::class) --}}
                <small><a class="btn btn-primary" href="{{ route('my.company.edit', $company->id) }}">Edit</a> - <a
                        class="btn btn-warning" href="javascript:history.back()">Go Back</a></small>
                {{-- @endcan --}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-8 form-group">
                            <label for="title">Επωνυμία</label>
                            <input type="text" class="form-control" id="title" placeholder="{{ $company->title }}"
                                value="{{ $company->title }}" readonly>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label for="telephone">Τηλέφωνο</label>
                            <input type="text" class="form-control" id="telephone" placeholder="{{ $company->telephone }}"
                                value="{{ $company->telephone }}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        @hasanyrole('Super-Admin|Admin|Blogger')
                        <div class="col-sm-1">
                            <div class="form-group">
                                <label for="active"> Active
                                    <input type="checkbox" name="active" value="" {{ $company->active ? 'checked' : 'Not selected' }}>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="slider">Add to Home Slider
                                    <input type="checkbox" name="slider"
                                        value="" {{ $company->slider ? 'checked' : 'Not selected' }}>
                                </label>
                            </div>
                        </div>
                        @endhasanyrole

                        <div class="col-sm-3 form-group">
                            <label for="title">Όνομα Υπευθύνου</label>
                            <input type="text" class="form-control" id="manager" placeholder="{{ $company->manager }}"
                                value="{{ $company->manager }}" readonly>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="category_id">Category</label>
                            <div class="form-control" name="category_id" id="category_id" readonly>
                                @if (!empty($company->category))
                                    {{ $company->category->title }}
                                @else Null
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="user_id">Χρήστης</label>
                            <div class="form-control" name="user_id" id="user_id" readonly>
                                @if (!empty($company->user))
                                    {{ $company->user->username }}
                                @else Null
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label for="image">Image</label>
                            <div class="input-group">
                                <img width="200" height="200" src="{{ asset('images/companies/' . $company->image) }}"
                                    alt="{{ $company->title }}" readonly>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="url">Ιστοσελίδα</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{ $company->url }}" id="url"
                                        name="url" placeholder="url" readonly>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-globe"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $company->email }}" class="form-control" id="email"
                                        name="email" placeholder="E-Mail" readonly>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-2">
                            <label for="color">Χρώμα</label>
                            <div class="form-control" name="color" id="color" readonly>
                                @if (!empty($company->color))
                                    {{ $company->color->title }}
                                @else Null
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="telephone">Τηλέφωνο</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $company->telephone }}" class="form-control"
                                        id="telephone" name="telephone" placeholder="E-Mail" readonly>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="afm">ΑΦΜ</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $company->afm }}" class="form-control" id="afm"
                                        name="afm" readonly>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="area">Περιοχή</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $company->area }}" class="form-control" id="area"
                                        name="area" readonly>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" class="textarea" name="description"
                                style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                readonly>{{ $company->description }}</textarea>
                        </div>
                    </div> --}}

                    @if (count($company->products))
                        <div class="row mt-2">
                            <h1 class="text-center">Προϊόντα καταστήματος</h1>
                            <hr>
                            @foreach ($company->products as $product)
                                <div class="col-sm-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <h2>{{ Str::limit($product->title, 20) }}</h2>
                                        </li>
                                        <li class="list-group-item"><img
                                                src="{{ asset('images/products/', $product->image) }}" width="100%"
                                                height="100px" alt="{{ $product->title }}"
                                                title"{{ $product->title }}"></li>
                                        <li class="list-group-item">
                                            <h3>Τιμή: {{ $product->price }}</h3>
                                        </li>
                                        <li class="list-group-item">
                                            <h3>{!! Str::limit($product->description, 20) !!}</h3>
                                        </li>
                                        <li class="list-group-item text-center">
                                            <a href="{{ route('products.show', $product->id) }}"
                                                class="btn btn-default btn-block">Show</a>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center">No published products</p>
                    @endif


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
