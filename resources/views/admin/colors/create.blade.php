@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Δημιουργία Χρώματος
                {{-- <small>it all starts here</small> --}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form role="form" action="{{ route('colors.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title">Color title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                                    placeholder="Color Title" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="image">Image</label>
                                <img id="image" width="100%" />
                                <input type="file"
                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}" required>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-xs-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href='{{ route('colors.index') }}' class="btn btn-warning">Back</a>
                            </div>

                        </div>

                    </div>

                </form>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
