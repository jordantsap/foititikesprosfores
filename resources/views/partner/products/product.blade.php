@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Product : {{ $product->title }}
                {{-- @can('update_products', App\Models\Product::class) --}}
                    <small><a class="btn btn-primary" href="{{ route('my.products.edit', $product->id) }}">Edit</a>
                {{-- @endcan --}}
                - <a class="btn btn-warning" href="javascript:history.back()">Go Back</a></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="title">Ονομασία:</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $product->title }}" class="form-control" name="title"
                                        placeholder="{{ $product->title }}" readonly>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-home"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="category_id">Category</label>
                            <div class="form-control" name="category_id" id="category_id" readonly>
                                @if (!empty($product->category))
                                    {{ $product->category->title }}
                                @else Null
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @hasanyrole('Super-Admin|Admin|Blogger')
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="active"> Active
                                    <input type="checkbox" name="active" value="" {{ $product->active = 1 ? 'checked' : '' }}>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="active"> Add to Home Slider
                                    <input type="checkbox" name="slider" value="" {{ $product->slider = 1 ? 'checked' : '' }}>
                                </label>
                            </div>
                        </div>
                        @endhasanyrole

                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price">Τιμή</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $product->price }}" class="form-control" name="price"
                                        placeholder="Τιμή" readonly>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-euro"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
                                <label for="company_id">Εταιρεία</label>
                                @if ($errors->has('company_id'))
                                    <strong class="text-danger">{{ $errors->first('company_id') }}</strong>
                                @endif
                                <div class="input-group">
                                    <div class="form-control" name="company_id" id="company_id" readonly>
                                        @if (!empty($product->company))
                                            {{ $product->company->title }}
                                        @else None
                                        @endif
                                    </div>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-list"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3 form-group">
                            <label for="image">Image</label>
                            <div class="input-group">
                                <img width="100%" src="{{ asset('images/products/' . $product->image) }}"
                                    alt="{{ $product->title }}">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="brand">Brand: </label>
                            <input type="text" value="{{ $product->brand ? $product->brand->title : 'None' }}"
                                class="form-control" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label for="color">Χρώμα</label>
                            <div class="input-group">
                                <input type="text" value="{{ $product->color->title }}" class="form-control" readonly>
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
                                readonly>{{ $product->description }}</textarea>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-info-sign"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                </form>
            </div>
            <!-- /.box-body -->
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
