@extends('admin.layouts.app')

@section('content')
<<<<<<< HEAD
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Article : {{ $article->title }}
                <a class="btn btn-primary" href="javascript:history.back()">Go Back</a>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <form method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="control-label">{{ __('form.title') }}</label>
                            <input id="title" type="text" class="form-control" name="title" value="{{ $article->title }}"
                                required>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>

                        {{-- <div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }}">
=======
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Post : {{$article->title}}
      <a class="btn btn-primary" href="javascript:history.back()">Go Back</a>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <form method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="box-body">
          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
              <label for="title" class="control-label">{{ __('form.title') }}</label>
                  <input id="title" type="text" class="form-control" name="title" value="{{ $article->title}}" required>

                  @if ($errors->has('title'))
                      <span class="help-block">
                          <strong>{{ $errors->first('title') }}</strong>
                      </span>
                  @endif
          </div>

          {{-- <div class="form-group{{ $errors->has('meta_description') ? ' has-error' : '' }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
              <label for="meta_description" class="control-label">{{ __('Meta Description') }}</label>
                  <input id="meta_description" type="text" class="form-control" name="meta_description" value="{{ $article->meta_description}}" required>

                  @if ($errors->has('meta_description'))
                      <span class="help-block">
                          <strong>{{ $errors->first('meta_description') }}</strong>
                      </span>
                  @endif
          </div> --}}

<<<<<<< HEAD
                        {{-- <div class="form-group{{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
=======
          {{-- <div class="form-group{{ $errors->has('meta_keywords') ? ' has-error' : '' }}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
              <label for="meta_keywords" class="control-label">{{ __('Meta Keywords') }}</label>
                  <input id="meta_keywords" type="text" class="form-control" name="meta_keywords" value="{{ $article->meta_keywords}}" required>

                  @if ($errors->has('meta_keywords'))
                      <span class="help-block">
                          <strong>{{ $errors->first('meta_keywords') }}</strong>
                      </span>
                  @endif
          </div> --}}

<<<<<<< HEAD
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="active" value="1" @if ($article->active == 1) {{ 'checked' }} @endif>
                                Active
                            </label>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="articletype_id">Category</label>
                                <select class="form-control" name="articletype_id" id="articletype_id">
                                    <option value="">Choose</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" @if ($article->type = $type->id) {{ 'selected' }}
                      {{-- @else --}} @endif>{{ $type->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-xs-6">
                                <label for="image">Image</label><br>
                                <img width="150" height="150" src="{{ asset('images/articles/' . $article->image) }}"
                                    alt="{{ $article->title }}">
                                {{-- <br> --}}
                                <img id="image" width="100" height="100" />
                                <input type="file"
                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                    id="image" name="image" value="{{ old('image') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="editor" class="textarea" name="description" placeholder="Place some text here"
                                style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $article->description }}</textarea>
                        </div>

                                            <div class="mt-2 col-12 form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                                    -
                                                    <a class="btn btn-default btn-block" href="javascript:history.back()">Go Back</a>
                                            </div>
                    </div>
                    <!-- /.box-body -->
                </form>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
=======
          <div class="checkbox">
            <label>
              <input type="checkbox" name="active" value="1" @if ($article->active == 1)
                {{'checked'}}
              @endif> Active
            </label>
          </div>

          <div class="row">
            <div class="form-group col-xs-6">
              <label for="article_type_id">Category</label>
              <select class="form-control" name="article_type_id" id="article_type_id">
                <option value="">Choose</option>
                @foreach ($types as $type)
                  <option value="{{$type->id}}" @if( $article->type = $type->id){{'selected'}}
                  {{-- @else --}}
                  @endif>{{$type->title}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group col-xs-6">
              <label for="image">Image</label><br>
              <img width="150" height="150" src="{{asset('images/posts/'.$article->image)}}" alt="{{$article->title}}">
              {{-- <br> --}}
              {{-- <label for="image">Update Image</label>  --}}
              {{-- <input type="file" id="image" name="image" value="{{asset('images/posts/'.$article->image)}}"> --}}
              <img id="image" alt="Image Preview" width="100" height="100" />
            <input type="file"
                onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" id="image" name="image" value="{{old('image')}}" required>

              <p class="help-block">Example block-level help text here.</p>
            </div>
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea id="editor" class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$article->description}}</textarea>
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
