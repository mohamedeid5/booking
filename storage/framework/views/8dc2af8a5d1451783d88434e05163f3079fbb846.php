
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->check()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="list-group" style="padding-top: 8px;">
                                <span class="btn btn-primary"><?php echo e(ip()->iso_code); ?></span>
                            </li>
                             <li class="list" style="padding-top: 8px;">
                                 <span class="btn btn-info"><?php echo e(ip()->currency); ?></span>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user() ?Auth::user()->first_name : Auth::guard('admin')->user()->first_name . ' '); ?> <span class="caret"></span>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(url('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(url('logout')); ?>" method="get" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                           
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Books
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo e(url('/admin/books')); ?>">Books</a>
                                 <?php if(auth()->guard('admin')->check()): ?>
                                <a class="dropdown-item" href="<?php echo e(url('/admin/city')); ?>">Cities</a>
                                <a class="dropdown-item" href="<?php echo e(url('/admin/hotels')); ?>">Hotels</a>
                                <?php endif; ?>

                              </div>
                            </div>
                            <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

       

