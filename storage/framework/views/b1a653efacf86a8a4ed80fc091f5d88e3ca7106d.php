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
                    <th>ID </th>
                    <th>Nama Pegawai</th>
					<th>NIP</th>
					<th>Jabatan</th>
					<th>Pangkat/Golongan</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $semua_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($pegawai->id); ?></td>
                    <td> <?php echo e($pegawai->nama_pegawai); ?> </td>
					<td> <?php echo e($pegawai->nip); ?> </td>
					<td> <?php echo e($pegawai->jabatan->jabatan); ?> </td>
					<td> <?php echo e($pegawai->golongan->pangkat); ?>/<?php echo e($pegawai->golongan->golongan); ?> </td>
                    <td>
                        <a href="<?php echo e(url("/pegawai/$pegawai->id/edit")); ?>" class="btn btn-info btn-sm">edit </a>
                        <a href="<?php echo e(url("/pegawai/$pegawai->id")); ?>" class="btn btn-info btn-sm">view </a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/pegawai/index.blade.php ENDPATH**/ ?>