@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Companies
                {{-- @can('create_companies', App\Models\Company::class) --}}
                <small><a class="btn btn-primary" href="{{ route('companies.create') }}">New</a></small>
                {{-- @endcan --}}
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
                                        <th>Active</th>
                                        <th>Category</th>
<<<<<<< HEAD
                                        <th>Προϊόντα</th>
                                        <th>Title</th>
                                        <th>Manager</th>
                                        <th>Χρήστης</th>
                                        <th>Image</th>
                                        @hasanyrole('Super-Admin|Admin|Blogger')
                                        <th>Actions</th>
                                        @endhasanyrole
=======
                                        <th>Title</th>
                                        <th>Manager</th>
                                        <th>Logo</th>
                                        {{-- @can('view_companies', 'update_companies', App\Company::class) --}}
                                        <th>Actions</th>
                                        {{-- @endcan --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                    </tr>
                                </thead>
                                @foreach ($companies as $company)
                                    <tbody>
                                        <tr>
                                            <td>{{ $company->id }}</td>
                                            <td>{{ $company->active ? 'yes' : 'no' }}</td>
                                            <td>
                                                @if (!empty($company->category))
                                                    {{ $company->category->title }}
                                                @else None
                                                @endif
                                            </td>
<<<<<<< HEAD
                                            <td>{{ $company->products->count() }}</td>
                                            <td>{{ Str::limit($company->title, 10) }}</td>
                                            <td>{{ $company->manager }}</td>
                                            <td>{{ $company->user ? $company->user->username : 'No user' }}</td>
=======
                                            <td>{{ Str::limit($company->title, 10) }}</td>
                                            <td>{{ $company->manager }}</td>
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                            <td><img width="150px" height="150px"
                                                    src="{{ asset('images/companies/' . $company->image) }}"
                                                    alt="{{ $company->title }}"></td>
                                            <td>
<<<<<<< HEAD
                                                @hasanyrole('Super-Admin|Admin|Blogger')
=======
                                                {{-- @can('update_companies', App\Company::class) --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                                <a class="btn btn-primary"
                                                    href="{{ route('companies.edit', $company->id) }}">Edit</a> -
                                                {{-- @endcan
                                                @can('view_companies', App\Company::class) --}}
                                                <a class="btn btn-primary"
                                                    href="{{ route('companies.show', $company->id) }}">View</a>
<<<<<<< HEAD
                                                @endhasanyrole
=======
                                                {{-- @endcan --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Active</th>
<<<<<<< HEAD
                                        <th>Category</th>
                                        <th>Προϊόντα</th>
                                        <th>Title</th>
                                        <th>Manager</th>
                                        <th>Χρήστης</th>
                                        <th>Image</th>
                                        @hasanyrole('Super-Admin|Admin|Blogger')
                                        <th>Actions</th>
                                        @endhasanyrole
=======
                                        <th>Title</th>
                                        <th>Image</th>
                                        {{-- @can('view_companies', 'update_companies', App\Company::class) --}}
                                        <th>Actions</th>
                                        {{-- @endcan --}}
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
                                    </tr>
                                </tfoot>
                            </table>
                            {{ $companies->links() }}
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
