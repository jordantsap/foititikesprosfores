@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Type
                {{-- <small>it all starts here</small> --}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form role="form" action="{{ route('types.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body container">
                        <div class="col-sm-12">
                            <div class="col-sm-6 form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title">Type title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                                    placeholder="Type Title" required>
                            </div>
                            <div class="col-sm-6 form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image">Image</label>
                                {{-- <input type="file" id="image" name="image" value="{{old('image')}}" required> --}}
                                <img id="image" width="100" />
                                <input type="file"
                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}" required>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-6">
                                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                    <label for="category_id">Κατηγορία Προϊόντος</label>
                                    @if ($errors->has('category_id'))
                                        <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <select name="category_id" class="form-control"
                                            required>
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


                        {{-- </div>

                        <div class="col-xs-12"> --}}
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href='{{ route('types.index') }}' class="btn btn-warning">Back</a>
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
