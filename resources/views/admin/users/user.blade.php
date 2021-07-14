@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User : {{$user->username}}
      {{-- @can ('update_users', App\User::class) --}}
        <small><a class="btn btn-primary" href="{{route('users.edit', $user->id)}}">Edit</a></small>
      {{-- @endcan --}}
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-body">
        <div class="form-group">
          <label for="username">Name</label>
          <input type="text" value="{{$user->username}}" class="form-control" id="username" placeholder="Enter Name" disabled>
        </div>

        <div class="form-group">
          <label for="email">E-Mail</label>
          <input type="email" value="{{$user->email}}" class="form-control" id="email" disabled>
        </div>

        <div class="form-group">
            <label for="roles">User Role</label>
                <div class="row">
                    @foreach ($user->roles as $role)
                        <div class="col-sm-3">
                            <input type="checkbox" name='role[]' value="{{ $role->id }}"@if ($user->id==$role->id) {{ 'checked' }} @endif>{{ $role->name }}
                        </div>
                    @endforeach
                </div>
        </div>

      </div>

      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
