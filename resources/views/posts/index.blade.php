@extends('layouts.app')

@section('content')
{{-- <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well p-4">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{$post->cover_image}}" style="width: 100%;">
</div>
<div class="col-md-8 col-sm-8">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
</div>
</div>
</div>
@endforeach
{{$posts->links()}}
@else
<p>No posts found</p>
@endif --}}

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    @if (count($posts) > 0)
                    @foreach ($posts as $post)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img src="/storage/cover_images/{{$post->cover_image}}" class=""
                                style="width: 90%; height: 400px;" alt="">
                            {{-- <a href="#" class="blog_item_date">
                                    <h3>Reservate</h3>
                                </a> --}}
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

                                    <a href="/dashboard">
                                        @if ($post->user->profile_pic == null)
                                        <img src="/storage/profile_pics/noprofilepic.jpg" class="mr-4 mb-3"
                                            style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                                        @else
                                        <img src="/storage/profile_pics/{{$post->user->profile_pic}}" class="mr-4 mb-3"
                                            style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                                        @endif
                                        <div class="media-body">
                                            <a href="/dashboard">
                                                <h4>{{$post->user->name}}
                                                    @if ($post->user->is_business == 1)
                                                    <small class="ml-2 mr-4 mb-3" style="color:#30b330;"><i
                                                            class="fas fa-check-circle"></i></small>
                                                    @endif

                                                </h4>
                                            </a>
                                            <p>{{$post->user->user_bio}}</p>
                                        </div>

                                    </a>


                                    @else

                                    <img src="/storage/profile_pics/{{$post->user->profile_pic}}"
                                        style="width: 50px; height: 50px; border-radius: 50%;" class="mr-4 mb-3" alt="">
                                    <div class="media-body">
                                        <h4>{{$post->user->name}}
                                            @if ($post->user->is_business == 1)
                                            <small class="ml-2" style="color:#30b330;"><i
                                                    class="fas fa-check-circle"></i></small>
                                            @endif
                                        </h4>
                                        <p>{{$post->user->user_bio}}</p>
                                    </div>
                                    @endif
                                    @else

                                    @if ($post->user->profile_pic == null)
                                    <img src="/storage/profile_pics/noprofilepic.jpg" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                                   @else 
                                   <img src="/storage/profile_pics/{{$post->user->profile_pic}}" style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                   
                                   @endif
                                    <img src="/storage/profile_pics/{{$post->user->profile_pic}}" class="mr-4 mb-3"
                                        style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                                    <div class="media-body">
                                        <h4>{{$post->user->name}}
                                            @if ($post->user->is_business == 1)
                                            <small class="ml-2" style="color:#30b330;"><i
                                                    class="fas fa-check-circle"></i></small>
                                            @endif
                                        </h4>
                                        <p>{{$post->user->user_bio}}</p>
                                    </div>

                                    @endif
                                    {{-- <a href="/dashboard">
                                        @if ($post->user->profile_pic == null)
                                          
                                             <img src="/storage/profile_pics/noprofilepic.jpg" style="width: 50px; height: 50px; border-radius: 50%;" alt="">  
                                        @else
                                                <img src="/storage/profile_pics/{{$post->user->profile_pic}}"
                                    style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                                    @endif

                                    </a> --}}

                                </div>


                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    <li><small>Written on {{$post->created_at}} by {{$post->user->name}}</small></li>
                                </ul>

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
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                        </form>
                    </aside>


                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <img src="{{asset('img/post/post_1.png')}}" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>

                    </aside>
                    <aside class="single_sidebar_widget tag_cloud_widget">
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