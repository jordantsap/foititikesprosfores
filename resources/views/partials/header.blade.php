<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

                <div class="col-3">
                    <a class="navbar-brand logo " href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="foititikesprosfores">
                    </a>
                </div>

                <div class="col">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Αρχική</a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{url('products')}}" id="productCategoryMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                    Προϊόντα
                                </a>
                                @include('partials.megamenu')
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('blog') }}" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('contact') }}">Επικοινωνία</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('whoweare') }}">Ποιοί Είμαστε</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('partner-form') }}">Γίνε Συνεργάτης</a>
                            </li>

                        </ul>
                    </div>

                </div>


                <div class="position-end">

                    <ul class="nav navbar-nav menu_nav list-group list-group-horizontal">
                        @if (Route::has('login'))
                            {{-- <div class=""> --}}
                            @auth
                                <li class="nav-item">
                                    <a href="{{ route('dashboard') }}" class="nav-link text-sm text-gray-700 underline"><i
                                            class="fas fa-user"></i></a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link text-sm text-gray-700 underline">Log in</a>
                                </li>
                            @endauth
                            {{-- </div> --}}
                        @endif
                        <li class="list-group-item">
                            <i class="fas fa-search"></i>
                        </li>
                        {{-- <li class="list-group-item">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="nav-shop__circle">3</span>
                        </li> --}}
                    </ul>
                </div>

            </div>
            <!--CONTAINER-->
        </nav>
    </div>
</header>
