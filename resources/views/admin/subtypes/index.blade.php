@extends('admin.layouts.app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sub Types
        {{-- @can ('create_typess', App\types::class) --}}
          <small><a class="btn btn-primary" href="{{route('subtypes.create')}}">Add New</a></small>
        {{-- @endcan --}}
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Active</th>
                  <th>Title</th>
                  <th>Type</th>
                  <th>Image</th>
                  @hasanyrole('Super-Admin|Admin|Blogger')
                    <th>Actions</th>
                  @endhasanyrole
                </tr>
                </thead>
                @foreach ($subtypes as $subtype)
                  <tbody>
                  <tr>
                    <td>{{$subtype->id}}</td>
                    <td>{{$subtype->active?"yes":'no'}}</td>
                    <td>{{$subtype->title}}</td>
                    <td>{{$subtype->type->title}}</td>
                    <td><img width="150px" height="150px" src="{{$subtype->image ? asset('images/subtypes/', $subtype->image) : asset('images/noimage.jpg')}}" alt="{{$subtype->title}}"></td>
                    @hasanyrole('Super-Admin|Admin|Blogger')
                    <td>
                      <a class="btn btn-primary" href="{{route('subtypes.edit', $subtype->id)}}">Edit</a> -
                    {{-- @endcan
                    @can ('view_types', App\type::class) --}}
                      <a class="btn btn-primary" href="{{route('subtypes.show', $subtype->id)}}">View</a>
                      <form action="{{ route('subtypes.destroy', $subtype->id) }}"
                        method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <br>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                    </td>
                    @endhasanyrole
                  </tr>
                  </tbody>
                @endforeach
                <tfoot>
                  <tr>
                    <th>id</th>
                  <th>Active</th>
                  <th>Title</th>
                  <th>Type</th>
                  <th>Image</th>
                  {{-- <th>Image</th> --}}
                  {{-- @can ('view_types','update_types', App\Models\Type::class) --}}
                    <th>Actions</th>
                  {{-- @endcan --}}
                  </tr>
                </tfoot>
              </table>
              {{$subtypes->links()}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
