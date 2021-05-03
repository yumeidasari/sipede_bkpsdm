<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      
      <img src="<?php echo e(asset('/storage/img/logo-beltim.png')); ?>" alt="Sipede Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>SIPEDE</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo e(url('dashboard')); ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!--i class="right fas fa-angle-left"></i-->
              </p>
            </a>
            
          </li>
       <?php if(auth()->guard()->check()): ?>
		<?php if(\Gate::allows('ADMIN')): ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="<?php echo e(url('pegawai')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Pegawai</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="<?php echo e(url('anggaran')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Anggaran</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="<?php echo e(url('pengguna')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Pengguna Aplikasi</p>
                </a>
              </li>
              
           
            </ul>
          </li>
		  
		   <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Data Referensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                          
              <li class="nav-item">
                <a href="<?php echo e(url('opd')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>OPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('jabatan')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Jabatan</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="<?php echo e(url('golongan')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Pangkat/Golongan</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="<?php echo e(url('transportasi')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Alat Transportasi</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="<?php echo e(url('biaya')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Biaya</p>
                </a>
              </li>
			  
			  <li class="nav-item">
                <a href="<?php echo e(url('kota')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Kota</p>
                </a>
              </li>
			  
            </ul>
          </li>
			<?php endif; ?>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Surat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!--li class="nav-item">
                <a href="<?php echo e(url('notadinas')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Nota Dinas</p>
                </a>
              </li-->
              <li class="nav-item">
                <a href="<?php echo e(url('surattugas')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Surat Tugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('spd')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Surat Perjalanan Dinas</p>
                </a>
              </li>
 
            </ul>
          </li>
		  
		  <?php if((\Gate::allows('PPK'))||(\Gate::allows('ADMIN'))): ?>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plane"></i>
              <p>
                Data Perjalanan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            
              <li class="nav-item">
                <a href="<?php echo e(url('berkas')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Upload Berkas</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?php echo e(url('rincianbiaya')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Rincian Biaya </p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="<?php echo e(url('kuitansi')); ?>" class="nav-link">
                  <i class="far fa-circle-o nav-icon"></i>
                  <p>Kuitansi </p>
                </a>
              </li>
            </ul>
          </li>
		  <?php endif; ?>
		<?php endif; ?>
          <li class="nav-item">
           
          </li>
		
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar --><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/adminltelayouts/sidebar.blade.php ENDPATH**/ ?>