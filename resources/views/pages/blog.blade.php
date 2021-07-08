@include('partials.head')
@include('partials.header')


<section class="blogpage">
    <div class="container">
        <div class="row">

        <div class="row" id="blogpage">
            <div class="mx-auto">
                <h1 class="home-posts-header text-center">Blog page</h1>
                <!-- <hr class="home-categories"> -->
            </div>

            <div class="home-blog-posts-item">
                <a href="{{url('article')}}">
                    <img class="" width="100%" height="250px" src="https://via.placeholder.com/350x200" alt="">
                </a>
                <h2><a class="" href="{{url('article')}}">Lorem, ipsum dolor.</a></h2>
                <h3 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, numquam!</h3>
            </div>
            <div class="home-blog-posts-item">
                <a href="{{url('article')}}">
                    <img class="" width="100%" height="250px" src="https://via.placeholder.com/350x200" alt="">
                </a>
                <h2><a class="" href="{{url('article')}}">Lorem, ipsum dolor.</a></h2>
                <h3 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, numquam!</h3>
            </div>
            <div class="home-blog-posts-item">
                <a href="{{url('article')}}">
                    <img class="" width="100%" height="250px" src="https://via.placeholder.com/350x200" alt="">
                </a>
                <h2><a class="" href="{{url('article')}}">Lorem, ipsum dolor.</a></h2>
                <h3 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, numquam!</h3>
            </div>
            <div class="home-blog-posts-item">
                <a href="{{url('article')}}">
                    <img class="" width="100%" height="250px" src="https://via.placeholder.com/350x200" alt="">
                </a>
                <h2><a class="" href="{{url('article')}}">Lorem, ipsum dolor.</a></h2>
                <h3 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, numquam!</h3>
            </div>

        </div>
        </div>
    </div>
</section>

@include("partials.footer")
