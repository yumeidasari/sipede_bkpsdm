<nav class="main-header navbar navbar-expand navbar-blue navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

     
    </ul>

    <!-- SEARCH FORM -->
    <!--form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form-->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- User Account Menu -->
         <li class="nav-item dropdown user user-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <img src="<?php echo e(asset('/storage/img/logo-beltim.png')); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
            </a>
            <ul class="dropdown-menu">
			<!-- Menu Footer-->
              <li class="user-footer">
                <!--div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div-->
                <div class="pull-right">
                  <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                  </form>
                </div>
              </li>
            </ul>
      </li>

    </ul>
  </nav><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/adminltelayouts/header.blade.php ENDPATH**/ ?>