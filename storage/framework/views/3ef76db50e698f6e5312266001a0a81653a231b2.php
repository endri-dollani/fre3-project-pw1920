

<?php $__env->startSection('content'); ?>


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
                        <img src="/storage/cover_images/<?php echo e($post->cover_image); ?>" class=""
                            style="width: 90%; height: 400px;" alt="">
                    </div>
                    

                    <div class="blog_details">
                        <h2><?php echo e($post->title); ?></h2>
                        
                        <p class="excert">
                            <?php echo e($post->body); ?>

                        </p>
                    </div>
                    <?php if($post->user->is_business == 1): ?>
                    <div class="col-xl-8 pt-4 col-lg-8 col-md-8">
                        <!-- Reservation Details -->
                        <div class="single-room mb-50 ">
                            <div class="room-caption">
                                <h3><a href="<?php echo e(route('post.reservate',$post->id)); ?>"
                                        style="color: #dca73a !important;">Reservate Now</a></h3>
                                <div>
                                    <span>Checkin date:</span>
                                    <h5> <?php echo e($post->checkin_date); ?></h5>
                                    <span>Checkout date:</span>
                                    <h5> <?php echo e($post->checkout_date); ?></h5>
                                </div>
                                <span>Our <?php echo e($post->rooms); ?> room('s) can accommodate:</span>
                                <div class="pt-2">
                                    <h5><?php echo e($post->adults); ?> Adult('s) and <?php echo e($post->kids); ?> Children('s) </h5>
                                </div>
                                <span>Price:</span>
                                <div class="per-night">
                                    <span><u>$</u><?php echo e($post->price); ?> <span>/ per night</span></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
                
                <div class="blog-author">
                    <div class="media align-items-center">
                        <?php if(!Auth::guest()): ?>
                        <?php if(Auth::user()->id == $post->user_id): ?>

                        <a href="/dashboard">
                            <?php if($post->user->profile_pic == null): ?>
                            <img src="/storage/profile_pics/noprofilepic.jpg"
                                style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                            <?php else: ?>
                            <img src="/storage/profile_pics/<?php echo e($post->user->profile_pic); ?>"
                                style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                            <?php endif; ?>
                            <div class="media-body">
                                <a href="/dashboard">
                                    <h4><?php echo e($post->user->name); ?>

                                        <?php if($post->user->is_business == 1): ?>
                                        <small class="ml-2" style="color:#30b330;"><i
                                                class="fas fa-check-circle"></i></small>
                                        <?php endif; ?>

                                    </h4>
                                </a>
                                <p><?php echo e($post->user->user_bio); ?></p>
                            </div>

                        </a>


                        <?php else: ?>
                        <?php if($post->user->profile_pic == null): ?>
                        <img src="/storage/profile_pics/noprofilepic.jpg"
                            style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                        <?php else: ?>
                        <img src="/storage/profile_pics/<?php echo e($post->user->profile_pic); ?>"
                            style="width: 50px; height: 50px; border-radius: 50%;" alt="">

                        <?php endif; ?>

                        <div class="media-body">
                            <h4><?php echo e($post->user->name); ?>

                                <?php if($post->user->is_business == 1): ?>
                                <small class="ml-2" style="color:#30b330;"><i class="fas fa-check-circle"></i></small>
                                <?php endif; ?>
                            </h4>
                            <p><?php echo e($post->user->user_bio); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php else: ?>
                        <?php if($post->user->profile_pic == null): ?>
                        <img src="/storage/profile_pics/noprofilepic.jpg"
                            style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                        <?php else: ?>
                        <img src="/storage/profile_pics/<?php echo e($post->user->profile_pic); ?>"
                            style="width: 50px; height: 50px; border-radius: 50%;" alt="">

                        <?php endif; ?>
                        <div class="media-body">
                            <h4><?php echo e($post->user->name); ?>

                                <?php if($post->user->is_business == 1): ?>
                                <small class="ml-2" style="color:#30b330;"><i class="fas fa-check-circle"></i></small>
                                <?php endif; ?>
                            </h4>
                            <p><?php echo e($post->user->user_bio); ?></p>
                        </div>

                        <?php endif; ?>
                        

                    </div>
                    <?php if($post->user->is_business == 1): ?>
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
                                <td><?php echo e($post->user->business_name); ?></td>
                                <td><?php echo e($post->user->business_address); ?></td>
                                <td><?php echo e($post->user->business_city); ?></td>
                                <td><?php echo e($post->user->business_number); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="comments-area">
                
                
    
    </div>
    
    </div>
    <div class="col-lg-4">
        <div class="blog_right_sidebar">
            <aside class="single_sidebar_widget search_widget">
                <form action="<?php echo e(route('search')); ?>" method="GET">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="query" id="query"
                                value="<?php echo e(request()->input('query')); ?>" placeholder='Search Keyword'>
                        </div>
                    </div>
                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit">Search</button>
                </form>
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

<!-- contact js -->
<script type="text/javascript" src="<?php echo e(asset('js/contact.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.form.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.validate.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/mail-script.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.ajaxchimp.min.js')); ?>"></script>

<!-- Jquery Plugins, main Jquery -->
<script type="text/javascript" src="<?php echo e(asset('js/plugins.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tp\resources\views/posts/show.blade.php ENDPATH**/ ?>