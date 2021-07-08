@extends('admin.layouts.app')

@section('content')
<<<<<<< HEAD
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create New User
                {{-- <small>it all starts here</small> --}}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form action="{{ route('users.store') }}" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="username">UserName</label>
                                    <input type="text" name="username" value="{{ old('username') }}" class="form-control"
                                        id="username" placeholder="Enter UserName">
                                </div>

                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">E-Mail</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                                        value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group {{ $errors->has('email_verified_at') ? ' has-error' : '' }}">
                                    <label for="email_verified_at">Επαλήθευση</label>
                                    <select class="form-select" name="email_verified_at" required>
                                        <option value="{{null}}" selected>Επαλήθευση</option>
                                        <option value="{{null}}">Όχι</option>
                                        <option value="{{ now() }}">Επαλήθευση Τώρα</option>
                                    </select>
                                </div>
                                <div class="col-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="form-label">Κωδικός εισόδου</label>
                                    @if ($errors->has('password'))
                                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                    @endif
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="col-12">
                                    <label for="password-confirm" class="form-label">{{ __('Επιβεβαίωση κωδικού') }}</label>

                                    <div class="">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group {{ $errors->has('tel') ? ' has-error' : '' }}">
                                    <label for="tel">Τηλέφωνο</label>
                                    <input type="text" name="tel" class="form-control" id="tel"
                                        placeholder="π.χ. 2510316362" value="{{ old('tel') }}" required>
                                </div>
                                <div class="form-group {{ $errors->has('mobile') ? ' has-error' : '' }}">
                                    <label for="mobile">Κινητό τηλ</label>
                                    <input type="text" name="mobile" class="form-control" id="tel" placeholder="Κινητό τηλ"
                                        value="{{ old('mobile') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="active">Activate</label>
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            <input type="checkbox" name="active" value="1" class="minimal"> Active
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="roles">Assign Role</label>
                                    <div class="col-sm-12">
                                        @foreach ($roles as $role)
                                            <div class="checkbox">
                                                <input type="checkbox" name="role[]" value="{{ $role->id }}" @if (old('role')) {{ 'checked' }} @endif>
                                                {{ $role->name }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
=======
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Create New User
      {{-- <small>it all starts here</small> --}}
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <form action="{{route('users.store')}}" method="POST" role="form">
        {{ csrf_field() }}
        <div class="box-body">
          <div class="row">
            <div class="col-xs-6">

              <div class="form-group">
                <label for="fullname">FullName</label>
                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="FullName" value="{{old('fullname')}}" required>
              </div>
              <div class="form-group">
                <label for="username">UserName</label>
                <input type="text" name="username" value="{{old('username')}}" class="form-control" id="username" placeholder="Enter UserName">
              </div>

              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}" required>
              </div>
            </div>
          <div class="col-xs-6">
            <div class="form-group">
              <label for="tel">Τηλέφωνο</label>
              <input type="text" name="tel" class="form-control" id="tel" placeholder="π.χ. 2510316362" value="{{old('tel')}}" required>
            </div>
            <div class="form-group">
              <label for="mobile">Κινητό τηλ</label>
              <input type="text" name="mobile" class="form-control" id="tel" placeholder="Κινητό τηλ" value="{{old('mobile')}}" required>
            </div>

            <div class="form-group">
              <label for="active">Activate</label>
              <div class="col-xs-12">
                <div class="checkbox">
                  <input type="checkbox" name="active" value="1" class="minimal"> Active
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="roles">Assign Role</label>
              <div class="col-xs-12">
              @foreach ($roles as $role)
                    <div class="checkbox">
                      <input type="checkbox" name="role[]" value="{{ $role->id }}" @if (old('role'))
                        {{'checked'}}
                      @endif>
                      {{ $role->name }}
                    </div>
              @endforeach
            </div>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
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
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
@endsection
