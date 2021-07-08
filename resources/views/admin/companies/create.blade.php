@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                New Company
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form method="post" action="{{ route('companies.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
<<<<<<< HEAD
                            <div class="col-sm-8 form-group">
                                <label for="title">Title</label>
                                <input type="text" value="{{ old('title') }}" name="title" class="form-control" id="title"
                                    placeholder="Enter Title" required>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="telephone">Τηλέφωνο</label>
                                <input type="text" value="{{ old('title') }}" name="telephone" class="form-control"
                                    id="telephone" placeholder="Τηλέφωνο Επιχείρησης" required>
=======
                            <div class="col-xs-8 form-group">
                                <label for="title">Title</label>
                                <input type="text" value="{{ old('title') }}" name="title" class="form-control" id="title"
                                    placeholder="Enter Title">
                            </div>
                            <div class="col-xs-4 form-group">
                                <label for="telephone">Τηλέφωνο</label>
                                <input type="text" value="{{ old('title') }}" name="telephone" class="form-control"
                                    id="telephone" placeholder="Τηλέφωνο Επιχείρησης">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                            </div>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }}">
                            <label for="meta_description">Meta Description</label>
                            @if ($errors->has('meta_description'))
                                <strong class="text-danger">{{ $errors->first('meta_description') }}</strong>
                            @endif
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ old('meta_description') }}" id="manager"
                                    name="meta_description" placeholder="Meta Description">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
                            <label for="meta_keywords">Meta Keywords</label>
                            @if ($errors->has('meta_keywords'))
                                <strong class="text-danger">{{ $errors->first('meta_keywords') }}</strong>
                            @endif
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ old('meta_keywords') }}"
                                    id="meta_keywords" name="meta_keywords" placeholder="Meta keywords comma separated">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                            </div>
                        </div> --}}

                        <div class="row">
<<<<<<< HEAD
                            @hasanyrole('Super-Admin|Admin|Blogger')
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="active"> Active
                                        <input type="checkbox" name="active" value="1">
                                    </label>
                                </div>
                            </div>
                            @endhasanyrole
                            <div class="col-sm-3 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
=======
                            <div class="col-xs-2 form-group">
                                <label for="active"> Active
                                    &nbsp<input type="checkbox" name="active" value="1" class="minimal">
                                </label>
                            </div>
                            <div class="col-xs-3 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                <label for="category_id">Κατηγορία Καταστήματος</label>
                                @if ($errors->has('category_id'))
                                    <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                                @endif
                                <div class="">
<<<<<<< HEAD
                                    <select id="category_id" value="{{ old('category_id') }}" name="category_id" class="form-control" required>
=======
                                    <select id="category_id" value="{{ old('category_id') }}" name="category_id" class="form-control">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                        <option value="{{ old('category_id') }}">Επιλέξτε</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }} {{ old('category_id') }}"
                                                {{ old('category_id') ? 'selected' : '' }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col-sm-2 form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                                <label for="user_id">Χρήστης</label>
                                @if ($errors->has('user_id'))
                                    <strong class="text-danger">{{ $errors->first('user_id') }}</strong>
                                @endif
                                <div class="">
                                    <select id="user_id" value="{{ old('user_id') }}" name="user_id" class="form-control">
                                        <option value="{{ old('user_id') }}">Επιλέξτε</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }} {{ old('user_id') }}"
                                                {{ old('user_id') ? 'selected' : '' }}>{{ $user->username }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 form-group{{ $errors->has('manager') ? ' has-error' : '' }}">
=======
                            <div class="col-xs-7 form-group{{ $errors->has('manager') ? ' has-error' : '' }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                <label for="manager">Όνομα Υπευθύνου</label>
                                @if ($errors->has('manager'))
                                    <strong class="text-danger">{{ $errors->first('manager') }}</strong>
                                @endif
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{ old('manager') }}" id="manager"
<<<<<<< HEAD
                                        name="manager" placeholder="Manager Name" required>
=======
                                        name="manager" placeholder="Manager Name">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                </div>
                            </div>
<<<<<<< HEAD

                        </div>

                        <div class="row">
                            <div class="col-sm-4 form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image">Image</label>
                                <img id="image" width="100%">
                                <input type="file"
                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}" required>
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="afm">ΑΦΜ</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('afm') }}" class="form-control" id="afm"
                                            name="afm" required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="area">Περιοχή</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('area') }}" class="form-control" id="afm"
                                            name="area" required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                    </div>
                                </div>
=======
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image">Image</label>
                            @if ($errors->has('image'))
                                <strong class="text-danger">{{ $errors->first('image') }}</strong>
                            @endif
                            <div class="input-group">
                                @if (old('image'))
                                    <img src="{{ old('image') }}" alt="">
                                @endif
                                <input type="file" name="image" value="{{ old('image') }}">
                                <p class="help-block">Help text here.</p>
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                            </div>
                        </div>

                        <div class="row">
<<<<<<< HEAD
                            <div class="col-sm-6 form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                <label for="url">Ιστοσελίδα</label>
                                @if ($errors->has('url'))
                                    <strong class="text-danger">{{ $errors->first('url') }}</strong>
                                @endif
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{ old('url') }}" id="url"
                                        name="url" placeholder="url">
=======
                            <div class="col-xs-6 form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                <label for="website">Ιστοσελίδα</label>
                                @if ($errors->has('website'))
                                    <strong class="text-danger">{{ $errors->first('website') }}</strong>
                                @endif
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{ old('website') }}" id="website"
                                        name="website" placeholder="Website">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-globe"></span>
                                    </span>
                                </div>
                            </div>

<<<<<<< HEAD
                            <div class="col-sm-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
=======
                            <div class="col-xs-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                <label for="email">E-Mail</label>
                                @if ($errors->has('email'))
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                @endif
                                <div class="input-group">
                                    <input type="text" value="{{ old('email') }}" class="form-control" id="email"
<<<<<<< HEAD
                                        name="email" placeholder="E-Mail" required>
=======
                                        name="email" placeholder="E-Mail">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

<<<<<<< HEAD
=======
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="textarea" name="description" placeholder="Place some text here"
                                style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('description') }}</textarea>
                        </div>
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
<<<<<<< HEAD
                        -
                        <a href="javascript:history.back()" class="btn btn-warning">Back</a>
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
