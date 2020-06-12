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

<style type="text/css">
    
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

<div class="container pt-5">
    <a href="/posts" class="genric-btn info">Go Back</a>
</div>
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img" style="text-align: left !important;">
                        <img id="myImg" src="/storage/cover_images/{{$post->cover_image}}" class=""
                        style="width: 100%; max-width:700px; max-height: 400px;" alt="">
                    </div>
                

                    <div class="blog_details">
                        <h2>{{$post->title}}</h2>
                  
                        <p class="excert">
                            {{$post->body}}
                        </p>
                    </div>
                   
                    @if ($post->user->is_business == 1 && $post->price != null)
                       
                        <div>
                            <hr>
                            <h3>Reservation Details</h3>
                        </div>
                        <div>
                            <span style="color: #0056b3;">Checkin date:</span>
                            <h5> {{$post->checkin_date}}</h5>
                            <span style="color: #0056b3;">Checkout date:</span> 
                            <h5> {{$post->checkout_date}}</h5>
                        </div>
                        
                        @if ($post->rooms == 1)
                            <span style="color: #0056b3;">Our room  can accommodate:</span>
                        @else
                            <span style="color: #0056b3;">Our {{$post->rooms}} rooms can accommodate:</span>
                            
                        @endif
                    
                        <div class="pt-2">
                            <h5>
                                @if ($post->adults > 1)
                                    <i class="far fa-hand-point-right"></i> {{$post->adults}} Adults
                                    
                                @else
                                    <i class="far fa-hand-point-right"></i> {{$post->adults}} Adult
                                    
                                @endif
                                
                                <br>
                                @if ($post->kids == 1)
                                    <i class="far fa-hand-point-right"></i> {{$post->kids}} Child
                                
                                @else
                                    <i class="far fa-hand-point-right"></i> {{$post->kids}} Children
                                    
                                @endif
                            </h5>
                        </div>
                        
                        <span style="color: #0056b3;">Price:</span>
                        
                        <div class="per-night">
                            <h5><span style="font-weight: bold;"> {{$post->price}}</span> <i class="fas fa-dollar-sign"></i> / per night</h5>
                        </div>

                        <a href="/reservate/{{$post->id}}"  class="genric-btn info mt-4" style="color: white !important;">Checkout Now</a>
                    @endif
                </div>
     
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
            

                    </div>
                    @if ($post->user->is_business == 1)
                        <div class="blog-author pb-4 pt-4"">
                            <h3>About {{$post->user->name}}'s business:</h3>
                            <h5>Business name: {{$post->user->business_name}}</h5>                            
                            <h5>Headquarters in: {{$post->user->business_city}}</h5>                            
                            <h5>Address: {{$post->user->business_address}}</h5>                            
                            <h5>Phone number: {{$post->user->business_number}}</h5>                            
                        </div>
                    @endif
            </div>
            <div class="comments-area">

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

        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01">
          <div id="caption"></div>
        </div>
        <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
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