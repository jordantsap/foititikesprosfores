@extends('admin.layouts.app')

@section('content')
<<<<<<< HEAD
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit User {{ $user->username }}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form action="{{ route('users.update', $user->id) }}" method="POST" role="form">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="box-body">

                        <div class="row">
                            <div class="col-sm-4 form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username">Username</label>
                                <input type="text" name="username" value="{{ $user->username }}" class="form-control" id="username" placeholder="Enter UserName">
                            </div>

                            <div class="col-sm-4 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">E-Mail</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}" id="email" placeholder="Email">
                            </div>


                        </div>
                        @if ($user->hasAnyRole('Super-Admin|Admin|Blogger'))
                        <div class="col-sm-4 form-group">
                            <label for="email_verified_at">Επαλήθευση</label>
                            <select class="form-select" name="email_verified_at">
                                <option value="{{null}}" selected>Επαλήθευση</option>
                                <option value="{{null}}">Όχι</option>
                                <option value="{{ now() }}">Επαλήθευση Email Τώρα</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="roles">User Roles</label>
                            @foreach ($roles->chunk(4) as $chunk)
                                <div class="row">
                                    @foreach ($chunk as $role)
                                        <div class="col-sm-3">
                                            <input type="checkbox" name='role[]' value="{{ $role->id }} @if ($role->id == $user->id) {{ 'checked' }} @endif">{{ $role->name }}
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        @endif

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href='javascript:history.back()' class="btn btn-warning">Back</a>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
=======
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit User {{$user->username}}
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <form action="{{route('users.update', $user->id)}}" method="POST" role="form">
        {{ csrf_field() }}
        @method('PUT')
        <div class="box-body">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="username" placeholder="Enter UserName">
          </div>

          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}" id="email" placeholder="Email">
          </div>

          <div class="form-group">
            <label for="telephone">Τηλέφωνο</label>
            <input type="text" name="telephone" value="{{$user->telephone}}" class="form-control" id="tel" placeholder="Enter UserName">
          </div>

          <div class="form-group">
            <label for="roles">User Roles</label>
            @foreach ($roles->chunk(4) as $chunk)
              <div class="row">
                  @foreach ($chunk as $role)
                      <div class="col-xs-3">
                        <input type="checkbox" name='role[]' value="{{ $role->id }}"
                          @if ($role->id == $user->id)
                              {{'checked'}}
                            @endif
                        >{{ $role->name }}
                      </div>
                  @endforeach
              </div>
            @endforeach
          </div>

          </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href='{{ route('users.index') }}' class="btn btn-warning">Back</a>
        </div>
      </form>
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
@endsection
