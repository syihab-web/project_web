<?php $__env->startSection('title', 'Form Tambah'); ?>

<?php $__env->startSection('content'); ?>
<br><br>

<div class="container">
    <?php if(session('error')): ?>
    <div class="alert alert-error">
        <?php echo e(session('error')); ?>

    </div>
  <?php endif; ?>
  <br>
<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <strong>Perhatian</strong>
        <br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($error); ?>

            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form action="/country" method="POST" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

        <div class="form-group">
          <label for="exampleInputEmail1">Nama Negara</label>
        <input name="nama_negara" value="<?php echo e(old('nama_negara')); ?>" type="text" class="form-control" id="exampleInputEmail1" required>
         </div>
         <div class="form-group">
            <label for="exampleInputEmail2">Benua</label>
            <select class="custom-select" required id="exampleInputEmail2" name="benua" required>
              <?php $__currentLoopData = $continent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $continent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($continent->id_benua); ?>"><?php echo e($continent->id_benua); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Positif</label>
        <input name="jml_positif" type="number" value="<?php echo e(old('jml_positif')); ?>" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Jumlah Sembuh</label>
        <input name="jml_sembuh" type="number" class="form-control" value="<?php echo e(old('jml_sembuh')); ?>" id="exampleInputPassword2" required>
          </div><div class="form-group">
            <label for="exampleInputPassword3">Jumlah Meninggal</label>
          <input name="jml_meninggal" type="number" value="<?php echo e(old('jml_meninggal')); ?>" class="form-control" id="exampleInputPassword3" required>
          </div><div class="form-group">
            <label for="exampleInputPassword4">Tanggal</label>
          <input name="tanggal" type="date" class="form-control" value="<?php echo e(old('tanggal')); ?>" id="exampleInputPassword4" required>
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project_covid\project_web\resources\views/country/create.blade.php ENDPATH**/ ?>