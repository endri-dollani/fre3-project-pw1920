@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div> 
        <div class="form-froup pb-3">
            {{Form::file('cover_image')}}    
        </div>  
        {{Form::hidden('_method', 'PUT')}} 
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

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