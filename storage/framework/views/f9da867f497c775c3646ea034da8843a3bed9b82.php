<?php $__env->startSection('content'); ?>
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
		<h3><center>Buat Data Surat Perjalanan Dinas Baru</center></h3>
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

            <form action="<?php echo e(url('/spd')); ?>" method="POST" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>


				<div class="form-group">
                    <input type="text"  name="spd_surattugas_id" value="<?php echo e($surattugas->id); ?>" class="form-control" hidden>
                </div>
				
                <div class="form-group">
                    <label>SKPD/Unit Kerja</label>
                    <select name="spd_opd_id" class="form-control">
                        <option value="">Pilih Unit Kerja</option>
                        <?php $__currentLoopData = $opd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($o->id_opd); ?>"> <?php echo e($o->nama_opd); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
				
				<div class="form-group">
                    <label for="">Lembar Ke</label>
                    <input type="text" name="spd_lembar_ke" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Kode No.</label>
                    <input type="text" name="spd_kode" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Nomor</label>
                    <input type="text" name="spd_nomor" class="form-control">
                </div>
				
				<div class="form-group">
                    <label>Pejabat Pembuat Komitmen (PPK)</label>
                    <select name="spd_ppk_id" class="form-control">
                        <option value="">Pilih PPK</option>
                        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->id); ?>"> <?php echo e($p->nama_pegawai); ?> - <?php echo e($p->nip); ?>  </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
				
				<div class="form-group">
                    <label>Pegawai yang melaksanakan Perjalanan Dinas</label>
                    <select name="spd_pegawai_id" class="form-control">
                        <option value="">Pilih Pegawai</option>
                        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->id); ?>"> <?php echo e($p->nama_pegawai); ?> - <?php echo e($p->nip); ?>  </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
				
				<div class="form-group">
                    <label for="">Maksud Perjalanan Dinas</label>
                    <input type="text" name="spd_maksud" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Alat Angkutan </label>
                    <input type="text" name="spd_alat_angkut" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Tempat Berangkat </label>
                    <input type="text" name="spd_tempat_berangkat" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Tempat Tujuan </label>
                    <input type="text" name="spd_tempat_tujuan" class="form-control">
                </div>
			
				<div class="form-group">
                    <label for="">Data Anggaran Pengeluaran </label>
                    <input type="text" name="spd_anggaran_id" class="form-control">
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan">


            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/spd/create.blade.php ENDPATH**/ ?>