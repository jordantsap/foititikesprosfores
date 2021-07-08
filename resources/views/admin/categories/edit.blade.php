@extends('admin.layouts.app')

@section('content')
<<<<<<< HEAD
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Category : {{ $category->title }}

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
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">category title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder=""
                                    value="{{ $category->title }}">
                            </div>
                        </div>
                        <div class="form-group col-sm-12 mt-2">
                            <label for="image">Image</label><br>
                            <img width="150" height="150" src="{{ asset('images/categories/' . $category->image) }}"
                                alt="{{ $category->title }}">
                            {{-- <br> --}}
                            <img id="image" width="100" height="100" />
                            <input type="file"
                                onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                id="image" name="image" value="{{ old('image') }}">
                        </div>
                        <div class="col-xs-12">
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href='javascript:history.back()' class="btn btn-warning">Back</a>
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
=======
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
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href='javascript:history.back()' class="btn btn-warning">Back</a>
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
