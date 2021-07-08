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
          <input type="text" value="{{$user->name}}" class="form-control" id="username" placeholder="Enter Name" disabled>
        </div>

        <div class="form-group">
          <label for="email">E-Mail</label>
          <input type="email" value="{{$user->email}}" class="form-control" id="email" disabled>
        </div>

<<<<<<< HEAD
        {{-- @if ($user->hasRole('Partner'))
        <div class="form-group">
          <label for="roles">User Roles</label>
          <hr>
              {{$user->role->name ?? null}}
          @else
            No roles for this user
          @endif
        </div> --}}
=======
        <div class="form-group">
          <label for="tel">Τηλέφωνο</label>
          <input type="text" value="{{$user->telephone}}" class="form-control" id="telephone" disabled>
        </div>

        <div class="form-group">
          <label for="roles">User Roles</label>
          @foreach ($user->roles->chunk(4) as $chunk)
            <div class="row">
              @foreach ($chunk as $role)
                <div class="col-xs-3">
                  {{ $role->name }}
                </div>
              @endforeach
            </div>
          @endforeach
        </div>
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

      </div>

      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
