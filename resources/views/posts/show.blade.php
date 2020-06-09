@extends('layouts.app')

@section('content')
{{-- <a href="/posts" class="btn btn-default">Go Back</a>
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
@endif --}}

<div class="container pt-5">
    <a href="/posts" class="genric-btn info">Go Back</a>
</div>
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img src="/storage/cover_images/{{$post->cover_image}}" class=""
                            style="width: 90%; height: 400px;" alt="">
                    </div>
                    {{-- <div class="blog_item_img">
                        <a href="#" class="blog_item_date">
                            <h3>Reservate</h3>
                        </a>
                    </div> --}}

                    <div class="blog_details">
                        <h2>{{$post->title}}</h2>
                        {{-- <ul class="blog-info-link mt-3 mb-4">
                            <li><span style="color: grey;"><i class="fa fa-user"></i> Travel, Lifestyle</span></li>
                            <li><span style="color: grey;"><i class="fa fa-comments"></i> 03 Comments</span></li>
                            <li><span style="color: grey;">Written on {{$post->created_at}} by
                        {{$post->user->name}}</span></li>
                        </ul> --}}
                        <p class="excert">
                            {{$post->body}}
                        </p>
                    </div>
                    @if ($post->user->is_business == 1)
                    <div class="col-xl-8 pt-4 col-lg-8 col-md-8">
                        <!-- Reservation Details -->
                        <div class="single-room mb-50 ">
                            <div class="room-caption">
                                <h3><a href="{{route('post.reservate',$post->id)}}"
                                        style="color: #dca73a !important;">Reservate Now</a></h3>
                                <div>
                                    <span>Checkin date:</span>
                                    <h5> {{$post->checkin_date}}</h5>
                                    <span>Checkout date:</span>
                                    <h5> {{$post->checkout_date}}</h5>
                                </div>
                                <span>Our {{$post->rooms}} room('s) can accommodate:</span>
                                <div class="pt-2">
                                    <h5>{{$post->adults}} Adult('s) and {{$post->kids}} Children('s) </h5>
                                </div>
                                <span>Price:</span>
                                <div class="per-night">
                                    <span><u>$</u>{{$post->price}} <span>/ per night</span></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif

                </div>
                {{-- <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                        </div>
                     
                    </div>
                  
    </div> --}}
                <div class="blog-author">
                    <div class="media align-items-center">
                        @if (!Auth::guest())
                        @if (Auth::user()->id == $post->user_id)

                        <a href="/dashboard">
                            @if ($post->user->profile_pic == null)
                            <img src="/storage/profile_pics/noprofilepic.jpg"
                                style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                            @else
                            <img src="/storage/profile_pics/{{$post->user->profile_pic}}"
                                style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                            @endif
                            <div class="media-body">
                                <a href="/dashboard">
                                    <h4>{{$post->user->name}}
                                        @if ($post->user->is_business == 1)
                                        <small class="ml-2" style="color:#30b330;"><i
                                                class="fas fa-check-circle"></i></small>
                                        @endif

                                    </h4>
                                </a>
                                <p>{{$post->user->user_bio}}</p>
                            </div>

                        </a>


                        @else
                        @if ($post->user->profile_pic == null)
                        <img src="/storage/profile_pics/noprofilepic.jpg"
                            style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                        @else
                        <img src="/storage/profile_pics/{{$post->user->profile_pic}}"
                            style="width: 50px; height: 50px; border-radius: 50%;" alt="">

                        @endif

                        <div class="media-body">
                            <h4>{{$post->user->name}}
                                @if ($post->user->is_business == 1)
                                <small class="ml-2" style="color:#30b330;"><i class="fas fa-check-circle"></i></small>
                                @endif
                            </h4>
                            <p>{{$post->user->user_bio}}</p>
                        </div>
                        @endif
                        @else
                        @if ($post->user->profile_pic == null)
                        <img src="/storage/profile_pics/noprofilepic.jpg"
                            style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                        @else
                        <img src="/storage/profile_pics/{{$post->user->profile_pic}}"
                            style="width: 50px; height: 50px; border-radius: 50%;" alt="">

                        @endif
                        <div class="media-body">
                            <h4>{{$post->user->name}}
                                @if ($post->user->is_business == 1)
                                <small class="ml-2" style="color:#30b330;"><i class="fas fa-check-circle"></i></small>
                                @endif
                            </h4>
                            <p>{{$post->user->user_bio}}</p>
                        </div>

                        @endif
                        {{-- <a href="/dashboard">
            @if ($post->user->profile_pic == null)
              
                 <img src="/storage/profile_pics/noprofilepic.jpg" style="width: 50px; height: 50px; border-radius: 50%;" alt="">  
            @else
                    <img src="/storage/profile_pics/{{$post->user->profile_pic}}" style="width: 50px; height: 50px;
                        border-radius: 50%;" alt="">
                        @endif

                        </a> --}}

                    </div>
                    @if ($post->user->is_business == 1)
                    <div class="blog-author pb-4 pt-4"">
            <div class=" media align-items-center">

                        <table class="table table-striped">
                            <tr>
                                <th>Business Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Phone Number</th>
                            </tr>
                            <tr>
                                <td>{{$post->user->business_name}}</td>
                                <td>{{$post->user->business_address}}</td>
                                <td>{{$post->user->business_city}}</td>
                                <td>{{$post->user->business_number}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                @endif
            </div>
            <div class="comments-area">
                {{-- <h4>05 Comments</h4> --}}
                {{-- <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="{{asset('img/comment/comment_1.png')}}" alt="">
            </div>
            <div class="desc">
                <p class="comment">
                    Multiply sea night grass fourth day sea lesser rule open subdue female fill
                    which them
                    Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                </p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <h5>
                            <a href="#">Emilly Blunt</a>
                        </h5>
                        <p class="date">December 4, 2017 at 3:12 pm </p>
                    </div>
                    <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> --}}
    {{-- <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="{{asset('img/comment/comment_2.png')}}" alt="">
    </div>
    <div class="desc">
        <p class="comment">
            Multiply sea night grass fourth day sea lesser rule open subdue female fill
            which them
            Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
        </p>
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <h5>
                    <a href="#">Emilly Blunt</a>
                </h5>
                <p class="date">December 4, 2017 at 3:12 pm </p>
            </div>
            <div class="reply-btn">
                <a href="#" class="btn-reply text-uppercase">reply</a>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img src="{{asset('img/comment/comment_3.png')}}" alt="">
                </div>
                <div class="desc">
                    <p class="comment">
                        Multiply sea night grass fourth day sea lesser rule open subdue female fill
                        which them
                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5>
                                <a href="#">Emilly Blunt</a>
                            </h5>
                            <p class="date">December 4, 2017 at 3:12 pm </p>
                        </div>
                        <div class="reply-btn">
                            <a href="#" class="btn-reply text-uppercase">reply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    </div>
    {{-- <div class="comment-form">
        <h4>Leave a Reply</h4>
        <form class="form-contact comment_form" action="#" id="commentForm">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                            placeholder="Write Comment"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send
                    Message</button>
            </div>
        </form>
    </div> --}}
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
            {{-- <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Resaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Modern technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Product</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Inspiration</p>
                                    <p>(21)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Health Care</p>
                                    <p>(21)</p>
                                </a>
                            </li>
                        </ul>
                    </aside> --}}
            {{-- <aside class="single_sidebar_widget popular_post_widget">
                <h3 class="widget_title">Recent Post</h3>
                <div class="media post_item">
                    <img src="{{asset('img/post/post_1.png')}}" alt="post">
            <div class="media-body">
                <a href="single-blog.html">
                    <h3>From life was you fish...</h3>
                </a>
                <p>January 12, 2019</p>
            </div>
        </div> --}}
        {{-- <div class="media post_item">
                            <img src="{{asset('img/post/post_2.png')}}" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>The Amazing Hubble</h3>
            </a>
            <p>02 Hours ago</p>
        </div>
    </div>
    <div class="media post_item">
        <img src="{{asset('img/post/post_3.png')}}" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>Astronomy Or Astrology</h3>
            </a>
            <p>03 Hours ago</p>
        </div>
    </div>
    <div class="media post_item">
        <img src="{{asset('img/post/post_4.png')}}" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>Asteroids telescope</h3>
            </a>
            <p>01 Hours ago</p>
        </div>
    </div> --}}
    {{-- </aside>
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
        </aside> --}}
    {{-- <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="{{asset('img/post/post_5.png')}}" alt="">
    </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="{{asset('img/post/post_6.png')}}" alt="">
        </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="{{asset('img/post/post_7.png')}}" alt="">
        </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="{{asset('img/post/post_8.png')}}" alt="">
        </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="{{asset('img/post/post_9.png')}}" alt="">
        </a>
    </li>
    <li>
        <a href="#">
            <img class="img-fluid" src="{{asset('img/post/post_10.png')}}" alt="">
        </a>
    </li>
    </ul>
    </aside> --}}
    {{-- <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Subscribe</button>
                        </form>
                    </aside> --}}
    </div>
    </div>
    </div>
    </div>
</section>
<!--================ Blog Area end =================-->

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
                                <li><a href="#">About Tourist Checkpoint</a></li>
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