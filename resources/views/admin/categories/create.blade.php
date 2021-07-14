@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create category
                {{-- <small>it all starts here</small> --}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form role="form" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title">Τίτλος Κατηγορίας</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                                    placeholder="Category Title" required>
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="featured" value="">
                                    Εμφάνιση στην Αρχική
                                  </label>
                                </div>
                              </div>

                            <div class="form-group col-xs-6 {{ $errors->has('image') ? ' has-error' : '' }}">
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
                            {{-- <div class="col-sm-6 form-group">
                                {{-- @foreach ($types->chunk(4) as $chunk)
                                    <div class="row">
                                        @foreach ($chunk as $type)
                                            <div class="col-xs-3">
                                                <input type="checkbox" name="type"
                                                    value="{{ $type->id }}">{{ $type->title }}
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                                <select id="type_id" value="{{ old('type_id') }}" name="type_id[]" class="form-control">
                                <option value="{{ old('type_id') }}">Επιλέξτε</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }} {{ old('type_id') }}"
                                        {{ old('type_id') ? 'selected' : '' }}>{{ $type->title }}</option>
                                @endforeach
                            </select>
                            </div> --}}
                            <div class="col-xs-12">
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href='{{ route('categories.index') }}' class="btn btn-warning">Back</a>
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
