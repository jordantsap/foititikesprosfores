@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Δημιουργία Μάρκας
                {{-- <small>it all starts here</small> --}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form role="form" action="{{ route('brands.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body container">
                        <div class="col-sm-12">
                            <div class="col-sm-6 form-group">
                                <label for="title">Τίτλος</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                                    placeholder="Τίτλος Μάρκας" required>
                            </div>
                            <div class="col-sm-6 form-group">

                            </div>
                            {{-- <div class="form-group col-sm-6">
                                <label for="image">Image</label>
                                <input type="file" id="image" name="image" value="{{old('image')}}" required>
                                <img id="image" width="100" />
                                <input type="file"
                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}" required>

                                <p class="help-block">Example block-level help text here.</p>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div> --}}
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href='javascript:history.back()' class="btn btn-warning">Back</a>
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
