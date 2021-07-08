@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Field
                {{-- <small>it all starts here</small> --}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form role="form" action="{{ route('fields.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box-body row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="name">Field Name</label>
                                <input type="text" class="form-control" id="title" name="name" value="{{ old('name') }}"
                                    placeholder="Field Name" required>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                              <label for="category_id">Κύρια Κατηγορία</label>
                              @if ($errors->has('category_id'))
                                <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                              @endif
                              <div class="input-group">
                                <select id="category_id" value="{{ old('category_id') }}" name="category_id" class="form-control" required>
                                  <option value="">Επιλέξτε</option>
                                  @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                  @endforeach
                                </select>
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-list"></span>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('type_id') ? ' has-error' : '' }}">
                              <label for="type_id">ΥποΚατηγορία</label>
                              @if ($errors->has('type_id'))
                                <strong class="text-danger">{{ $errors->first('type_id') }}</strong>
                              @endif
                              <div class="input-group">
                                <select id="type_id" value="{{ old('type_id') }}" name="type_id" class="form-control" required>
                                  <option value="">Επιλέξτε</option>
                                  @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->title }}</option>
                                  @endforeach
                                </select>
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-list"></span>
                                </span>
                              </div>
                            </div>
                          </div>
                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('subtype_id') ? ' has-error' : '' }}">
                              <label for="subtype_id">Τύπος</label>
                              @if ($errors->has('subtype_id'))
                                <strong class="text-danger">{{ $errors->first('subtype_id') }}</strong>
                              @endif
                              <div class="input-group">
                                <select id="subtype_id" value="{{ old('subtype_id') }}" name="subtype_id" class="form-control" required>
                                  <option value="">Επιλέξτε</option>
                                  @foreach($subtypes as $subtype)
                                    <option value="{{ $subtype->id }}">{{ $subtype->title }}</option>
                                  @endforeach
                                </select>
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-list"></span>
                                </span>
                              </div>
                            </div>
                          </div>

                        <div class="col-sm-12">
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
