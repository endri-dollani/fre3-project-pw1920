@extends('layouts.app')

@section('content')

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="contact-title pb-4">Reservation Details</h4>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form " action="{{route('post.reservated')}}" method="POST" id="payment-form">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-12">
                            <h4>Name</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text"
                                 
                                    value="{{$user->name}}" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <h4>Email</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="text"
                                    value="{{$user->email}}" required>
                            </div>
                        </div>
                        
                        {{-- <div class="col-sm-6">
                            <div class="col-12">
                                <h4>Province</h4>
                            </div>
                            <div class="form-group">
                                <input class="form-control valid" name="province" id="text" type="province"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter province name'"
                                    placeholder="Enter province name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-12">
                                <h4>Postal Code</h4>
                            </div>
                            <div class="form-group">
                                <input class="form-control valid" name="postal-code" id="postal-code" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter postal code'"
                                    placeholder="Enter postal code">
                            </div>
                        </div> --}}
                     

                    </div>

                    <div class="col-12">
                        <h4 class="contact-title pt-4 pb-4">Payment Details</h4>
                        <div class="form-group StripeElement">
                      
                            
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                      

                         </div>
                    </div>

                    <input type="hidden" id="price" name="price" value="{{$post->price}}">
                    <div class="form-group mt-3 pt-5">
                        <button type="submit" class="button button-contactForm boxed-btn">Subscribe</button>
                    </div>
                </form>
            </div>
            {{-- <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Faculty of Natural Sciences.</h3>
                        <p>Bulevardi Zogu I, Tiranë</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>Tel: 04 255 6987</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>contact@touristcheckpoint.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-4 col-lg-6 col-md-6">
                <!-- Single Room -->
                <div class="single-room mb-50">
                    <div class="room-caption">
                        <h3>Reservation Details</h3>
                        
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

                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->


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

<script>
    // Create a Stripe client.
var stripe = Stripe('{{config('services.stripe.key')}}');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
    color: '#aab7c4'
    }
},
invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
}
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
var displayError = document.getElementById('card-errors');
if (event.error) {
    displayError.textContent = event.error.message;
} else {
    displayError.textContent = '';
}
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
event.preventDefault();

stripe.createToken(card).then(function(result) {
    if (result.error) {
    // Inform the user if there was an error.
    var errorElement = document.getElementById('card-errors');
    errorElement.textContent = result.error.message;
    } else {
    // Send the token to your server.
    stripeTokenHandler(result.token);
    }
});
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
// Insert the token ID into the form so it gets submitted to the server
var form = document.getElementById('payment-form');
var hiddenInput = document.createElement('input');
hiddenInput.setAttribute('type', 'hidden');
hiddenInput.setAttribute('name', 'stripeToken');
hiddenInput.setAttribute('value', token.id);
form.appendChild(hiddenInput);

// Submit the form
// alert(token.id);
form.submit();
}
</script>
@endsection