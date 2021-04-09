<?php $__env->startSection('content'); ?>
    <div class="container pt-5">
        <h4>Daftar Surat Perjalanan Dinas</h4>

        <a href="<?php echo e(url('/spd/create')); ?>" class="btn btn-primary"> Tambah </a>
        <br/>
        <br/>
        <hr>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nomor SPD</th>
					<th>Nama Pegawai</th>
					<th>NIP</th>
					<th>Nama PPK</th>
					<th>Action </th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $semua_spd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($spd->id); ?></td>
                    <td> <?php echo e($spd->spd_nomor); ?> </td>
					<td> <?php echo e($spd->pegawai->nama_pegawai); ?> </td>
					<td> <?php echo e($spd->pegawai->nip); ?> </td>
					<td> <?php echo e($spd->pegawai->nama_pegawai); ?> </td>
					<td>
                        <a href="<?php echo e(url("/spd/$spd->id/edit")); ?>" class="btn btn-info btn-sm">edit </a>
                        <a href="<?php echo e(url("/spd/$spd->id")); ?>" class="btn btn-info btn-sm">view </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="10"><?php echo e($semua_spd->links()); ?></th>
                </tr>
            </tfoot>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminltelayouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp7\htdocs\laravel_framework\sipede_bkpsdm\resources\views/spd/index.blade.php ENDPATH**/ ?>