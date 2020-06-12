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
                    <div class="col-xl-9 col-lg-9 col-md-12 ">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/services">Business</a></li>
                                    <li><a href="/posts">Blog</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    @guest
                                    <li><a href="{{ route('login') }}"  >{{ __('Login') }}</a></li>
                                    @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                    @endif
                                    @else   
                                    <li><a href="/dashboard"> My Profile</a>
                                        <ul class="submenu">
                                            <li><a href="/dashboard">Dashboard</a></li>
                                            @if ( Auth::user()->is_business == 0)
                                               <li><a href="/checkout-business">Upgrade to business</a></li>
                                            @endif
                                            <li>
                                                <a href="single-blog.html" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
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