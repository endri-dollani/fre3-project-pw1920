

<?php $__env->startSection('content'); ?>
<div class="container pt-4">
    <h1 class="contact-title">Edit Profile</h1>
<?php echo Form::open(['action' => ['UserProfileController@update', $user->id], 'method' => 'POST', 'enctype' =>
'multipart/form-data']); ?>

<div class="form-group ">
    <?php echo e(Form::label('name', 'Name')); ?>

    <?php echo e(Form::text('name', $user->name, ['class' => 'form-control col-sm-4', 'placeholder' => 'Name'])); ?>

</div>

<div class="form-group">
    <?php echo e(Form::label('bio', 'Bio')); ?>

    <?php echo e(Form::textarea('bio', $user->user_bio, ['class' => 'form-control', 'placeholder' => 'Bio'])); ?>

</div> 

<div class="form-froup pb-3">
    <?php echo e(Form::label('profile_pic', 'Upload a profile picture:')); ?> 
    <?php echo e(Form::file('profile_pic')); ?>    
</div>   
<?php echo e(Form::hidden('_method', 'PUT')); ?> 
<?php echo e(Form::submit('Submit', ['class' => 'genric-btn info'])); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tp\resources\views/profile/edit.blade.php ENDPATH**/ ?>