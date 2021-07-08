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
                <form method="post" action="{{ route('my.company.update', $company->id) }}" enctype="multipart/form-data">
                    {{-- @method('PUT') --}}
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title">Επωνυμία</label>
                                    @if ($errors->has('title'))
                                        <strong class="text-danger">{{ $errors->first('title') }}</strong>
                                    @endif
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="title" value="{{ $company->title }}"
                                            id="title" placeholder="{{ $company->title }}" readonly>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-home"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="user_id">Χρήστης</label>
                                <input class="form-control" value="{{ $company->user->username }}" readonly>
                            </div>

                            <div class="col-sm-4 form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
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
                            @hasanyrole('Super-Admin|Admin|Blogger')
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for="active"> Active
                                        <input type="checkbox" name="active"
                                            value="" {{ $company->active ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="slider">Home Slider
                                        <input type="checkbox" name="slider"
                                            value="" {{ $company->slider ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                            @endhasanyrole

                            <div class="col-sm-4 form-group{{ $errors->has('manager') ? ' has-error' : '' }}">
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
                            <div class="col-sm-3 form-group">
                                <label for="category_id">Κατηγορία Καταστήματος</label>
                                {{-- @if ($errors->has('category_id'))
                                    <strong class="text-danger">{{ $errors->first('category_id') }}</strong>
                                @endif --}}
                                <div class="input-group">
                                    <input class="form-control" value="{{ $company->category->title }}" readonly>
                                    {{-- <select id="category_id" name="category_id"
                                        class="form-control" readonly>
                                        <option value="">Επιλέξτε</option>
                                        @foreach ($categories as $category)

                                        @endforeach
                                    </select> --}}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-list"></span>
                                    </span>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="image">Image</label><br>
                                <img width="150" height="150" src="{{ asset('images/companies/' . $company->image) }}"
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
                                            id="url" name="url" placeholder="Website url">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-globe"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
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

                    </div>
                    <!-- /.box-body -->

                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary col-sm-12">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
