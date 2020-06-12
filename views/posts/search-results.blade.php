@extends('layouts.app')

@section('content')

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <article class="blog_item">
                        
                        <h1>Search Results</h1>
                        <p>{{$posts->count()}} result(s) for '{{request()->input('query')}}'</p>

                        @foreach ($posts as $post)
                            {{-- <div>
                                <table class="table table-striped">
                                    <tr>
                                        <th>Cover Image</th>
                                        <th>Post Title</th>
                                        <th>Post Description</th>
                                        <th>Checkin date</th>
                                        <th>Checkout date</th>
                                    </tr>
                                    <tr>
                                        <td><a href="/posts/{{$post->id}}"><img src="/storage/cover_images/{{$post->cover_image}}" class="mr-4 mb-3"
                                            style="width: 100px; height: 100px;" alt=""></a></td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->body}}</td>
                                        <td>{{$post->checkin_date}}</td>
                                        <td>{{$post->checkout_date}}</td>
                                    </tr>
                                </table>

                            </div> --}}
                            <article class="blog_item">
                                <div class="blog_item_img" style="text-align: center !important;">
                                    <img src="/storage/cover_images/{{$post->cover_image}}" class=""
                                        style="width: 100%; max-width:700px; max-height: 400px" alt="">
                                  
                                    @if ($post->user->is_business == 1 && $post->price != null)
                                        <div class="blog_item_date" style="text-align: left !important;">
                                    
                                        <!-- Button trigger modal -->
                                        <a href="/posts/{{$post->id}}" class="btn btn-primary" style="color: white !important;">
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
                                                <li>
                                                    <span>
                                                        <i class="fas fa-tags"></i> 
                                                        
                                                        <a  href="#" class="ml-1 p-1 mr-1"
                                                            style="border-radius: 5px; background: #38a4ff; color: black !important;">
                                                            
                                                            Travel
                                                        </a>,
                                                    
                                                        <a  href="#" class="ml-1 p-1 mr-1"
                                                            style="border-radius: 5px; background: #38a4ff; color: black !important;">
                                                            
                                                            Lifestyle
                                                        </a>
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
                            </article>
                        @endforeach
                    </article>


                    <nav class="blog-pagination justify-content-center d-flex">
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


                    
                    {{-- <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside> --}}
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
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This website is made with <i class="ti-heart"
                                    aria-hidden="true"></i> by <a href="#">FRE3</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
                                {{-- <li><a href="#">Our Best Rooms</a></li>
                                <li><a href="#">Our Photo Gellary</a></li>
                                <li><a href="#">Pool Service</a></li> --}}
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
                            {{-- <!-- Form -->
                             <div class="footer-form" >
                                 <span style="color: white;">Newsletter</span>
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                           <button type="submit" name="submit" id="newsletter-submit"
                                           class="email_icon newsletter-submit button-contactForm"><img src="{{asset('img/logo/form-iocn.jpg')}}"
                            alt=""></button>
                        </div>
                        <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div> --}}
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