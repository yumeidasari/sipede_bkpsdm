<?php $__env->startSection('content'); ?>
    <div class="container pt-4">
        <h4><b>DAFTAR OPD</b></h4>
		<hr>
        <a href="<?php echo e(url('/opd/create')); ?>" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama OPD</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
				<?php $i=1 ?>
                <?php $__currentLoopData = $semua_opd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($i++); ?></td>
                    <td> <?php echo e($opd->nama_opd); ?> </td>
                    <td>
                        <a href="<?php echo e(url("/opd/$opd->id/edit")); ?>" class="btn btn-info btn-sm"><i class='nav-icon fas fa-edit' style='color: white'></i></a>
						<a href="<?php echo e(url("/opd/$opd->id")); ?>" class="btn btn-primary btn-sm" title='View'><i class='fa fa-file' style='color: white'></i></a>
                        <!-- a href="<?php echo e(url("/opd/$opd->id/delete")); ?>" class="btn btn-danger btn-sm" title='Delete'><i class='fa fa-trash' style='color: white'></i></a-->
                       
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10"><?php echo e($semua_opd->links()); ?></th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/opd/index.blade.php ENDPATH**/ ?>