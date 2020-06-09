
<header>
    <!-- Header Start -->
    <div class="header-area header-sticky">
        <div class="main-header ">
            <div class="container">
                <div class="row align-items-center">
                    <!-- logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="/"><img src="<?php echo e(asset('img/logo/logo.svg')); ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12 ">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/services">Business</a></li>
                                    <li><a href="/posts">Blog</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <?php if(auth()->guard()->guest()): ?>
                                    <li><a href="<?php echo e(route('login')); ?>"  ><?php echo e(__('Login')); ?></a></li>
                                    <?php if(Route::has('register')): ?>
                                    <li><a href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
                                    <?php endif; ?>
                                    <?php else: ?>   
                                    <li><a href="/dashboard"> My Profile</a>
                                        <ul class="submenu">
                                            <li><a href="/dashboard">Dashboard</a></li>
                                            <?php if( Auth::user()->is_business == 0): ?>
                                               <li><a href="/checkout-business">Upgrade to business</a></li>
                                            <?php endif; ?>
                                            <li>
                                                <a href="single-blog.html" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <?php echo e(__('Logout')); ?>

                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header><?php /**PATH C:\xampp\htdocs\tp\resources\views/inc/navbar.blade.php ENDPATH**/ ?>