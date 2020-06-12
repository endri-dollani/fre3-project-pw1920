@extends('layouts.app')

@section('content')
<div class="container pb-50">
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
                    <img src="/storage/profile_pics/noprofilepic.jpg"
                        style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                    @else
                    <img src="/storage/profile_pics/{{$user->profile_pic}}"
                        style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                    @endif


                    <div class="media-body">

                        <h4 class="pl-4">{{$user->name}}

                            @if ($user->is_business == 1)
                            <small class="ml-2" style="color:#30b330;"><i class="fas fa-check-circle"></i></small>
                            @endif


                        </h4>

                        <p class="pl-4">{{$user->user_bio}}</p>
                    </div>


                </div>
                
                @if ($user->is_business == 1)
                
                <div class="blog-author pb-4 pt-4"">
                    <h2 class="contact-title" style="font-size: 16px;">Business Details</h2>
                    
                    <div class=" media align-items-center">
                        <table class="table table-striped">
                            <tr>
                                <th>Business Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Phone Number</th>
                            </tr>
                            <tr>
                                <td>{{$user->business_name}}</td>
                                <td>{{$user->business_address}}</td>
                                <td>{{$user->business_city}}</td>
                                <td>{{$user->business_number}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                @endif
            </div>
            <div class="card ">
                @if (count($user->posts) == 0)
                    <div class="card-header">You have {{count($user->posts)}} posts. Create and share something!</div>
                @else
                    <div class="card-header">You have {{count($user->posts)}} posts.</div>
                    
                @endif
                
                <div class="card-body">


                    <a href="/posts/create" class="genric-btn info mr-3">Create Post</a>
                    <a href="/profile/{{$user->id}}/edit" class="genric-btn info mr-3">Edit Profile Info</a>
                    @if ($user->is_business == 1)
                        <a href="/business/{{$user->id}}/edit" class="genric-btn danger">Edit Business Info</a>
                    @endif
                    <h3 class="pt-4">Your Blog Posts:</h3>
         

                    <div class="container">
                        <div class="row">



                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                    <div class="container pt-5  pl-10">
                                        <div class="blog_item_img" style="text-align: center !important;">
                                            <img src="/storage/cover_images/{{$post->cover_image}}" class=""
                                                style="width: 90% !important; height: 400px !important;" alt="">
                                               

                                                
                                            @if ($post->user->is_business == 1 && $post->price != null)
                                                <div class="blog_item_date" style="text-align: left !important;">
                                            
                                                <!-- Button trigger modal -->
                                                <a href="/posts/{{$post->id}}" class="btn btn-primary" style="color: white !important;">
                                                    Book Now
                                                </a>
                                                </div>
                                            
                                    
                                            @endif
                                                    
                                        </div>
                                        

                                        <div class="blog_details"  >
                                            <a href="/posts/{{$post->id}}">
                                                <h2>{{$post->title}}</h2>
                                            </a>
                                            <p>{{$post->body}}</p>

                                            <div class="blog-author">
                                                <div class="media align-items-center">
                                                    <ul class="blog-info-link">
                                                           
                                                        <li>
                                                            <i class="fas fa-user"></i>
                                                            <a  href="/dashboard" class="ml-1"
                                                                style="color: #222222 !important;">
                                                                
                                                                {{$post->user->business_name}} 
                                                                @if ($post->user->is_business == 1)
                                                                    <i class="fas fa-check-circle ml-1" 
                                                                    style="color: green;">
                                                                    </i>
                                                                @endif
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <i class="far fa-clock"></i>
                                                            
                                                            <span class="ml-1">
                                                                {{$post->created_at->format('m/d/Y')}}
                                                            </span>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>

                                         </div>
                                         
                                            <div>
                                                <a href="/posts/{{$post->id}}/edit" class="genric-btn info mt-3">Edit</a>

                                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST',
                                                'class'
                                                => 'float-right'])!!}

                                                {{Form::hidden('_method', 'DELETE')}}

                                                {{Form::submit('Delete', ['class' => 'genric-btn danger  mt-3'])}}

                                                {!!Form::close()!!}
                                            </div>
                                      </div>
                                    </div>
                                </div>

                            

                                @endforeach
                            @else
                            <p>You have no posts.</p>
                            @endif

                            <nav class="blog-pagination justify-content-center d-flex">

                                {{$posts->links()}}
        
                            </nav>

                        </div>
                    </div>

                </div>
            </div>
    </div>




</div>
</div>
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
                                <li><a href="/about">About Tourist Checkpoint</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-caption mb-30">
                        <div class="footer-tittle">
                            <h4>Contact</h4>
                            <ul>
                                <li><span style="font-weight: 10;">Tel: 04 255 6987</span></li>
                                <li><span style="font-weight: 10;">Skype: TouristCheckpoint</sapn></li>
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