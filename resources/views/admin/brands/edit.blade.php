@extends('admin.layouts.app')

<<<<<<< HEAD

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Brand : {{ $brand->title }}
                <a class="btn btn-primary" href="javascript:history.back()">Go Back</a>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form method="post" action="{{ route('brands.update', $brand->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="control-label">{{ __('Τίτλος Άρθρου') }}</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ $brand->title }}"
                                required>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="active" value="" @if ($brand->active == 1) {{ 'checked' }} @endif>
                                Active
                            </label>
                        </div>

                        <div class="row">


                        </div>
                        <div class="form-group col-sm-6">
                            <label for="image">Image</label>
                            <img src="{{ asset('images/brands/' . $brand->image) }}" alt="{{$brand->title}}">
                            <br>
                            <img id="image" width="100%"/>
                            <input type="file"
                                onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                id="image" name="image" value="{{ old('image') }}">

                            <p class="help-block">Example block-level help text here.</p>
                            @if ($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="mt-2 col-12 form-group">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            -
                            <a class="btn btn-default btn-block" href="javascript:history.back()">Go Back</a>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </form>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
=======
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Category : {{$category->name}}

    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <form method="post" action="{{ route('categories.update', $category->id) }}">
        @method('PATCH')
        @csrf
        <div class="box-body">
        <div class="col-lg-offset-3 col-lg-6">
          <div class="form-group">
            <label for="title">category title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{$category->title}}">
          </div>
          <div class="col-xs-12">
            @foreach ($types->chunk(4) as $chunk)
              <div class="row">
                  @foreach ($chunk as $type)
                      <div class="col-xs-3">
                        <input type="checkbox" name='type_id[]' value="{{ $type->id }}"
                        @foreach ($category->types as $category_permit)
                          @if ($category_permit->id == $type->id)
                            checked
                          @endif
                        @endforeach
                        >{{ $type->title }}
                      </div>
                  @endforeach
              </div>
            @endforeach
          </div>
        <div class="col-xs-12">
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="javascript:history.back()" class="btn btn-warning">Back</a>
        </div>

        </div>

  </div>

      </form>
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
