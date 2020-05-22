<?php $__env->startSection('title', 'Form Edit'); ?>

<?php $__env->startSection('content'); ?>
<br><br>

<div class="container">
<form action="/country/<?php echo e($country->id); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('patch'); ?>
    <?php echo e(csrf_field()); ?>

        <div class="form-group">
          <label for="exampleInputEmail1">Nama Negara</label>
            <input name="nama_negara" disabled value="<?php echo e($country->nama_negara); ?>" type="text" class="form-control" id="exampleInputEmail1" required>
         </div>
         <div class="form-group">
            <label for="exampleInputEmail2">Benua</label>
            <select class="custom-select" disabled required id="exampleInputEmail2" name="benua" required>
                <option value="<?php echo e($country->benua); ?>"><?php echo e($country->benua); ?></option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Positif</label>
        <input name="jml_positif" type="number" value="<?php echo e($country->jml_positif); ?>" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Jumlah Sembuh</label>
        <input name="jml_sembuh" type="number" value="<?php echo e($country->jml_sembuh); ?>" class="form-control" id="exampleInputPassword2" required>
          </div><div class="form-group">
            <label for="exampleInputPassword3">Jumlah Meninggal</label>
          <input name="jml_meninggal" type="number" value="<?php echo e($country->jml_meninggal); ?>" class="form-control" id="exampleInputPassword3" required>
          </div><div class="form-group">
            <label for="exampleInputPassword4">Tanggal</label>
          <input name="tanggal" type="date" class="form-control" value="<?php echo e($country->tanggal); ?>" id="exampleInputPassword4" required>
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project_covid\project_web\resources\views/country/edit.blade.php ENDPATH**/ ?>