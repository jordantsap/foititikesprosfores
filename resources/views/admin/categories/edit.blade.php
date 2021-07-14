@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Επεξεργασία Κατηγορίας : {{ $category->title }}

            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form method="post" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Τίτλος Κατηγορίας</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder=""
                                    value="{{ $category->title }}">
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="featured" value="1" @if ($category->featured == 1) {{ 'checked' }} @endif>
                                Εμφάνιση στην Αρχική
                            </label>
                        </div>
                        <div class="form-group col-sm-12 mt-2">
                            <label for="image">Image</label><br>
                            <img width="150" height="150" src="{{ asset('images/categories/' . $category->image) }}"
                                alt="{{ $category->title }}">
                            {{-- <br> --}}
                            <img id="image" width="100"/>
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
@endsection
