<?php $__env->startSection('content'); ?>
<head>
	<style>
		.custom {
		width: 110px !important;
		}
		.custom1 {
		width: 30px !important;
		}
	</style>
</head>
    <div class="container pt-4">
        <h4><b>DAFTAR SURAT TUGAS</b></h4>
		<hr>
		<?php if(auth()->guard()->check()): ?>
		<?php if(\Gate::allows('PU')): ?>
        <a href="<?php echo e(url('/surattugas/create')); ?>" class="btn btn-primary"> Tambah </a>
		<?php endif; ?>
		<?php endif; ?>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nomor Surat Tugas</th>
					<th>Dasar Penugasan</th>
					<th>Nama Pegawai</th>
					<th>NIP</th>
					<th>Jabatan</th>
					<th width="100px">Status</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				<?php $i=1 ?>
                <?php $__currentLoopData = $semua_surattugas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($i++); ?></td>
                    <td> <?php echo e($st->st_nomor); ?> </td>
					<td> <?php echo e($st->st_dasar_penugasan); ?> </td>
					<td> <?php echo e($st->pegawai->nama_pegawai); ?> </td>
					<td> <?php echo e($st->pegawai->nip); ?> </td>
					<td> <?php echo e($st->pegawai->jabatan->jabatan); ?> </td>
				<?php if(auth()->guard()->check()): ?>
				<?php if(\Gate::allows('PU') ): ?>
					<?php if($st->st_status == 0): ?>
						<td width="100px">Belum Diperiksa</td>
					<?php elseif($st->st_status == 1): ?>
						<td width="100px">
							<a href="<?php echo e(url("/surattugas/$st->id/edit")); ?>" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
							Harus Revisi
						</td>
					<?php else: ?>
						<td width="100px">Approved</td>
					<?php endif; ?>
				<?php elseif((\Gate::allows('PPK') )||(\Gate::allows('ADMIN') )): ?>
					<?php if($st->st_status == 0): ?>
						<td width="100px">Belum Diperiksa</td>
					<?php elseif($st->st_status == 1): ?>
						<td width="100px">
							Harus Revisi
						</td>
					<?php else: ?>
						<td width="100px">Approved</td>
					<?php endif; ?>	
				<?php elseif(\Gate::allows('KUK')): ?>
					<?php if($st->st_status == 0): ?>
						<td width="100px">
							
								<a href="<?php echo e(url("/surattugas/$st->id/st_confirm_status")); ?>" class="btn btn-success btn-sm custom1" ><i class='nav-icon fas fa-check' style='color: white'></i></a>
								<a href="<?php echo e(url("/surattugas/$st->id/st_tolak_status")); ?>" class="btn btn-danger btn-sm custom1" ><i class='nav-icon fas fa-times' style='color: white'></i></a>
							
						</td>
					<?php elseif($st->st_status == 1): ?>
						<td>Harus Revisi</td>
					<?php else: ?>
						<td>Approved</td>
					<?php endif; ?>
				<?php endif; ?>
				<?php endif; ?>
                    <td>
                       <!-- <a href="<?php echo e(url("/surattugas/$st->id/edit")); ?>" class="btn btn-info btn-sm">edit </a> -->
                       <!-- <a href="<?php echo e(url("/surattugas/$st->id")); ?>" class="btn btn-info btn-sm">view </a> -->
				
						<a href="<?php echo e(url("surattugas/$st->id/surattugas_pdf")); ?>" class="btn btn-danger btn-sm custom" target='_BLANK' > Export to PDF </a><br>
					
				<?php if(auth()->guard()->check()): ?>
					<?php if(\Gate::allows('PU')): ?>
						<a href="<?php echo e(url("/spd/$st->id/create")); ?>" class="btn btn-secondary btn-sm custom" > Buat SPD </a><br>
					<?php endif; ?>
				<?php endif; ?>			
						<!--a href="<?php echo e(url("/berkas/$st->id/create")); ?>" class="btn btn-info btn-sm custom" > Upload Berkas </a-->
						
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10"><?php echo e($semua_surattugas->links()); ?></th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/surattugas/index.blade.php ENDPATH**/ ?>