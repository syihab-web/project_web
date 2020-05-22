<?php $__env->startSection('title', 'Jumlah Covid per Negara'); ?>

<?php $__env->startSection('content'); ?>
<br><br>

<div class="container">
    <?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    <?php if(session('delete')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('delete')); ?>

    </div>
    <?php endif; ?>
    <table>
        <tr>
            <td><a href="<?php echo e(URL('country/create')); ?>" class="btn btn-success mr-4">Tambah</a></td>
            <td><form action="/search" method="get">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search..." aria-label="Search with two button addons" aria-describedby="button-addon4">
                    <div class="input-group-append" id="button-addon4">
                      <button class="btn btn-outline-info" type="submit">Search</button>
                    </div>
                  </div>
                </form>
             </td>
        </tr>
    </table>
    <br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Negara</th>
            <th scope="col">Jumlah Positif</th>
            <th scope="col">Jumlah Sembuh</th>
            <th scope="col">Jumlah Meninggal</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $negara): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($negara->nama_negara); ?></td>
            <td><?php echo e($negara->jml_positif); ?></td>
            <td><?php echo e($negara->jml_sembuh); ?></td>
            <td><?php echo e($negara->jml_meninggal); ?></td>
            <td><?php echo e($negara->tanggal); ?></td>
            <td><a href="/country/<?php echo e($negara->id); ?>/edit" class="btn btn-info">Edit</a>
                <form action="/country/<?php echo e($negara->id); ?>" class="d-inline" method="post">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
        <?php echo e($country->links()); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project_covid\project_web\resources\views/country/index.blade.php ENDPATH**/ ?>