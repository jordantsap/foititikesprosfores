@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Category : {{$category->name}}

    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <form method="post" action="{{ route('categories.update', $category->id) }}">
        @method('PATCH')
        @csrf
        <div class="box-body">
        <div class="col-lg-offset-3 col-lg-6">
          <div class="form-group">
            <label for="title">category title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="" value="{{$category->title}}">
          </div>
          <div class="col-xs-12">
            @foreach ($types->chunk(4) as $chunk)
              <div class="row">
                  @foreach ($chunk as $type)
                      <div class="col-xs-3">
                        <input type="checkbox" name='type_id[]' value="{{ $type->id }}"
                        @foreach ($category->types as $category_permit)
                          @if ($category_permit->id == $type->id)
                            checked
                          @endif
                        @endforeach
                        >{{ $type->title }}
                      </div>
                  @endforeach
              </div>
            @endforeach
          </div>
        <div class="col-xs-12">
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="javascript:history.back()" class="btn btn-warning">Back</a>
        </div>

        </div>

  </div>

      </form>
      <!-- /.box-body -->
      {{-- <div class="box-footer">
        Footer
      </div> --}}
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
