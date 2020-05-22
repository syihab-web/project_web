<?php $__env->startSection('content'); ?>
<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/muramasa.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Sengo Muramasa</h5>
              <p>Muramasa is a famed blacksmith within Ise Province.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/mor chan.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Mordred Pendragon</h5>
              <p>The treacherous knight who killed his father at the Hill of Camlann, putting an end to the Arthurian legend</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/arjuna alter.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Arjuna alter</h5>
              <p>Arjuna alter also known as the god Arjuna is the Lostbelt king of the Indian Lostbelt. He was given the title of The Black Final God</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Wallpaper\resources\views/home.blade.php ENDPATH**/ ?>