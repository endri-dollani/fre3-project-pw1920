@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img src="/storage/cover_images/{{$post->cover_image}}" style="width: 100%;">
    <br> <br>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())    
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif

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
@endsection