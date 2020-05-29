<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TouristCheckpoint') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.svg')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css">
   
</head>
<body>
    
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>TP</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->
    @include('inc.navbar')
    {{-- <div class="container pt-5"> --}}
        @include('inc.messages')
        @yield('content')
    {{-- </div> --}}
</body>
</html>
