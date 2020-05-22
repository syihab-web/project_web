<?php $__env->startSection('title', 'Jumlah Covid per Provinsi'); ?>

<?php $__env->startSection('content'); ?>
<br><br>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Jumlah Positif</th>
            <th scope="col">Jumlah Sembuh</th>
            <th scope="col">Jumlah Meninggal</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prov): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($prov->nama_provinsi); ?></td>
            <td><?php echo e($prov->jml_positif); ?></td>
            <td><?php echo e($prov->jml_sembuh); ?></td>
            <td><?php echo e($prov->jml_meninggal); ?></td>
            <td><?php echo e($prov->tanggal); ?></td>
            <td><button type="button" class="btn btn-info">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project_covid\project_web\resources\views/provinsi/index.blade.php ENDPATH**/ ?>