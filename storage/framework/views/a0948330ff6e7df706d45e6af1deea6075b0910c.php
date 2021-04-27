<?php $__env->startSection('content'); ?>
<head>
	<style>
		.custom {
		width: 110px !important;
		}
	</style>
</head>
    <div class="container pt-4">
        <h4><b>DAFTAR SURAT TUGAS</b></h4>
		<hr>
        <a href="<?php echo e(url('/surattugas/create')); ?>" class="btn btn-primary"> Tambah </a>
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
                    <td>
                       <!-- <a href="<?php echo e(url("/surattugas/$st->id/edit")); ?>" class="btn btn-info btn-sm">edit </a> -->
                       <!-- <a href="<?php echo e(url("/surattugas/$st->id")); ?>" class="btn btn-info btn-sm">view </a> -->
						<a href="<?php echo e(url("surattugas/$st->id/surattugas_pdf")); ?>" class="btn btn-danger btn-sm custom" target='_BLANK' > Export to PDF </a><br>
						
						<a href="<?php echo e(url("/spd/$st->id/create")); ?>" class="btn btn-secondary btn-sm custom" > Buat SPD </a><br>
							
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