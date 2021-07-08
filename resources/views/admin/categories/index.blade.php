@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Categories
                {{-- @can('create_categories', App\Category::class) --}}
                <small><a class="btn btn-primary" href="{{ route('categories.create') }}">Create</a></small>
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
                                            <th>Εικόνα</th>
                                            @hasanyrole('Super-Admin|Admin|Blogger')
                                            <th>Actions</th>
                                            @endhasanyrole
                                        </tr>
                                    </thead>
                                    @foreach ($categories as $category)
                                        <tbody>
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->title }}</td>
                                                <td>
                                                    <img height="200px" src="{{ asset('images/categories/' . $category->image) }}"
                                                        alt="{{ $category->title }}">
                                                </td>
                                                <td>
                                                    @hasanyrole('Super-Admin|Admin|Blogger')
                                                    <a class="btn btn-primary"
                                                        href="{{ route('categories.edit', $category->id) }}">Edit</a> -
                                                    {{-- @endcan
                                                    @can('view_users', App\category::class) --}}
                                                    <a class="btn btn-primary"
                                                        href="{{ route('categories.show', $category->id) }}">View</a> -
                                                    <form action="{{ route('categories.destroy', $category->id) }}"
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
                                            <th>Actions</th>
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
