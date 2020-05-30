{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
{{ config('app.name', 'Laravel') }}
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/posts">Blog</a>
        </li>
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/dashboard">Dashboard</a>

                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</div>
</div>
</nav> --}}
<header>
    <!-- Header Start -->
    <div class="header-area header-sticky">
        <div class="main-header ">
            <div class="container">
                <div class="row align-items-center">
                    <!-- logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="/"><img src="{{asset('img/logo/logo.svg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/services">Business</a></li>
                                    <li><a href="/blog">Blog</a>
                                        <!-- <ul class="submenu"> -->
                                        <!-- <li><a href="blog.html">Blog</a></li> -->
                                        {{-- <li><a href="/single-blog">Blog Details</a></li> --}}
                                        <!-- </ul> -->
                                    </li>
                                    <!-- <li><a href="#">Pages</a> -->
                                    <!-- <ul class="submenu"> -->
                                    <!-- <li><a href="rooms.html">Rooms</a> -->
                                    <!-- <li><a href="elements.html">Element</a></li> -->
                                    <!-- </ul> -->
                                    <!-- </li> -->
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Authentication Links -->
                    @guest
                    <div class="col-xl-1 col-lg-1">
                        <!-- header-btn -->
                        <div class="header-btn">
                            <a href="{{ route('login') }}" class="btn btn1 d-none d-lg-block "
                                style="font-size: 12px">{{ __('Login') }}</a>
                        </div>
       

                    </div>
                    @if (Route::has('register'))
                    <div class="col-xl-1 col-lg-1">
                        <!-- header-btn -->
                        <div class="header-btn">
                            <a href="{{ route('register') }}" class="btn btn1 d-none d-lg-block"
                                style="font-size: 12px">{{ __('Register') }}</a>
                        </div>
                    </div>
                    @endif
                    @else
               
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">

                                <li><a href="#"> {{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="submenu">
                                        <li><a href="/dashboard">Dashboard</a></li>
                                        <li><a href="#">Upgrade to business</a></li>
                                        <li>
                                            <a href="single-blog.html" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>