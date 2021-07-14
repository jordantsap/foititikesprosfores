@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Type : {{ $type->title }}

            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form method="post" action="{{ route('types.update', $type->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body ">
                        <div class="col-12 {{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="form-group">
                                <label for="title">Type title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder=""
                                    value="{{ $type->title }}">
                            </div>
                        </div>
                        <div class="col-12 {{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image">Image: </label>
                            <img src="{{ asset('images/types/' . $type->image) }}" alt="{{$type->title}}">
                            <br>
                            <label for="preview">Image preview:</label>
                            <img id="image" width="100" >
                            <input type="file"
                            onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                            id="image" name="image" value="{{ old('image') }}" required>

                        </div>

                        <div class="col-xs-4 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label for="category_id">Κατηγορία Καταστήματος</label>
                            @if ($errors->has('category_id'))
                                <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                            @endif
                            <div class="input-group">
                                <select id="category_id" value="{{ $type->category }}" name="category_id" class="form-control">
                                    <option>Επιλέξτε</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if ($type->category->id) {{ 'selected' }}
                  @else None @endif>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-list"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>

                            <a href="javascript:history.back()" class="btn btn-warning">Back</a>
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
