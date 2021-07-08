@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Color : {{ $color->title }}

            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form method="post" action="{{ route('colors.update', $color->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title">Τίτλος Χρώματος</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder=""
                                    value="{{ $color->title }}">
                            </div>

                        </div>
                        <div class="form-group col-xs-6">
                            <label for="image">Image</label><br>
                            <img width="150" height="150" src="{{ asset('images/colors/' . $color->image) }}"
                                alt="{{ $color->title }}">
                            {{-- <br> --}}
                            <img id="image" width="100"/>
                            <input type="file"
                                onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                id="image" name="image" value="{{ old('image') }}" required>
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
@endsection
