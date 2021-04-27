<?php $__env->startSection('content'); ?>
    <div class="container pt-4">
        <h4><b>DAFTAR PEGAWAI</b></h4>
		<hr>
        <a href="<?php echo e(url('/pegawai/create')); ?>" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Pegawai</th>
					<th>NIP</th>
					<th>Jabatan</th>
					<th>Pangkat/Golongan</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				<?php $i=1 ?>
                <?php $__currentLoopData = $semua_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($i++); ?></td>
                    <td> <?php echo e($pegawai->nama_pegawai); ?> </td>
					<td> <?php echo e($pegawai->nip); ?> </td>
					<td> <?php echo e($pegawai->jabatan->jabatan); ?> </td>
					<td> <?php echo e($pegawai->golongan->pangkat); ?>/<?php echo e($pegawai->golongan->golongan); ?> </td>
                    <td>
                        <a href="<?php echo e(url("/pegawai/$pegawai->id/edit")); ?>" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
						<a href="<?php echo e(url("/pegawai/$pegawai->id")); ?>" class="btn btn-primary btn-sm" title='View'><i class='fa fa-file' style='color: white'></i></a>
                        <!-- a href="<?php echo e(url("/pegawai/$pegawai->id/delete")); ?>" class="btn btn-danger btn-sm" title='Delete'><i class='fa fa-trash' style='color: white'></i></a -->
                        <!-- a href="<?php echo e(url("/pegawai/$pegawai->id")); ?>" class="btn btn-info btn-sm">view </a-->
						<!-- button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalView">
							View
						</button>
						
						<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus">
							<i class='fa fa-trash' style='color: black'></i>
						</button -->
                    </td>
					
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10"><?php echo e($semua_pegawai->links()); ?></th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
	
<!-- contoh modal View Data -->
<div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="modalViewLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalViewLabel">Detail Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="container pt-4">
	  
	  
      <div class="modal-body">
		<table class="table  table-striped">
		<tbody>
			<tr>
                <td>Nama Pegawai</td>
				<td>:</td>
                <td><?php echo e($pegawai->nama_pegawai); ?></td>
            </tr>
			<tr>
                <td>NIP</td>
				<td>:</td>
                <td><?php echo e($pegawai->nip); ?></td>
            </tr>
			<tr>
                <td>Jabatan</td>
				<td>:</td>
                <td><?php echo e($pegawai->jabatan->jabatan); ?></td>
            </tr>
			<tr>
                <td>Pangkat/Golongan</td>
				<td>:</td>
                <td><?php echo e($pegawai->golongan->pangkat); ?>/<?php echo e($pegawai->golongan->golongan); ?></td>
            </tr>
		</tbody>
		</table> 
      </div>
		<br>
		<br>
      <div class="modal-footer">
		<center>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
        <!-- input type="submit" value="Ya hapus" class="btn btn-danger" -->
		</center>
		<br/>
      </div>
	  
	  </div> <!-- end container-->
    </div>
  </div>
</div>

<!-- contoh modal Hapus Data -->
<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalHapusLabel">Hapus Data Pegawai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div class="container pt-4">
	  <form method="POST" action="<?php echo e(url("pegawai/$pegawai->id")); ?>">
	  <?php echo e(csrf_field()); ?>


                    <input type="hidden" name="_method" value="DELETE">
      <!--div class="modal-body"-->
		<br>
		<br>
        <center>Anda yakin akan menghapus data?</center>
      <!--/div-->
		<br>
		<br>
      <!--div class="modal-footer"-->
		<center>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input type="submit" value="Ya hapus" class="btn btn-danger">
		</center>
		<br/>
      <!--/div-->
	  </form>
	  </div> <!-- end container -->
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/pegawai/index.blade.php ENDPATH**/ ?>