<?php
    $currentRouteName = Route::currentRouteName();
?>
<nav class="navbar navbar-expand-lg font-weight-bolder navbar-dark bg-primary">
    <div class="container">
  <a class="navbar-brand" href="#"><i class="fa fa-star"></i> Nurul's Random Blog :D</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo e(($currentRouteName == 'home') ? 'active' : ''); ?>"  href="<?php echo e(route('home')); ?>">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo e(($currentRouteName == 'barangs.index') ? 'active' : ''); ?>" href="<?php echo e(route('barangs.index')); ?>">List Barang</a>
      </li>
    </ul>
  </div>
  </div>
  <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
</nav><?php /**PATH C:\Nurul Hidayah\Semester 6\Pemrograman Framework\laravel-application\modul5\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>