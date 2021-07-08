@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Brands
                {{-- @can('create_categories', App\Category::class) --}}
                <small><a class="btn btn-primary" href="{{ route('brands.create') }}">Create</a></small>
                {{-- @endcan --}}
            </h1>

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
                                            <th>Title</th>
                                            <th>Image</th>
                                            @hasanyrole('Super-Admin|Admin|Blogger')
                                            <th>Actions</th>
                                            @endhasanyrole
                                        </tr>
                                    </thead>
                                    @foreach ($brands as $brand)
                                        <tbody>
                                            <tr>
                                                <td>{{ $brand->id }}</td>
                                                <td>{{ $brand->title }}</td>
                                                <td>
                                                    <img width="100" src="{{ asset('images/brands/' . $brand->image) }}"
                                                        alt="{{ $brand->title }}"></td>
                                                <td>
                                                    @hasanyrole('Super-Admin|Admin|Blogger')
                                                    <a class="btn btn-primary"
                                                        href="{{ route('brands.edit', $brand->id) }}">Edit</a> -

                                                    <a class="btn btn-primary"
                                                        href="{{ route('brands.show', $brand->id) }}">View</a>
                                                        <form action="{{ route('brands.destroy', $brand->id) }}"
                                                            method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <br>
                                                            <button type="submit" class="btn btn-primary">Delete</button>
                                                        </form>
                                                    @endhasanyrole
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            @hasanyrole('Super-Admin|Admin|Blogger')
                                            <th>Actions</th>
                                            @endhasanyrole
                                        </tr>
                                    </tfoot>
                                </table>
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
