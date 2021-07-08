@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Edit Company: <small>{{ $company->title }}</small>
                <a class="btn btn-warning" href="javascript:history.back()">Go Back</a>
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <form method="post" action="{{ route('companies.update', $company->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="box-body">
                        <div class="row">
<<<<<<< HEAD
                            <div class="col-sm-6">
=======
                            <div class="col-xs-8">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title">Επωνυμία</label>
                                    @if ($errors->has('title'))
                                        <strong class="text-danger">{{ $errors->first('title') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="title" value="{{ $company->title }}"
                                            id="title" placeholder="{{ $company->title }}">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-home"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col-sm-2 form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                                <label for="user_id">Χρήστης</label>
                                @if ($errors->has('user_id'))
                                    <strong class="text-danger">{{ $errors->first('user_id') }}</strong>
                                @endif
                                <div class="input-group">
                                    <select id="user_id" value="{{ $company->category }}" name="user_id"
                                        class="form-control">
                                        <option>Επιλέξτε</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" @if ($company->user->id) {{ 'selected' }}
                      @else @endif>{{ $user->username }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
=======
                            <div class="col-xs-4 form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                <label for="telephone">Τηλέφωνο</label>
                                @if ($errors->has('telephone'))
                                    <strong class="text-danger">{{ $errors->first('telephone') }}</strong>
                                @endif
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{ $company->telephone }}"
                                        id="telephone" name="telephone" placeholder="Τηλέφωνο">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }}">
                            <label for="meta_description">Meta Description</label>
                            @if ($errors->has('meta_description'))
                                <strong class="text-danger">{{ $errors->first('meta_description') }}</strong>
                            @endif
                            <div class="input-group">
                                <input type="text" class="form-control" name="meta_description"
                                    value="{{ $company->meta_description }}" id="title"
                                    placeholder="{{ $company->meta_description }}">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-home"></span>
                                </span>
                            </div>
                        </div> --}}

                        {{-- <div class="form-group{{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
                            <label for="title">MetaKeywords</label>
                            @if ($errors->has('title'))
                                <strong class="text-danger">{{ $errors->first('meta_keywords') }}</strong>
                            @endif
                            <div class="input-group">
                                <input type="text" class="form-control" name="meta_keywords"
                                    value="{{ $company->meta_keywords }}" id="title"
                                    placeholder="{{ $company->meta_keywords }}">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-home"></span>
                                </span>
                            </div>
                        </div> --}}

                        <div class="row">
<<<<<<< HEAD
                            @hasanyrole('Super-Admin|Admin|Blogger')
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for="active">Active
                                        <input type="checkbox" name="active"
                                            value="" {{ $company->active ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                            @endhasanyrole

                            <div class="col-sm-3 form-group{{ $errors->has('manager') ? ' has-error' : '' }}">
=======
                            <div class="col-xs-2 form-group">
                                <label for="active"> Active
                                    <input type="checkbox" name="active" value="1" @if ($company->active == 1) {{ 'checked' }} @endif>
                                </label>
                            </div>

                            <div class="col-xs-6 form-group{{ $errors->has('manager') ? ' has-error' : '' }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                <label for="manager">Όνομα Υπευθύνου</label>
                                @if ($errors->has('manager'))
                                    <strong class="text-danger">{{ $errors->first('manager') }}</strong>
                                @endif
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{ $company->manager }}" id="manager"
                                        name="manager" placeholder="Manager Name">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="col-sm-3 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
=======
                            <div class="col-xs-4 form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                <label for="category_id">Κατηγορία Καταστήματος</label>
                                @if ($errors->has('category_id'))
                                    <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                                @endif
                                <div class="input-group">
<<<<<<< HEAD
                                    <select id="category_id" value="{{ $company->category }}" name="category_id"
                                        class="form-control">
                                        <option value="">Επιλέξτε</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if ($company->category->id) {{ 'selected' }}
                      @else # @endif>{{ $category->title }}</option>
=======
                                    <select id="category_id" value="{{ $company->category }}" name="category_id" class="form-control">
                                        <option>Επιλέξτε</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if ($company->category->id) {{ 'selected' }}
                      @else None @endif>{{ $category->title }}</option>
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                        @endforeach
                                    </select>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-list"></span>
                                    </span>
                                </div>
                            </div>
<<<<<<< HEAD

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="afm">ΑΦΜ</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ $company->afm }}" class="form-control" id="afm"
                                            name="afm">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="image">Image</label><br>
                                <img width="150" name="image" height="150" src="{{ asset('images/companies/' . $company->image) }}"
                                    alt="{{ $company->title }}">
                                {{-- <br> --}}
                                <img id="image" width="100%" />
                                <input type="file"
                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}">
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                    <label for="url">Ιστοσελίδα</label>
                                    @if ($errors->has('url'))
                                        <strong class="text-danger">{{ $errors->first('url') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $company->url }}"
                                            id="url" name="url" placeholder="url">
=======
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <img width="100%" height="200" src="{{ asset('images/companies/' . $company->image) }}"
                                alt="{{ $company->title }}">
                        </div>
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image">Image</label>
                            @if ($errors->has('image'))
                                <strong class="text-danger">{{ $errors->first('image') }}</strong>
                            @endif
                            <div class="input-group">
                                <input type="file" value="{{ asset('images/companies/' . $company->image) }}"
                                    name="image">
                                <p class="help-block">Help text here.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                    <label for="website">Ιστοσελίδα</label>
                                    @if ($errors->has('website'))
                                        <strong class="text-danger">{{ $errors->first('website') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $company->website }}"
                                            id="website" name="website" placeholder="Website">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-globe"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

<<<<<<< HEAD
                            <div class="col-sm-4">
=======
                            <div class="col-xs-6">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">E-Mail</label>
                                    @if ($errors->has('email'))
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <input type="text" value="{{ $company->email }}" class="form-control" id="email"
                                            name="email" placeholder="E-Mail">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

<<<<<<< HEAD
                    </div>
                    <!-- /.box-body -->

                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
=======
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="editor" class="textarea" name="description" placeholder="Place some text here"
                                style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $company->description }}</textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="row">
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                        <div class="col-xs-6">
                            <a class="btn btn-default btn-block" href="javascript:history.back()">Go Back</a>
                        </div>
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
