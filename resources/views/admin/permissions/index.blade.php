@extends('admin.layouts.app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Permissions
        {{-- @can ('create_permissions', App\Permission::class) --}}
          <small><a class="btn btn-primary" href="{{route('permissions.create')}}">New Permission</a></small>
        {{-- @endcan --}}
      </h1>
    </section>

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
              @foreach ($permissions->chunk(4) as $chunk)
                <div class="row">
                  @foreach ($chunk as $permission)
<<<<<<< HEAD
                    <div class="col-sm-3">
=======
                    <div class="col-xs-3">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                      <ul class=""list-group>
                        <li class="list-group-item" ><b>{{$permission->name }}</b></li>
                      </ul>
                    </div>
                  @endforeach
                </div>
              @endforeach
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
