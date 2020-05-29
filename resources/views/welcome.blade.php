<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>

    <!-- JS here -->
     
         <!-- All JS Custom Plugins Link Here here -->
         <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
         
         <!-- Jquery, Popper, Bootstrap -->
         <script type="text/javascript" src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
         <!-- Jquery Mobile Menu -->
         <script type="text/javascript" src="{{asset('js/jquery.slicknav.min.js')}}"></script>
 
         <!-- Jquery Slick , Owl-Carousel Plugins -->
         <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
         <!-- Date Picker -->
         <script type="text/javascript" src="{{asset('js/gijgo.min.js')}}"></script>
         <!-- One Page, Animated-HeadLin -->
         <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/animated.headline.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.js')}}"></script>
 
         <!-- Scrollup, nice-select, sticky -->
         <script type="text/javascript" src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.nice-select.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>
         
         <!-- contact js -->
         <script type="text/javascript" src="{{asset('js/contact.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.form.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/mail-script.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
         
         <!-- Jquery Plugins, main Jquery -->	
         <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
         <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</html>
