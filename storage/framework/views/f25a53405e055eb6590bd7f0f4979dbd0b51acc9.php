<?php $__env->startSection('content'); ?>
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
			<h3><center>Buat Data Pegawai Baru</center></h3>
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

            <form action="<?php echo e(url('/pegawai')); ?>" method="POST" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="">Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">NIP</label>
                    <input type="text" name="nip" class="form-control">
                </div>
				
				<div class="form-group">
                    <label>Jabatan</label>
                    <select name="jabatan_id" class="form-control">
                        <option value="">Pilih Jabatan</option>
                        <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($j->id); ?>"> <?php echo e($j->jabatan); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
				
				<div class="form-group">
                    <label>Golongan</label>
                    <select name="golongan_id" class="form-control">
                        <option value="">Pilih Golongan</option>
                        <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($g->id); ?>"> <?php echo e($g->golongan); ?>-<?php echo e($g->pangkat); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
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
<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/pegawai/create.blade.php ENDPATH**/ ?>