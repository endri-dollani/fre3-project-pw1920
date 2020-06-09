

<?php $__env->startSection('content'); ?>
<div class="container pt-4">
    <h1 class="contact-title">Create Post</h1>
    <?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>


    <div class="form-group">
        <?php echo e(Form::label('title', 'Title')); ?>

        <?php echo e(Form::text('title', '', ['class' => 'form-control col-sm-4', 'placeholder' => 'Title'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('body', 'Body')); ?>

        <?php echo e(Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

    </div>
    <div class="form-froup pb-3">
        <?php echo e(Form::file('cover_image')); ?>

    </div>

    <?php if(Auth::user()->is_business == 1): ?>
        <hr>
        <h2 class="contact-title">Reservation card details</h2>
        <div class="form-group">
            <?php echo e(Form::label('checkin', 'Checkin date')); ?>

            <?php echo e(Form::text('checkin', '', ['class' => 'form-control col-sm-4', 'placeholder' => 'dd/mm/yyyy'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('checkout', 'Checkout date')); ?>

            <?php echo e(Form::text('checkout', '', ['class' => 'form-control col-sm-4', 'placeholder' => 'dd/mm/yyyy'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('adults', 'Adults/per room')); ?>

            <?php echo e(Form::text('adults', '', ['class' => 'form-control col-sm-4', 'placeholder' => 'Number of adults'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('children', 'Children/per room')); ?>

            <?php echo e(Form::text('children', '', ['class' => 'form-control col-sm-4', 'placeholder' => 'Number of children'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('rooms', 'Rooms available')); ?>

            <?php echo e(Form::text('rooms', '', ['class' => 'form-control col-sm-4', 'placeholder' => 'Number of rooms available'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('price', 'Reservation Price')); ?>

            <?php echo e(Form::text('price', '', ['class' => 'form-control col-sm-4', 'placeholder' => 'Enter a price'])); ?>

        </div>
        
    <?php endif; ?>
    <?php echo e(Form::submit('Submit', ['class' => 'genric-btn info'])); ?>

        <br> <br>
        <br> <br>
        <br> <br>
    <?php echo Form::close(); ?>

</div>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tp\resources\views/posts/create.blade.php ENDPATH**/ ?>