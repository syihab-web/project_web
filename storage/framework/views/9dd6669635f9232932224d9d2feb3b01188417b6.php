<?php $__env->startSection('title', 'Continent'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php $__currentLoopData = $continent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $continent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-4 ml-auto" style="width: 100%;">
            <img class="card-img-top" src="/img/muramasa.png" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?php echo e($continent->id_benua); ?></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project_covid\project_web\resources\views/user/continent.blade.php ENDPATH**/ ?>