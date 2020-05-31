@extends('layouts.app')

@section('content')
{{-- <div class="jubmotron text-center">
        
        <h1>{{$title}}</h1>
<p>This is the laravel app for uni web project.</p>
<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg"
        href="/register" role="button">Register</a></p>
</div> --}}
<!-- Masthead -->
<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active dot-style">
            <div class="single-slider  hero-overly slider-height d-flex align-items-center"
                data-background="{{asset('img/hero/h1_hero.jpg')}}">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-9">
                            <div class="h1-slider-caption">
                                <h1 data-animation="fadeInUp" data-delay=".4s">find out where</h1>
                                <h3 data-animation="fadeInDown" data-delay=".4s">Travel & Relax</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Booking Room Start-->
    <div class="booking-area">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <form action="{{route('home.store')}}" method="POST" >
                        {{csrf_field()}}
                        <div class="booking-wrap d-flex justify-content-between align-items-center">

                            <!-- select in date -->
                            <div class="single-select-box mb-30">
                                <!-- select out date -->
                                <div class="boking-tittle">
                                    <span> Check In Date:</span>
                                </div>
                                <div class="boking-datepicker">
                                    <input name="datepicker1" id="datepicker1" placeholder="10/12/2020" />
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <!-- select out date -->
                                <div class="boking-tittle">
                                    <span>Check OutDate:</span>
                                </div>
                                <div class="boking-datepicker">
                                    <input name="datepicker2" id="datepicker2" placeholder="12/12/2020" />
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <div class="boking-tittle">
                                    <span>Adults:</span>
                                </div>
                                <div class="select-this">
                                    
                                        <div class="select-itms">
                                            <select name="select1" id="select1">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                  
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <div class="boking-tittle">
                                    <span>Children:</span>
                                </div>
                                <div class="select-this">
                                 
                                        <div class="select-itms">
                                            <select name="select2" id="select2">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                  
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box mb-30">
                                <div class="boking-tittle">
                                    <span>Rooms:</span>
                                </div>
                                <div class="select-this">
                                
                                        <div class="select-itms">
                                            <select name="select3" id="select3">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                               
                                </div>
                            </div>
                            <!-- Single Select Box -->
                            <div class="single-select-box pt-45 mb-30">
                                <button type="submit"  class="btn select-btn">Search</button>
                               {{-- <input type="submit" class="btn select-btn" > --}}
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Room End-->

     <!-- Make customer Start-->
     <section class="make-customer-area customar-padding fix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="customer-img mb-120">
                        <img src="{{asset('img/hero/bussines_cover.jpg')}}" class="customar-img1" alt="">
                        <img src="{{asset('img/customer/customar2.png')}}" class="customar-img2" alt="">
                        {{-- <div class="service-experience heartbeat">
                            <h3>68 Years of Service<br>Experience</h3>
                        </div> --}}
                    </div>
                </div>
                <div class=" col-xl-4 col-lg-4">
                    <div class="customer-caption">
                        <span>About our company</span>
                        <h2>Customer is the hero of our story</h2>
                        <div class="caption-details">
                            <p class="pera-dtails">Our goal is to create an platform that will help tourists from 
                                all around the world to find their dream vacation destination.  </p>
                            <p> By using our website you can : <br>
                               * Find the most beautiful spots. <br>
                               * Reservate online in a secure way. <br>
                               * Marketing boost for bussines. <br>
                               * Helpful reviews.</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Make customer End-->

    {{-- <!-- Room Start -->
    <section class="room-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!--font-back-tittle  -->
                    <div class="font-back-tittle mb-45">
                        <div class="archivment-front">
                            <h3>Our Rooms</h3>
                        </div>
                        <h3 class="archivment-back">Our Rooms</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"><img src="{{asset('img/rooms/room1.jpg')}}" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"><img src="{{asset('img/rooms/room2.jpg')}}" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"> <img src="{{asset('img/rooms/room3.jpg')}}" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"><img src="{{asset('img/rooms/room4.jpg')}}" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"><img src="{{asset('img/rooms/room5.jpg')}}" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!-- Single Room -->
                    <div class="single-room mb-50">
                        <div class="room-img">
                            <a href="rooms.html"> <img src="{{asset('img/rooms/room6.jpg')}}" alt=""></a>
                        </div>
                        <div class="room-caption">
                            <h3><a href="rooms.html">Classic Double Bed</a></h3>
                            <div class="per-night">
                                <span><u>$</u>150 <span>/ par night</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="room-btn pt-70">
                    <a href="#" class="btn view-btn1">View more <i class="ti-angle-right"></i> </a>
                </div>
            </div>
        </div>

    </section>
    <!-- Room End --> --}}

     <!-- Dining Start -->
     <div class="dining-area dining-padding-top">
        <!-- Single Left img -->
        <div class="single-dining-area ">

            <div class="container">
                <div class="row justify-content-end">
            <img src="{{asset('img/customer/customar2.png')}}" class="customar-img2" alt="">

                    <div class="col-lg-8 col-md-8">
                        <div class="dining-caption">
                            <span>Grow as a bussines</span>
                            <h3>Create offers and make your customers happy!</h3>
                            <p>By using our website you can promote your tourism business by <br> 
                                creating reservation tables for customers. <br> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single Right img -->
        <div class="single-dining-area  ">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-8 col-md-8">
                        <div class="dining-caption text-right">
                            <span>Our Services</span>
                            <h3>What we offer.</h3>
                            <p>
                                By using this website you have acces to <br> post and create reservation tables, for your customers. <br>
                                Transactions are made online and are secure. <br>
                            </p>
                          
                        </div>

                    </div>
                    <img src="{{asset('img/customer/customar2.png')}}" class="customar-img2" alt="">

                </div>
            </div>
        </div>
    </div>
    <!-- Dining End -->

     <!-- Testimonial Start -->
     <div class="testimonial-area t-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial pt-65">
                            <!-- Testimonial tittle -->
                            <div class="font-back-tittle mb-105">
                                <div class="archivment-front">
                                    <img src="{{asset('img/team/Endri.jpg')}}" style="width:100px; height: 100px; border-radius: 50%;" alt="">
                                </div>
                                <h3 class="archivment-back">Developers</h3>
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                {{-- <p>Yoripsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi.
                                </p> --}}
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Endri Dollani, <span>Frontend & Backend Developer</span> </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial  pt-65">
                            <!-- Testimonial tittle -->
                            <div class="font-back-tittle mb-105">
                                <div class="archivment-front">
                                    <img src="{{asset('img/team/Dea.png')}}" style="width:100px; height: 100px; border-radius: 50%;" alt="">
                                </div>
                                <h3 class="archivment-back">Developers</h3>
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                {{-- <p>Yorem im dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi.
                                </p> --}}
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Dea Tahirllari, <span>Frontend Developer</span> </span>
                                </div>
                            </div>
                        </div>
                         <!-- Single Testimonial -->
                         <div class="single-testimonial  pt-65">
                            <!-- Testimonial tittle -->
                            <div class="font-back-tittle mb-105">
                                <div class="archivment-front">
                                    <img src="{{asset('img/team/Eniani.png')}}" style="width:100px; height: 100px; border-radius: 50%;" alt="">
                                </div>
                                <h3 class="archivment-back">Developers</h3>
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                {{-- <p>Yit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi.
                                </p> --}}
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Enian Mehmetaj, <span>Frontend Developer</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    {{-- <!-- Blog Start -->
    <div class="blog-area blog-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <!-- Seciton Tittle  -->
                    <div class="font-back-tittle mb-50">
                        <div class="archivment-front">
                            <h3>Our Blog</h3>
                        </div>
                        <h3 class="archivment-back">Recent News</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="{{asset('img/our_blog/blog-img1.jpg')}}" alt=""></a>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-cap-top d-flex justify-content-between mb-40">
                                <span>news</span>
                                <ul>
                                    <li>by<a href="#"> Jhon Guru</a></li>
                                </ul>
                            </div>
                            <div class="blog-cap-mid">
                                <p><a href="single-blog.html">5 Simple Tricks for Getting Stellar Hotel Service Wherever
                                        You Are</a></p>
                            </div>
                            <!-- Comments -->
                            <div class="blog-cap-bottom d-flex justify-content-between">
                                <span>Feb 28, 2020</span>
                                <span><img src="{{asset('img/our_blog/blog-comments-icon.jpg')}}" alt="">3</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="single-blog.html"> <img src="{{asset('img/our_blog/blog-img2.jpg')}}" alt=""></a>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-cap-top d-flex justify-content-between mb-40">
                                <span>news</span>
                                <ul>
                                    <li>by<a href="#"> Jhon Guru</a></li>
                                </ul>
                            </div>
                            <div class="blog-cap-mid">
                                <p><a href="single-blog.html">5 Simple Tricks for Getting Stellar Hotel Service Wherever
                                        You Are</a></p>
                            </div>
                            <!-- Comments -->
                            <div class="blog-cap-bottom d-flex justify-content-between">
                                <span>Feb 28, 2020</span>
                                <span><img src="{{asset('img/our_blog/blog-comments-icon.jpg')}}" alt="">3</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="single-blog.html"><img src="{{asset('img/our_blog/blog-img3.jpg')}}" alt=""></a>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-cap-top d-flex justify-content-between mb-40">
                                <span>news</span>
                                <ul>
                                    <li>by<a href="#"> Jhon Guru</a></li>
                                </ul>
                            </div>
                            <div class="blog-cap-mid">
                                <p><a href="single-blog.html">5 Simple Tricks for Getting Stellar Hotel Service Wherever
                                        You Are</a></p>
                            </div>
                            <!-- Comments -->
                            <div class="blog-cap-bottom d-flex justify-content-between">
                                <span>Feb 28, 2020</span>
                                <span><img src="{{asset('img/our_blog/blog-comments-icon.jpg')}}" alt="">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Gallery img Start-->
    <div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-active owl-carousel">
                        <div class="gallery-img">
                            <a href="#"><img src="{{asset('img/gallery/gallery1.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="{{asset('img/gallery/gallery2.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a href="#"><img src="{{asset('img/gallery/gallery3.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery img End--> --}}
</main>
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
                           <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="#">FRE3</a>
 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
                                           class="email_icon newsletter-submit button-contactForm"><img src="{{asset('img/logo/form-iocn.jpg')}}" alt=""></button>
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