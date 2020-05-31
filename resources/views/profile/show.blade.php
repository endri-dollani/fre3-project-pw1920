@extends('layouts.app')

@section('content')
<div class="blog-author pb-4 pt-4">
    <div class="media align-items-center">
<p>{{$user}}</p>
     
    </div>
</div>
{{-- <div class="container pb-50">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="blog-author pb-4 pt-4">
                <div class="media align-items-center">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if ($user->profile_pic == null)
                         <img src="/storage/profile_pics/noprofilepic.jpg" style="width: 50px; height: 50px; border-radius: 50%;" alt="">  
                    @else
                         <img src="/storage/profile_pics/{{$user->profile_pic}}" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                    @endif
                    
                   
                    <div class="media-body">

                        <h4 class="pl-4">{{$user->name}} <small>| Normal User</small></h4>

                        <p class="pl-4">{{$user->user_bio}}</p>
                    </div>
                 
                </div>
            </div>
            <div class="card ">
                <div class="card-header">Dashboard </div>

                <div class="card-body">


                    <a href="/posts/create" class="genric-btn info mr-3">Create Post</a>
                    <a href="/profile/{{$user->id}}/edit" class="genric-btn info">Edit Profile Info</a>
                    <h3 class="pt-4">Your Blog Posts:</h3> --}}
                    {{-- @if (count($user->posts) > 0)
                        <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($user->posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                    <td><a href="/posts/{{$post->id}}/edit" class="genric-btn info">Edit</a></td>
                    <td>
                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'
                        => 'float-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'genric-btn danger'])}}
                        {!!Form::close()!!}
                    </td>
                    </tr>
                    @endforeach
                    </table>
                    @else
                    <p>You have no posts.</p>
                    @endif --}}
                    
                        {{-- <div class="container">
                            <div class="row">
                                
                                    
                                       
                                        @if (count($user->posts) > 0)
                                        @foreach ($user->posts as $post)
                                        <div class="container pt-5  pl-10">
                                            <div class="blog_item_img">
                                                <img src="/storage/cover_images/{{$post->cover_image}}" class="" style="width: 90%; height: 400px;" alt="">
                                                {{-- <a href="#" class="blog_item_date">
                                                    <h3>Reservate</h3>
                                                </a> --}}
                                            {{-- </div>
                
                                            <div class="blog_details">
                                                <a href="/posts/{{$post->id}}">
                                                    <h2>{{$post->title}}</h2>
                                                </a>
                                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                                    he earth it first without heaven in place seed it second morning saying.</p>
                                                <ul class="blog-info-link">
                                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                                    <li><small>Written on {{$post->created_at}} by {{$post->user->name}}</small></li>
                                                </ul>
                                            </div>
                                            <a href="/posts/{{$post->id}}/edit" class="genric-btn info mt-3">Edit</a>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'
                                             => 'float-right'])!!}
                                             {{Form::hidden('_method', 'DELETE')}}
                                             {{Form::submit('Delete', ['class' => 'genric-btn danger  mt-3'])}}
                                             {!!Form::close()!!}
                                       </div>

                                      
                                        @endforeach
                                        @else
                                        <p>You have no posts.</p>
                                        @endif
                              
                            </div>
                        </div>
                  
                </div>
            </div>
        </div>
       
  
       
        
    </div>
</div>  --}}
<footer>
    <!-- Footer Start-->
    <div class="footer-area black-bg footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-30">
                        <!-- logo -->
                        <div class="footer-logo">
                            <a href="/"><img src="{{asset('img/logo/logo2_footer.svg')}}" alt=""></a>
                        </div>
                        <div class="footer-social footer-social2">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                        <div class="footer-pera">
                            <p>
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This website is made with <i class="ti-heart"
                                    aria-hidden="true"></i> by <a href="#">FRE3</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About Tourist Checkpoint</a></li>
                             
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Contact</h4>
                            <ul>
                                <li><a href="#">Tel: 04 255 6987</a></li>
                                <li><a href="#">Skype: TouristCheckpoint</a></li>
                                <li><a href="#">contact@touristcheckpoint.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Our Location</h4>
                            <ul>
                                <li><a href="http://www.fshn.edu.al/">Faculty of Natural Sciences,</a></li>
                                <li><a href="http://www.fshn.edu.al/">Bulevardi Zogu I, Tiranë</a></li>
                            </ul>
                
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Footer End-->
</footer>

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