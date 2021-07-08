@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Sub Type : {{ $subtype->title }}

            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form method="post" action="{{ route('subtypes.update', $subtype->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="col-12 {{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="form-group">
                                <label for="title">Sub Type title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder=""
                                    value="{{ $subtype->title }}">
                            </div>
                        </div>
                        <div class="form-group col-sm-12 {{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image">Image</label><br>
                            <img width="150" height="150" src="{{ asset('images/subtypes/' . $subtype->image) }}"
                                alt="{{ $subtype->title }}">
                            {{-- <br> --}}
                            <img id="image" width="100"/>
                            <input type="file"
                                onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                id="image" name="image" value="{{ old('image') }}">
                        </div>
                        <div class="col-xs-4 form-group{{ $errors->has('type_id') ? ' has-error' : '' }}">
                            <label for="type_id">Κατηγορία Καταστήματος</label>
                            @if ($errors->has('type_id'))
                                <strong class="text-danger">{{ $errors->first('type_id') }}</strong>
                            @endif
                            <div class="input-group">
                                <select id="type_id" name="type_id" class="form-control">
                                    <option>Επιλέξτε</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" @if ($subtype->type->id) {{ 'selected' }}
                  @else None @endif>{{ $type->title }}</option>
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
                            -
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
