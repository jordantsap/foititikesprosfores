@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Product :
                <small>{{ $product->title }}</small>
                <a class="btn btn-warning" href="javascript:history.back()">Go Back</a>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form action="{{ route('my.products.update', $product->id) }}" method="post" role="form"
                    enctype="multipart/form-data">
                    {{-- <input type="hidden" name="_method" value="PUT"> --}}
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="control-label">{{ __('Τίτλος') }}</label>
                                    <input id="title" type="text" class="form-control" name="title"
                                        value="{{ $product->title }}">

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            {{-- </div> --}}

                            {{-- <div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }}">
            <label for="meta_description" class="control-label">{{ __('Meta Description') }}</label>
                <input id="meta_description" type="text" class="form-control" name="meta_description" value="{{ $product->meta_description}}" >

                @if ($errors->has('meta_description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('meta_description') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group{{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
            <label for="meta_keywords" class="control-label">{{ __('Meta Keywords') }}</label>
                <input id="meta_keywords" type="text" class="form-control" name="meta_keywords" value="{{ $product->meta_keywords}}" >

                @if ($errors->has('meta_keywords'))
                    <span class="help-block">
                        <strong>{{ $errors->first('meta_keywords') }}</strong>
                    </span>
                @endif
        </div> --}}

                            {{-- <div class="row"> --}}
                            @hasanyrole('Super-Admin|Admin|Blogger')
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="active"> Active
                                        <input type="checkbox" name="active" value=""
                                            {{ $product->active = 1 ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="active"> Add to Home Slider
                                        <input type="checkbox" name="slider" value=""
                                            {{ $product->slider = 1 ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                            @endhasanyrole

                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                    <label for="price">Τιμή</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ $product->price }}" class="form-control"
                                            name="price" placeholder="Τιμή">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-euro"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
                                    <label for="company_id">Εταιρεία</label>
                                    @if ($errors->has('company_id'))
                                        <strong class="text-danger">{{ $errors->first('company_id') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <select id="company_id" value="{{ $product->company_id }}" name="company_id"
                                            class="form-control" readonly>
                                            @if (!empty($product->company))
                                                <option value="{{ $product->company->id }}">
                                                    {{ $product->company->title }}
                                                </option>

                                            @else
                                                <option value="">Επιλέξτε</option>
                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}"
                                                        {{ $product->company->id == $company->id ? 'selected' : '' }}>
                                                        {{ $product->company->title }}</option>
                                                @endforeach

                                            @endif
                                        </select>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-list"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                    <label for="category_id">Κατηγορία Προϊόντος</label>
                                    @if ($errors->has('category_id'))
                                        <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <select value="{{ old('category_id') }}" name="category_id"
                                            class="form-control" readonly>
                                            <option>Επιλέξτε</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @if ($product->category->id == $category->id) {{ 'selected' }} @endif>
                                                    {{ $product->category->title }}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-list"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-3 {{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image">Image</label><br>
                                <img width="100%" src="{{ asset('images/products/' . $product->image) }}"
                                    alt="{{ $product->title }}">
                                {{-- <br> --}}
                                <img id="image" width="100" />
                                <input type="file"
                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}">
                            </div>
                            <div class="col-sm-3">
                                <label for="brand_id">Brand: </label>
                                <select value="{{ old('brand_id') }}" name="brand_id" class="form-control">
                                    <option value="">Επιλέξτε</option>
                                    @if ($brands)
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"
                                            {{ $product->brand && $brand->id == $product->brand->id ? 'selected' : '' }}>
                                            {{ $brand->title }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="color_id">Χρώμα Προϊόντος</label>
                                    @if ($errors->has('color_id'))
                                        <strong class="text-danger">{{ $errors->first('color_id') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <select name="color_id" class="form-control">
                                            <option>Επιλέξτε</option>
                                            @foreach ($colors as $color)
                                                <option value="{{ $color->id }}"
                                                    {{ $color->id == $product->color->id ? 'selected' : '' }}>
                                                    {{ $color->title }}</option>
                                            @endforeach
                                        </select>

                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-list"></span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description">Περιγραφή</label>
                                    <div class="input-group">
                                        <textarea name="description" id="description" class="form-control" rows="5"
                                            value="{{ $product->description }}">{{ $product->description }}</textarea>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-info-sign"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn btn-default btn-block" href="javascript:history.back()">Go Back</a>
                            </div>
                        </div>
                </form>
            </div>
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
