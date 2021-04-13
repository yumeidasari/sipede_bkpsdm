<?php $__env->startSection('content'); ?>
    <div class="container pt-4">
        <h4><b>DAFTAR NOTA DINAS</b></h4>
		<hr>
        <a href="<?php echo e(url('/notadinas/create')); ?>" class="btn btn-primary"> Tambah </a>
        <br/>
        
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nomor Nota Dinas</th>
					<th>Kepada</th>
					<th>Dari</th>
					<th>Perihal</th>
					<th>Action </th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $semua_notadinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($nd->id); ?></td>
                    <td> <a href="<?php echo e(url("notadinas/$nd->id/nodin_pdf")); ?>" class="links" target='_BLANK'> <?php echo e($nd->nd_nomor); ?> </a>
					<td> <?php echo e($nd->nd_kepada); ?> </td>
					<td> <?php echo e($nd->nd_dari); ?> </td>
					<td> <?php echo e($nd->nd_perihal); ?> </td>
					<td>
                        <a href="<?php echo e(url("/notadinas/$nd->id/edit")); ?>" class="btn btn-info btn-sm">edit </a>
                        <a href="<?php echo e(url("/notadinas/$nd->id")); ?>" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10"><?php echo e($semua_notadinas->links()); ?></th>
                </tr>
            </tfoot>
        </table>
		<hr>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/notadinas/index.blade.php ENDPATH**/ ?>