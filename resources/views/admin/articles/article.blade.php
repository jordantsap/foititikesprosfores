@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Article : {{$article->title}}
      {{-- @can ('update_posts', App\Post::class) --}}
        <small><a class="btn btn-primary" href="{{route('articles.edit', $article->id)}}">Edit</a> - <a class="btn btn-warning" href="javascript:history.back()">Go Back</a></small>
      {{-- @endcan --}}
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-body">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{$article->title}}" class="form-control" id="title" placeholder="Enter Title" disabled>
          </div>
<<<<<<< HEAD
          {{-- <div class="form-group">
=======
          <div class="form-group">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            <label for="title">Meta Description</label>
            <input type="text" value="{{$article->meta_description}}" class="form-control" id="meta_description" disabled>
          </div>
          <div class="form-group">
            <label for="title">Meta Keywords</label>
            <input type="text" value="{{$article->meta_keywords}}" class="form-control" id="meta_keywords" disabled>
<<<<<<< HEAD
          </div> --}}
=======
          </div>
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
          <div class="checkbox">
            <label>
              <input type="checkbox" name="active" value="{{$article->active?1 == 'checked':''}}" @if ($article->active == 1)
                {{'checked'}}
              @endif> Active
            </label>
          </div>
          <div class="row">
            <div class="form-group col-xs-6">
              <label for="category">Category</label>
<<<<<<< HEAD
              <div class="form-control" disabled>
                  {{ $article->articletype ? $article->articletype->title : 'none' }}
                {{-- @if( ! empty($article->articletype)){{ $article->articletype->title }}
                    @else Null
                @endif --}}
=======
              <div class="form-control" name="category" id="category" disabled>
                @if( ! empty($article->type)){{ $article->type->title }}
                    @else Null
                @endif
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
              </div>
            </div>
            <div class="form-group col-xs-6">
              <label for="image">Image</label>
              <br>
<<<<<<< HEAD
              <img width="150" height="150" src="{{asset('images/articles/'.$article->image)}}" alt="{{$article->title}}">
=======
              <img width="150" height="150" src="{{asset('images/posts/'.$article->image)}}" alt="{{$article->title}}">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            </div>
          </div>

          <div class="form-group">
            <label for="description">Description</label>
<<<<<<< HEAD
            <textarea id="editor" class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" readonly>{{$article->description}}</textarea>
=======
            <textarea id="editor" class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height:150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled>{{$article->description}}</textarea>
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
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
