@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Μάρκα : {{$brand->title}}
      {{-- @can ('update_posts', App\Post::class) --}}
        <small><a class="btn btn-primary" href="{{route('brands.edit', $brand->id)}}">Edit</a> - <a class="btn btn-warning" href="javascript:history.back()">Go Back</a></small>
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
            <input type="text" value="{{$brand->title}}" class="form-control" id="title" placeholder="Enter Title" disabled>
          </div>
          {{-- <div class="form-group">
            <label for="title">Meta Description</label>
            <input type="text" value="{{$brand->meta_description}}" class="form-control" id="meta_description" disabled>
          </div>
          <div class="form-group">
            <label for="title">Meta Keywords</label>
            <input type="text" value="{{$brand->meta_keywords}}" class="form-control" id="meta_keywords" disabled>
          </div> --}}
          <div class="checkbox">
            <label>
              <input type="checkbox" name="active" value="{{$brand->active?1 == 'checked':''}}" @if ($brand->active == 1)
                {{'checked'}}
              @endif> Active
            </label>
          </div>
          <div class="row">
            <div class="form-group col-xs-6">
              <label for="image">Image</label>
              <br>
              <img width="150" height="150" src="{{asset('images/articles/'.$brand->image)}}" alt="{{$brand->title}}">
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
