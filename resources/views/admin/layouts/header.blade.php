<header class="main-header">
    <!-- Logo -->
    <a target="_blank" href="{{ url('/') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>{{ config('app.name') }}</b>.gr</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ config('app.name') }}.gr</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" style="height:50px" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" style="padding: 0 15px" data-toggle="offcanvas" role="button">
            <i class="fas fa-bars"></i>
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        {{-- <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{Auth::user()->image ?? asset('images/noimage.jpg')}}" class="user-image" alt="">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">
                            {{ Auth::user()->username }}
                        </span>
                    </a>

                </li>
            </ul>
        </div> --}}
    </nav>
</header>
