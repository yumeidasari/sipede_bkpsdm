<?php $__env->startSection('content'); ?>
    <div class="container pt-5">
        <h4>Daftar Golongan</h4>

        <a href="<?php echo e(url('/golongan/create')); ?>" class="btn btn-primary"> Tambah </a>
        <br/>
        <br/>
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Golongan</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $semua_golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $golongan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($golongan->id); ?></td>
                    <td> <?php echo e($golongan->golongan); ?> </td>
                    <td>
                        <a href="<?php echo e(url("/golongan/$golongan->id/edit")); ?>" class="btn btn-info btn-sm">edit </a>
                        <a href="<?php echo e(url("/golongan/$golongan->id")); ?>" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10"><?php echo e($semua_golongan->links()); ?></th>
                </tr>
            </tfoot>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/golongan/index.blade.php ENDPATH**/ ?>