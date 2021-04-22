<?php $__env->startSection('content'); ?>
    <div class="container pt-4">
        <h4><b>DAFTAR JABATAN</b></h4>
		<hr>
        <a href="<?php echo e(url('/jabatan/create')); ?>" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Jabatan</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				<?php $i=1 ?>
                <?php $__currentLoopData = $semua_jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jabatan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($i++); ?></td>
                    <td> <?php echo e($jabatan->jabatan); ?> </td>
                    <td>
                        <a href="<?php echo e(url("/jabatan/$jabatan->id/edit")); ?>" class="btn btn-info btn-sm">edit </a>
                        <a href="<?php echo e(url("/jabatan/$jabatan->id")); ?>" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10"><?php echo e($semua_jabatan->links()); ?></th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/jabatan/index.blade.php ENDPATH**/ ?>