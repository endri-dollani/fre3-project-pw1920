@extends('layouts.app')

@section('content')


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
                                     < <li><span style="font-weight: 10;">Tel: 04 255 6987</span></li>
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