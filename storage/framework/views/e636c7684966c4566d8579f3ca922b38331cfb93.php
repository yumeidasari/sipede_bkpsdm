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
        <h4><b>DAFTAR SURAT PERJALANAN DINAS</b></h4>

        <!-- <a href="<?php echo e(url('/spd/create')); ?>" class="btn btn-primary"> Tambah </a> -->
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nomor SPD</th>
					<th>Nomor Surat Tugas</th>
					<th>Nama Pegawai</th>
					<th>NIP</th>
					<th>Nama PPK</th>
					<th width="100px">Status</th>
					<th>Action </th>
                </tr>
            </thead>
            <tbody>
				<?php $i=1 ?>
                <?php $__currentLoopData = $semua_spd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
			<?php if(auth()->guard()->check()): ?>
		<?php if(Auth::user()->role == 'PPK'): ?>
		
			<?php if($spd->ppk->id == Auth::user()->pegawai_id): ?>
                    <td> <?php echo e($i++); ?></td>
                    <td> <?php echo e($spd->spd_nomor); ?> </td>
					<td> <?php echo e($spd->surattugas->st_nomor); ?> </td>
					<td> <?php echo e($spd->pegawai->nama_pegawai); ?> </td>
					<td> <?php echo e($spd->pegawai->nip); ?> </td>
					<td> <?php echo e($spd->ppk->nama_pegawai); ?> </td>
					
				
				<?php if(\Gate::allows('PU') ): ?>
					<?php if($spd->spd_status == 0): ?>
						<td width="100px">Belum Diperiksa</td>
					<?php elseif($spd->spd_status == 1): ?>
						<td width="100px">
							<a href="<?php echo e(url("/spd/$spd->id/edit")); ?>" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
							
						Harus Revisi
						</td>
					<?php else: ?>
						<td width="100px">Approved</td>
					<?php endif; ?>
				<?php elseif((\Gate::allows('PPK') )||(\Gate::allows('ADMIN') )): ?>
					<?php if($spd->spd_status == 0): ?>
						<td width="100px">Belum Diperiksa</td>
					<?php elseif($spd->spd_status == 1): ?>
						<td width="100px">
							Harus Revisi
						</td>
					<?php else: ?>
						<td width="100px">Approved</td>
					<?php endif; ?>	
				<?php elseif(\Gate::allows('KUK')): ?>
					<?php if($spd->spd_status == 0): ?>
						<td width="100px">
							
								<a href="<?php echo e(url("/spd/$spd->id/spd_confirm_status")); ?>" class="btn btn-success btn-sm custom1" ><i class='nav-icon fas fa-check' style='color: white'></i></a>
								<a href="<?php echo e(url("/spd/$spd->id/spd_tolak_status")); ?>" class="btn btn-danger btn-sm custom1" ><i class='nav-icon fas fa-times' style='color: white'></i></a>
							
						</td>
					<?php elseif($spd->spd_status == 1): ?>
						<td>Harus Revisi</td>
					<?php else: ?>
						<td>Approved</td>
					<?php endif; ?>
				<?php endif; ?>
			
					<td>
                        <!-- <a href="<?php echo e(url("/spd/$spd->id/edit")); ?>" class="btn btn-info btn-sm">edit </a> -->
                        <!-- <a href="<?php echo e(url("/spd/$spd->id")); ?>" class="btn btn-info btn-sm">view </a> -->
						<a href="<?php echo e(url("spd/$spd->id/spd_pdf")); ?>" class="btn btn-danger btn-sm" target='_BLANK'> Export to PDF </a>
						<!-- a href="<?php echo e(url("/rincianbiaya/$spd->id/create")); ?>" class="btn btn-info btn-sm custom" > Rincian Biaya </a -->
                    </td>
                </tr>
			<?php endif; ?>
		<?php else: ?>
			
				 <td> <?php echo e($i++); ?></td>
                    <td> <?php echo e($spd->spd_nomor); ?> </td>
					<td> <?php echo e($spd->surattugas->st_nomor); ?> </td>
					<td> <?php echo e($spd->pegawai->nama_pegawai); ?> </td>
					<td> <?php echo e($spd->pegawai->nip); ?> </td>
					<td> <?php echo e($spd->ppk->nama_pegawai); ?> </td>
					
				
				<?php if(\Gate::allows('PU') ): ?>
					<?php if($spd->spd_status == 0): ?>
						<td width="100px">Belum Diperiksa</td>
					<?php elseif($spd->spd_status == 1): ?>
						<td width="100px">
							<a href="<?php echo e(url("/spd/$spd->id/edit")); ?>" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
							
						Harus Revisi
						</td>
					<?php else: ?>
						<td width="100px">Approved</td>
					<?php endif; ?>
				<?php elseif((\Gate::allows('PPK') )||(\Gate::allows('ADMIN') )): ?>
					<?php if($spd->spd_status == 0): ?>
						<td width="100px">Belum Diperiksa</td>
					<?php elseif($spd->spd_status == 1): ?>
						<td width="100px">
							Harus Revisi
						</td>
					<?php else: ?>
						<td width="100px">Approved</td>
					<?php endif; ?>	
				<?php elseif(\Gate::allows('KUK')): ?>
					<?php if($spd->spd_status == 0): ?>
						<td width="100px">
							
								<a href="<?php echo e(url("/spd/$spd->id/spd_confirm_status")); ?>" class="btn btn-success btn-sm custom1" ><i class='nav-icon fas fa-check' style='color: white'></i></a>
								<a href="<?php echo e(url("/spd/$spd->id/spd_tolak_status")); ?>" class="btn btn-danger btn-sm custom1" ><i class='nav-icon fas fa-times' style='color: white'></i></a>
							
						</td>
					<?php elseif($spd->spd_status == 1): ?>
						<td>Harus Revisi</td>
					<?php else: ?>
						<td>Approved</td>
					<?php endif; ?>
				<?php endif; ?>
			
					<td>
                        <!-- <a href="<?php echo e(url("/spd/$spd->id/edit")); ?>" class="btn btn-info btn-sm">edit </a> -->
                        <!-- <a href="<?php echo e(url("/spd/$spd->id")); ?>" class="btn btn-info btn-sm">view </a> -->
						<a href="<?php echo e(url("spd/$spd->id/spd_pdf")); ?>" class="btn btn-danger btn-sm" target='_BLANK'> Export to PDF </a>
						<!-- a href="<?php echo e(url("/rincianbiaya/$spd->id/create")); ?>" class="btn btn-info btn-sm custom" > Rincian Biaya </a -->
                    </td>
                </tr>
			
				<!-- end Else -->
		<?php endif; ?>
			<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10"><?php echo e($semua_spd->links()); ?></th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/spd/index.blade.php ENDPATH**/ ?>