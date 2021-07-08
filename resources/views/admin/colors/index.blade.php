@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Χρώματα
                {{-- @can('create_categories', App\Category::class) --}}
                <small><a class="btn btn-primary" href="{{ route('colors.create') }}">Create</a></small>
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
                                            <th>Τίτλος</th>
                                            <th>Url</th>
                                            <th>Εικόνα</th>
                                            @hasanyrole('Super-Admin|Admin|Blogger')
                                            <th>Actions</th>
                                            @endhasanyrole
                                        </tr>
                                    </thead>
                                    @foreach ($colors as $color)
                                        <tbody>
                                            <tr>
                                                <td>{{ $color->id }}</td>
                                                <td>{{ $color->title }}</td>
                                                <td>{{ $color->slug }}</td>
                                                <td><img width="150px" height="150px"
                                                        src="{{ asset('images/colors/' . $color->image) }}"
                                                        alt="{{ $color->title }}"></td>
                                                <td>
                                                    @hasanyrole('Super-Admin|Admin|Blogger')
                                                    {{-- <a class="btn btn-primary"
                                                        href="{{ route('colors.edit', $color->id) }}">Edit</a>
                                                    - --}}

                                                    <a class="btn btn-primary"
                                                        href="{{ route('colors.show', $color->id) }}">View</a>
                                                        <form action="{{ route('colors.destroy', $color->id) }}"
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
                                            <th>id</th>
                                            <th>Τίτλος</th>
                                            <th>Url</th>
                                            <th>Εικόνα</th>
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
