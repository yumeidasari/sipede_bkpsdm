<?php $__env->startSection('content'); ?>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
    <div class="container pt-3">
        <div class="col-md-6 offset-md-3">
		<h3><center>Buat Data Nota Dinas Baru</center></h3>
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

            <form action="<?php echo e(url('/notadinas')); ?>" method="POST" enctype="multipart/form-data">

                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="">Nomor Nota Dinas</label>
                    <input type="text" name="nd_nomor" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Kepada</label>
                    <input type="text" name="nd_kepada" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Dari</label>
                    <input type="text" name="nd_dari" class="form-control">
                </div>
				
				<div class="form-group">
                    <label> Tanggal</label>
                    <!--input type="text" class=" tanggal" name="nd_tgl_nodin" autocomplete="off"-->
					<input type="text" class="date form-control" name="nd_tgl_nodin" id="datepicker">
					
                </div>
				
				<div class="form-group">
                    <label for="">Lampiran</label>
                    <input type="text" name="nd_lampiran" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Perihal</label>
                    <input type="text" name="nd_perihal" class="form-control">
                </div>
				
				<div class="form-group">
                    <label for="">Kalimat Pembuka</label>
                    <textarea name="nd_kalimat_pembuka" class="form-control" rows="5"></textarea>
                </div>
				
				<div class="form-group">
                    <label>Memerintahkan Kepada</label>
                    <select name="nd_pegawai_id" class="form-control">
                        <option value="">Pilih Pegawai</option>
                        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->id); ?>"> <?php echo e($p->nama_pegawai); ?> - <?php echo e($p->nip); ?>  </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
				
				<div class="form-group">
                    <label for="">Kalimat Penutup</label>
                    <textarea name="nd_kalimat_penutup" class="form-control" rows="5"></textarea>
                </div>
								
				<div class="form-group">
                    <label>Pejabat Penanda Tangan</label>
                    <select name="nd_penanda_tangan_id" class="form-control">
                        <option value="">Pilih Pegawai</option>
                        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->id); ?>"> <?php echo e($p->nama_pegawai); ?> - <?php echo e($p->nip); ?>  </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <input type="submit" class="btn btn-primary" value="Simpan">


            </form>
        </div>
    </div>
	 <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true   
              
         });  
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/notadinas/create.blade.php ENDPATH**/ ?>