@extends('layouts.app')

@section('content')

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    @if (count($posts) > 0)
                    @foreach ($posts as $post)
                    <article class="blog_item">
                        <div class="blog_item_img" style="text-align: center !important;">
                            <img src="/storage/cover_images/{{$post->cover_image}}" class=""
                                style="width: 100%; max-width:700px; max-height: 400px" alt="">
                          
                                @if ($post->user->is_business == 1 && $post->price != null)
                                    <div class="blog_item_date" style="text-align: left !important;">
                                
                                    <a href="/reservate/{{$post->id}} class="btn btn-primary" style="color: white !important;">
                                        Book Now
                                    </a>
                                    </div>
                                  
                            
                                @endif
                        </div>

                        <div class="blog_details">

                            <a href="/posts/{{$post->id}}">
                                <h2>{{$post->title}}</h2>
                            </a>

                            <p class="excert">
                                {{$post->body}}
                            </p>

                            <div class="blog-author">
                                <div class="media align-items-center">
                                    @if (!Auth::guest())
                                        @if (Auth::user()->id == $post->user_id)

                                            <ul class="blog-info-link">
                                               
                                                <li>
                                                    <i class="fas fa-user"></i>
                                                    <a  href="/dashboard" class="ml-1"
                                                        style="color: #222222 !important;">
                                                        
                                                        @if ($post->user->is_business == 1)
                                                            {{$post->user->business_name}} 
                                                            <i class="fas fa-check-circle ml-1" 
                                                            style="color: green;">
                                                            </i>
                                                        @else
                                                            {{$post->user->name}} 
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


                                        @else
                                            <ul class="blog-info-link">
                                              
                                                <li>
                                                    <i class="fas fa-user"></i>
                                                    
                                                       
                                                        
                                                    @if ($post->user->is_business == 1)
                                                    {{$post->user->business_name}} 
                                                        <i class="fas fa-check-circle ml-1" 
                                                        style="color: green;">
                                                        </i>
                                                    @else
                                                        {{$post->user->name}} 
                                                    @endif
                                                    
                                                </li>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    
                                                    <span class="ml-1">
                                                        {{$post->created_at->format('m/d/Y')}}
                                                    </span>
                                                </li>
                                             
                                            </ul>
                                        @endif
                                    @else
                                        <ul class="blog-info-link">
                                          
                                            <li>
                                                <i class="fas fa-user"></i>
                                                
                                                   
                                                    
                                                @if ($post->user->is_business == 1)
                                                    {{$post->user->business_name}} 
                                                    <i class="fas fa-check-circle ml-1" 
                                                    style="color: green;">
                                                    </i>
                                                @else
                                                    {{$post->user->name}} 
                                                @endif
                                              
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i>
                                                
                                                <span class="ml-1">
                                                    {{$post->created_at->format('m/d/Y')}}
                                                </span>
                                            </li>
                                        
                                        </ul>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </article>

                    @endforeach

                    @else
                    <p>No posts found</p>
                    @endif
                    <nav class="blog-pagination justify-content-center d-flex">

                        {{$posts->links()}}

                    </nav>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="{{route('search')}}" method="GET">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="query" id="query"
                                        value="{{request()->input('query')}}" placeholder='Search Keyword'>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>

                        @foreach ($recent as $post)
                        <div class="media post_item">
                            <img src="/storage/cover_images/{{$post->cover_image}}" class=""
                                style="width: 80px; height: 80px;" alt="">
                            <div class="media-body">
                                <a href="/posts/{{$post->id}}">
                                @if ($post->user->is_business)
                                    <h3>{{$post->user->business_name}}  <i class="fas fa-check-circle ml-1" 
                                        style="color: green;">
                                        </i></h3>
                                    
                                @else
                                    <h3>{{$post->user->name}}</h3>
                                @endif
                                </a>
                              <p>{{$post->created_at->format('m/d/Y')}}</p>
                             </div>
                          </div>    
                        @endforeach
                        

                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

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