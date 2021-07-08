@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Πεδία
                {{-- @can('create_categories', App\Category::class) --}}
                <small><a class="btn btn-primary" href="{{ route('fields.create') }}">Create</a></small>
                {{-- @endcan --}}
            </h1>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            {{-- <th>id</th> --}}
                                            <th>Όνομα</th>
                                            <th>Κατηγορία</th>
                                            <th>ΥποΚατηγορία</th>
                                            <th>Τύπος</th>
                                            {{-- @can('view_categories', 'update_categories', App\User::class) --}}
                                            {{-- <th>Actions</th> --}}
                                            {{-- @endcan --}}
                                        </tr>
                                    </thead>
                                    @foreach ($fields as $field)
                                        <tbody>
                                            <tr>
                                                {{-- <td>{{ $field->id }}</td> --}}
                                                <td>{{ $field->name }}</td>
                                                <td>{{$field->category?$field->category->title:''}}</td>
                                                <td>{{$field->type?$field->type->title:''}}</td>
                                                <td>{{$field->subtype?$field->subtype->title:''}}</td>
                                                {{-- <td> --}}
                                                    {{-- @can('update_users', App\category::class) --}}
                                                    {{-- <a class="btn btn-primary"
                                                        href="{{ route('fields.edit', $field->id) }}">Edit</a> - --}}
                                                    {{-- @endcan
                      @can('view_users', App\category::class) --}}
                                                    {{-- <a class="btn btn-primary"
                                                        href="{{ route('fields.show', $field->id) }}">View</a> --}}
                                                    {{-- @endcan --}}
                                                {{-- </td> --}}
                                            </tr>
                                        </tbody>
                                    @endforeach
                                    <tfoot>
                                        <tr>
                                            {{-- <th></th> --}}
                                            <th>Όνομα</th>
                                            <th>Κατηγορία</th>
                                            <th>ΥποΚατηγορία</th>
                                            <th>Τύπος</th>
                                            {{-- @can('view_categories', 'update_categories', App\User::class) --}}
                                            {{-- <th>Actions</th> --}}
                                            {{-- @endcan --}}
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
    </div>
@endsection
