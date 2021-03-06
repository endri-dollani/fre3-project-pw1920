

<?php $__env->startSection('content'); ?>

<script src="https://js.stripe.com/v3/"></script>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="contact-title pb-4">Business Account Details</h4>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form " action="<?php echo e(route('checkout-business.store',)); ?>" method="POST" id="payment-form">
                    <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="col-12">
                            <h4>Business Name</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="business-name" id="business-name" type="text"
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter your business name'"
                                    placeholder="Enter your business name" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <h4>Address</h4>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="address" id="address" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter address'"
                                    placeholder="Enter address" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-12">
                                <h4>City</h4>
                            </div>
                            <div class="form-group">
                                <input class="form-control valid" name="city" id="city" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter city name'"
                                    placeholder="Enter city name" required>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="col-12">
                                <h4>Phone</h4>
                            </div>
                            <div class="form-group">
                                <input class="form-control valid"
                                     name="phone-number" id="phone-number" 
                                     type="text"
                                     placeholder="Enter phone number" 
                                     minlength="5"
                                     maxlength="15" 
                                     required>
                            </div>
                        </div>

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


                    <div class="form-group mt-3 pt-5">
                        <button type="submit" class="button button-contactForm boxed-btn">Subscribe</button>
                    </div>
                </form>
            </div>
            
            <div class="col-xl-4 col-lg-6 col-md-6">
                <!-- Single Room -->
                <div class="single-room mb-50">
                    <div class="room-caption">
                        <h3>Subscription price</h3>
                        <div class="per-night">
                            <span><u>$</u>199.99 <span>/ per mounth</span></span>
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
                            <a href="/"><img src="<?php echo e(asset('img/logo/logo2_footer.svg')); ?>" alt=""></a>
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
<script src="<?php echo e(asset('js/vendor/modernizr-3.5.0.min.js')); ?>"></script>

<!-- Jquery, Popper, Bootstrap -->
<script type="text/javascript" src="<?php echo e(asset('js/vendor/jquery-1.12.4.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<!-- Jquery Mobile Menu -->
<script type="text/javascript" src="<?php echo e(asset('js/jquery.slicknav.min.js')); ?>"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script type="text/javascript" src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
<!-- Date Picker -->
<script type="text/javascript" src="<?php echo e(asset('js/gijgo.min.js')); ?>"></script>
<!-- One Page, Animated-HeadLin -->
<script type="text/javascript" src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/animated.headline.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.magnific-popup.js')); ?>"></script>

<!-- Scrollup, nice-select, sticky -->
<script type="text/javascript" src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.nice-select.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.sticky.js')); ?>"></script>

<!-- Jquery Plugins, main Jquery -->
<script type="text/javascript" src="<?php echo e(asset('js/plugins.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>

<script src="https://js.stripe.com/v3/"></script>

<script>
            // Create a Stripe client.
        var stripe = Stripe('<?php echo e(config('services.stripe.key')); ?>');

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tp\resources\views/pages/checkout-business.blade.php ENDPATH**/ ?>