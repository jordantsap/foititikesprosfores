@extends('admin.layouts.app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
        @can ('create_products', App\Models\Product::class)
          <small><a class="btn btn-primary" href="{{route('products.create')}}">Add New</a></small>
        @endcan
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>id</th>
                    @hasanyrole('Super-Admin|Admin|Blogger')
                      <th>Χρήστης</th>
                      <th>Active</th>
                      <th>Slider</th>
                    @endhasanyrole
                    <th>Title</th>
                    <th>Category</th>
                    <th>Company</th>
                    <th>Image</th>
                    <th>Description</th>
                    @hasanyrole('Super-Admin|Admin|Blogger')
                      <th>Actions</th>
                    @endhasanyrole
                  </tr>
                </thead>
                @if (count($products) > 0)
                  @foreach ($products as $product)
                    <tbody>
                    <tr>
                      <td>{{$product->id}}</td>
                      @hasanyrole('Super-Admin|Admin|Blogger')
                      <th> {{ $product->user ? $product->user->username : 'No user' }}</th>
                      <td>{{$product->active ? 'yes' : 'no'}}</td>
                      <td>{{$product->slider ? 'yes' : 'no'}}</td>
                    @endhasanyrole
                      <td>{{$product->title}}</td>
                      <td>
                        @if( ! empty($product->category)){{ $product->category->title }}
                        @else None
                        @endif
                      </td>
                      <td>
                        @if( ! empty($product->company)){{ $product->company->title }}
                        @else None
                        @endif
                      </td>
                      <td><img width="150px" height="150px" src="{{asset('images/products/'.$product->image)}}" alt="{{$product->title}}"></td>
                      <td>{{Str::limit($product->description, 20)}}</td>
                      <td>
                        @hasanyrole('Super-Admin|Admin|Blogger')
                          <a class="btn btn-primary" href="{{route('products.edit', $product->id)}}">Edit</a> -

                          <a class="btn btn-primary" href="{{route('products.show', $product->id)}}">View</a>
                        @endhasanyrole
                      </td>
                    </tr>
                    </tbody>
                  @endforeach
                  @else
                    no products
                @endif
                <tfoot>
                  <tr>
                    <th>id</th>
                    @hasanyrole('Super-Admin|Admin|Blogger')
                      <th>Actions</th>
                      <th>Active</th>
                      <th>Slider</th>
                    @endhasanyrole
                    <th>Title</th>
                    <th>Category</th>
                    <th>Company</th>
                    <th>Image</th>
                    <th>Description</th>
                    @can ('view_products','update_products', App\Models\Product::class)
                      <th>Actions</th>
                    @endcan
                  </tr>
                </tfoot>

              </table>
              {{$products->links()}}
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
