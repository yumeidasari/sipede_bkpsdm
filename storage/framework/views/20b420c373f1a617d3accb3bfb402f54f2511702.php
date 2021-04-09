<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js "></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
                          <?php if(auth()->guard()->check()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('aset')); ?>"><?php echo e(__('Aset')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="<?php echo e(url('aset/charts')); ?>"><?php echo e(__('Dashboard')); ?></a>
                            </li>
                            <?php if(\Gate::allows('kelola-kategori')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('kategori')); ?>"><?php echo e(__('Kategori')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(\Gate::allows('kelola-lokasi')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('lokasi')); ?>"><?php echo e(__('Lokasi')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(\Gate::allows('kelola-satker')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('satker')); ?>"><?php echo e(__('Satker')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php endif; ?>
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Master <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(url('opd')); ?>">
                                        <?php echo e(__('Opd')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(url('pegawai')); ?>">
                                        <?php echo e(__('Pegawai')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(url('jabatan')); ?>">
                                        <?php echo e(__('Jabatan')); ?>

                                    </a>
									<a class="dropdown-item" href="<?php echo e(url('golongan')); ?>">
                                        <?php echo e(__('Golongan')); ?>

                                    </a>

                                </div>
                                
							</li>
							
							
							<li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('surattugas')); ?>"><?php echo e(__('Surat Tugas')); ?></a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('notadinas')); ?>"><?php echo e(__('Nota Dinas')); ?></a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('spd')); ?>"><?php echo e(__('SPD')); ?></a>
                            </li>
					</ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                            <?php /*<!--
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                -->
                                */?>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php echo $__env->yieldPushContent('scripts'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/layouts/app.blade.php ENDPATH**/ ?>