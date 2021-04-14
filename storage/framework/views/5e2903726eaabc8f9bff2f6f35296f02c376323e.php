<?php $__env->startSection('content'); ?>
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">

			<h3><center>Buat Data Golongan Baru</center></h3>
                    <hr>
                    <br>
            <?php if(Session::has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(url('/golongan')); ?>" method="POST" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="">Golongan</label>
                    <input type="text" name="golongan" class="form-control">
                </div>
				<div class="form-group">
                    <label for="">Pangkat</label>
                    <input type="text" name="pangkat" class="form-control">
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan">


            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function(){
            $('input.tanggal').datepicker();
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/golongan/create.blade.php ENDPATH**/ ?>