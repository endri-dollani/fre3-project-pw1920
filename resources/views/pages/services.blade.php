@extends('layouts.app')

@section('content')

{{-- <h1>{{$title}}</h1>

@if (count($services) > 0)
<ul class="list-group">
    @foreach ($services as $service)
    <li class="list-group-item">{{$service}}</li>
    @endforeach
</ul>
@endif --}}

<main>

    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
            data-background="{{asset('img/hero/bussines_cover.jpg')}}">
            <div class="container">
                <div class="row ">
                    <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                        <div class="hero-caption">
                            <span>Business</span>
                            <h2>Find out why this is the right website for your business.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

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

    {{-- <!-- Testimonial Start -->
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
                                    <img src="{{asset('img/logo/testimonial.png')}}" alt="">
                                </div>
                                <h3 class="archivment-back">Testimonial</h3>
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi.
                                </p>
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Clifford Frazier, <span>Regular Client</span> </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial  pt-65">
                            <!-- Testimonial tittle -->
                            <div class="font-back-tittle mb-105">
                                <div class="archivment-front">
                                    <img src="{{asset('img/logo/testimonial.png')}}" alt="">
                                </div>
                                <h3 class="archivment-back">Testimonial</h3>
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <p>Yorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi.
                                </p>
                                <div class="testimonial-ratting">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Clifford Frazier, <span>Regular Client</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
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
    <br> <br> <br> <br> <br>
</main>
<footer>
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