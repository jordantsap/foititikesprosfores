@extends('admin.layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Articles
                {{-- @can('create_articles', App\article::class) --}}
                <small><a class="btn btn-primary" href="{{ route('articles.create') }}">Add New</a></small>
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
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        @hasanyrole('Super-Admin|Admin|Blogger')
                                        <th>Actions</th>
                                        @endhasanyrole
                                    </tr>
                                </thead>
                                @foreach ($articles as $article)
                                    <tbody>
                                        <tr>
                                            <td>{{ $article->id }}</td>
                                            <td>{{ $article->active == 1 ? 'yes' : 'no' }}</td>
                                            <td>
                                                @if ($article->articletype)
                                                    {{ $article->articletype->title }}
                                                @else None
                                                @endif
                                            </td>
                                            <td>{{ $article->title }}</td>
                                            <td><img width="150px" height="150px"
                                                    src="{{ $article->image ? asset('images/articles/' . $article->image) : asset('images/noimage.jpg') }}"
                                                    alt="{{ $article->title }}"></td>
                                            <td>{{ Str::limit($article->description, 20) }}</td>
                                            <td>
                                                @hasanyrole('Super-Admin|Admin|Blogger')
                                                <a class="btn btn-primary"
                                                    href="{{ route('articles.edit', $article->id) }}">Edit</a> -
                                                {{-- @endcan
                    @can('view_articles', App\article::class) --}}
                                                <a class="btn btn-primary"
                                                    href="{{ route('articles.show', $article->id) }}">View</a>
                                                    <form action="{{ route('articles.destroy', $article->id) }}"
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
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        @hasanyrole('Super-Admin|Admin|Blogger')
                                        <th>Actions</th>
                                        @endhasanyrole
                                    </tr>
                                </tfoot>
                            </table>
                            {{ $articles->links() }}
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
=======
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Articles
        {{-- @can ('create_articles', App\article::class) --}}
          <small><a class="btn btn-primary" href="{{route('articles.create')}}">Add New</a></small>
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
                  <th>Category</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Description</th>
                  {{-- @can ('view_articles','update_articles', App\article::class) --}}
                    <th>Actions</th>
                  {{-- @endcan --}}
                </tr>
                </thead>
                @foreach ($articles as $article)
                  <tbody>
                  <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->active?"yes":'no'}}</td>
                    <td>
                      @if( $article->articletype )
                      {{ $article->articletype->title }}
                      @else None
                      @endif
                    </td>
                    <td>{{$article->title}}</td>
                    <td><img width="150px" height="150px" src="{{$article->image?asset('images/articles/'.$article->image) : asset('images/noimage.jpg')}}" alt="{{$article->title}}"></td>
                    <td>{{ Str::limit($article->description, 20)}}</td>
                    <td>
                    {{-- @can ('update_articles', App\article::class) --}}
                      <a class="btn btn-primary" href="{{route('articles.edit', $article->id)}}">Edit</a> -
                    {{-- @endcan
                    @can ('view_articles', App\article::class) --}}
                      <a class="btn btn-primary" href="{{route('articles.show', $article->id)}}">View</a>
                    {{-- @endcan --}}
                    </td>
                  </tr>
                  </tbody>
                @endforeach
                <tfoot>
                  <tr>
                    <th>id</th>
                  <th>Active</th>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Description</th>
                  {{-- @can ('view_articles','update_articles', App\article::class) --}}
                    <th>Actions</th>
                  {{-- @endcan --}}
                  </tr>
                </tfoot>
              </table>
              {{$articles->links()}}
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
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
@endsection
