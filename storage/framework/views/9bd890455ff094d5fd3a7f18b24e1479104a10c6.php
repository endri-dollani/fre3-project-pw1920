<?php $__env->startSection('content'); ?>
<div class="container pb-50">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="blog-author pb-4 pt-4">
                <div class="media align-items-center">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>
                    <?php if($user->profile_pic == null): ?>
                    <img src="/storage/profile_pics/noprofilepic.jpg"
                        style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                    <?php else: ?>
                    <img src="/storage/profile_pics/<?php echo e($user->profile_pic); ?>"
                        style="width: 50px; height: 50px; border-radius: 50%;" alt="">
                    <?php endif; ?>


                    <div class="media-body">

                        <h4 class="pl-4"><?php echo e($user->name); ?>


                            <?php if($user->is_business == 1): ?>
                            <small class="ml-2" style="color:#30b330;"><i class="fas fa-check-circle"></i></small>
                            <?php endif; ?>


                        </h4>

                        <p class="pl-4"><?php echo e($user->user_bio); ?></p>
                    </div>


                </div>
                <?php if($user->is_business == 1): ?>
                
                <div class="blog-author pb-4 pt-4"">
                    <h2 class="contact-title" style="font-size: 16px;">Business Details</h2>
                    
                    <div class=" media align-items-center">
                        <table class="table table-striped">
                            <tr>
                                <th>Business Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Phone Number</th>
                            </tr>
                            <tr>
                                <td><?php echo e($user->business_name); ?></td>
                                <td><?php echo e($user->business_address); ?></td>
                                <td><?php echo e($user->business_city); ?></td>
                                <td><?php echo e($user->business_number); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="card ">
                <div class="card-header">Dashboard </div>

                <div class="card-body">


                    <a href="/posts/create" class="genric-btn info mr-3">Create Post</a>
                    <a href="/profile/<?php echo e($user->id); ?>/edit" class="genric-btn info mr-3">Edit Profile Info</a>
                    <?php if($user->is_business == 1): ?>
                        <a href="/business/<?php echo e($user->id); ?>/edit" class="genric-btn danger">Edit Business Info</a>
                    <?php endif; ?>
                    <h3 class="pt-4">Your Blog Posts:</h3>
                    

                    <div class="container">
                        <div class="row">



                            <?php if(count($user->posts) > 0): ?>
                            <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="container pt-5  pl-10">
                                <div class="blog_item_img">
                                    <img src="/storage/cover_images/<?php echo e($post->cover_image); ?>" class=""
                                        style="width: 90%; height: 400px;" alt="">
                                    
                                </div>

                                <div class="blog_details">
                                    <a href="/posts/<?php echo e($post->id); ?>">
                                        <h2><?php echo e($post->title); ?></h2>
                                    </a>
                                    <p><?php echo e($post->body); ?></p>

                                    <?php if($post->user->is_business == 1): ?>
                                    <div class="col-xl-8 pt-4 col-lg-8 col-md-8">
                                 <!-- Reservation Details -->
                                 <div class="single-room mb-50 ">
                                     <div class="room-caption">
                                         <?php if(Auth::user()->id == $post->user_id): ?>
                                          <h3 class="contact-title" style="color: #dca73a !important;">Reservate Now</h3> 
                                         <?php endif; ?>
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
                                <a href="/posts/<?php echo e($post->id); ?>/edit" class="genric-btn info mt-3">Edit</a>
                                <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST',
                                'class'
                                => 'float-right']); ?>

                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                <?php echo e(Form::submit('Delete', ['class' => 'genric-btn danger  mt-3'])); ?>

                                <?php echo Form::close(); ?>

                            </div>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <p>You have no posts.</p>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>
            </div>
    </div>




</div>
</div>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tp\resources\views/dashboard.blade.php ENDPATH**/ ?>