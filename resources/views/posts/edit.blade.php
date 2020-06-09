@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <h1 class="contact-title">Edit Post</h1>
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
         @if (Auth::user()->is_business == 1)
            <hr>
            <h2 class="contact-title">Reservation card details</h2>
            <div class="form-group">
                {{Form::label('checkin', 'Checkin date')}}
                {{Form::text('checkin', $post->checkin_date, ['class' => 'form-control col-sm-4', 'placeholder' => 'dd/mm/yyyy'])}}
            </div>
            <div class="form-group">
                {{Form::label('checkout', 'Checkout date')}}
                {{Form::text('checkout', $post->checkout_date, ['class' => 'form-control col-sm-4', 'placeholder' => 'dd/mm/yyyy'])}}
            </div>

            <div class="form-group">
                {{Form::label('adults', 'Adults/per room')}}
                {{Form::text('adults', $post->checkout_date, ['class' => 'form-control col-sm-4', 'placeholder' => 'Number of adults'])}}
            </div>

            <div class="form-group">
                {{Form::label('children', 'Children/per room')}}
                {{Form::text('children', $post->kids, ['class' => 'form-control col-sm-4', 'placeholder' => 'Number of children'])}}
            </div>

            <div class="form-group">
                {{Form::label('rooms', 'Rooms available')}}
                {{Form::text('rooms', $post->rooms, ['class' => 'form-control col-sm-4', 'placeholder' => 'Number of rooms available'])}}
            </div>

            <div class="form-group">
                {{Form::label('price', 'Reservation Price')}}
                {{Form::text('price', $post->price, ['class' => 'form-control col-sm-4', 'placeholder' => 'Enter a price'])}}
            </div>
            
        @endif
        {{Form::hidden('_method', 'PUT')}} 
        {{Form::submit('Submit', ['class' => 'genric-btn info'])}}
        <br> <br>
        <br> <br>
        <br> <br>
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