@extends('admin.layouts.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Create New Product
            </h1>
        </section>
        <section class="content">

            <div class="box">
                <form action="{{ route('my.products.store') }}" method="post" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title">Ονομασία:</label>
                                    @if ($errors->has('title'))
                                        <strong class="text-danger">{{ $errors->first('title') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <input type="text" value="{{ old('title') }}" class="form-control" name="title"
                                            placeholder="Ονομασία" required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-home"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('company_id') ? ' has-error' : '' }}">
                                    <label for="company_id">Εταιρεία</label>
                                    {{-- @if ($errors->has('company_id'))
                                        <strong class="text-danger">{{ $errors->first('company_id') }}</strong>
                                    @endif --}}
                                    <div class="input-group">
                                        {{-- <select id="company_id" value="{{ old('company_id') }}" name="company_id"
                                            class="form-control" required>
                                            <option value="">Επιλέξτε</option>
                                            @if ($companies) --}}
                                            {{-- @foreach ($companies as $company) --}}
                                                <input class="form-control" placeholder="{{ Auth::user()->company->title }}" readonly>
                                            {{-- @endforeach
                                            @endif
                                        </select> --}}
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-list"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }}">
          <label for="meta_description">Meta Description:</label>
          @if ($errors->has('meta_description'))
            <strong class="text-danger">{{ $errors->first('meta_description') }}</strong>
          @endif
          <div class="input-group">
            <input type="text" value="{{ old('meta_description') }}" class="form-control" name="meta_description" placeholder="meta_description" required>
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-home"></span>
            </span>
          </div>
        </div>

        <div class="form-group{{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
          <label for="meta_keywords">Meta Keywords:</label>
          @if ($errors->has('meta_keywords'))
            <strong class="text-danger">{{ $errors->first('meta_keywords') }}</strong>
          @endif
          <div class="input-group">
            <input type="text" value="{{ old('meta_keywords') }}" class="form-control" name="meta_keywords" placeholder="meta_keywords" required>
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-home"></span>
            </span>
          </div>
        </div> --}}

                        <div class="row">
                            @hasanyrole('Super-Admin|Admin|Blogger')
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="active"> Active
                                        <input type="checkbox" name="active" value="">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="active"> Add to Home Slider
                                        <input type="checkbox" name="slider" value="">
                                    </label>
                                </div>
                            </div>
                            @endhasanyrole

                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                    <label for="price">Τιμή</label>
                                    @if ($errors->has('price'))
                                        <strong class="text-danger">{{ $errors->first('price') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <input type="text" value="{{ old('price') }}" class="form-control" name="price"
                                            placeholder="Τιμή" required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-euro"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('color_id') ? ' has-error' : '' }}">
                                    <label for="color_id">Χρώμα Προϊόντος</label>
                                    @if ($errors->has('color_id'))
                                        <strong class="text-danger">{{ $errors->first('color_id') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <select name="color_id" class="form-control">
                                            <option value="">Επιλέξτε</option>
                                            @foreach ($colors as $color)
                                                <option value="{{ $color->id }}">{{ $color->title }}</option>
                                            @endforeach
                                        </select>

                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-list"></span>
                                        </span>

                                    </div>
                                </div>
                            </div>

                            {{-- </div> --}}

                            <div class="col-sm-3 form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image">Image</label>
                                {{-- <input type="file" id="image" name="image" value="{{old('image')}}" required> --}}
                                <img id="image" width="100"/>
                                <input type="file"
                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}" required>
                                {{-- <img src="images/{{ Session::get('image') }}"> --}}
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('brand_id') ? ' has-error' : '' }}">
                                    <label for="brand_id">Brand: </label>
                                    <select id="brand_id" value="{{ old('brand_id') }}" name="brand_id"
                                        class="form-control">
                                        <option value="">Επιλέξτε</option>
                                        {{-- @if ($companies) --}}
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                        @endforeach
                                        {{-- @endif --}}
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                    <label for="category_id">Κατηγορία Προϊόντος</label>
                                    @if ($errors->has('category_id'))
                                        <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <select name="category_id" required="required" class="form-control" required>
                                            <option value="">Επιλέξτε</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>

                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-list"></span>
                                        </span>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <!--ROW END--->
                        <div class="col-12">
                            <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                                <label for="link">Σύνδεσμος:</label>
                                @if ($errors->has('link'))
                                    <strong class="text-danger">{{ $errors->first('link') }}</strong>
                                @endif
                                <div class="input-group">
                                    <input type="text" value="{{ old('link') }}" class="form-control" name="link"
                                        placeholder="link" required>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-home"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description">Περιγραφή</label>
                                    @if ($errors->has('description'))
                                        <strong class="text-danger">{{ $errors->first('description') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <textarea name="description" id="description" class="form-control"
                                            rows="5">{{ old('description') }}</textarea>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-info-sign"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        -
                        <a class="btn btn-warning" href="javascript:history.back()">Go Back</a>
                </form>
            </div>
    </div>
    <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
