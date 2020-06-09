<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'TouristCheckpoint')); ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/favicon.svg')); ?>">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://js.stripe.com/v3/"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/gijgo.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/slicknav.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/fontawesome-all.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/themify-icons.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/stripe-payment.css')); ?>" type="text/css">
   
</head>
<body>
    
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>TP</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->
    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
        <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    
</body>
</html>
<?php /**PATH C:\xampp\htdocs\tp\resources\views/layouts/app.blade.php ENDPATH**/ ?>