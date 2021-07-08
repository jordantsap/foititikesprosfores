
<section class="homeblogposts">
    <div class="container">
        <div class="row">

        <div class="row" id="home-blog">
            <div class="mx-auto">
                <h1 class="home-posts-header text-center">Τελευταία Νέα</h1>
                <!-- <hr class="home-categories"> -->
            </div>
            @foreach ($homeposts as $post)
            <div class="home-blog-posts-item mb-4">
                <a href="{{route('article', $post->slug)}}">
<<<<<<< HEAD
                    <img class="" width="100%" height="250px" src="{{ asset('images/articles/'.$post->image) }}" alt="">
=======
                    <img class="" width="100%" height="250px" src="{{ $post->image }}" alt="">
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

                <h2>{{ $post->title}}</h2>
                <h3 class="">{{ Str::limit($post->description, 15)}}</h3>
                </a>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</section>
