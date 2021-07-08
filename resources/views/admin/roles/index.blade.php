@extends('admin.layouts.app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Roles
<<<<<<< HEAD
        @hasanyrole('Super-Admin|Admin')
          <small><a class="btn btn-primary" href="{{route('roles.create')}}">Create</a></small>
        @endhasanyrole
=======
        {{-- @can ('create_roles', App\Role::class) --}}
          <small><a class="btn btn-primary" href="{{route('roles.create')}}">Create</a></small>
        {{-- @endcan --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
      </h1>

    <!-- Main content -->
    <section class="content">
      <div class="row">
<<<<<<< HEAD
        <div class="col-sm-12">
=======
        <div class="col-xs-12">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Title</th>
                  {{-- @can ('view_roles','update_roles', App\User::class) --}}
                    <th>Actions</th>
                  {{-- @endcan --}}
                </tr>
                </thead>
                @foreach ($roles as $role)
                  <tbody>
                  <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>
<<<<<<< HEAD
                        {{-- @role('Super-Admin') --}}
=======
                    {{-- @can ('update_users', App\Role::class) --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                        <a class="btn btn-primary" href="{{route('roles.edit', $role->id)}}">Edit</a> -
                      {{-- @endcan
                      @can ('view_users', App\Role::class) --}}
                        <a class="btn btn-primary" href="{{route('roles.show', $role->id)}}">View</a>
<<<<<<< HEAD
                      {{-- @endrole --}}
=======
                      {{-- @endcan --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                    </td>
                  </tr>
                  </tbody>
                @endforeach
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Actions</th>
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
