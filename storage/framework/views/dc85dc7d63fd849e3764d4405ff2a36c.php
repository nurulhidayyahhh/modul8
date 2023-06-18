<?php
    $currentRouteName = Route::currentRouteName();
?>
<nav class="navbar navbar-expand-md navbar-dark bg-info">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="fa fa-star"></i> My Management Item </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto">
                    <a href="<?php echo e(route('home')); ?>" class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>">
                        Home</a>
                </li>
                <li class="nav-item col-2 col-md-auto">
                    <a href="<?php echo e(route('barangs.index')); ?>"
                        class="nav-link <?php if($currentRouteName == 'barangs.index'): ?> active <?php endif; ?>">
                         List Barang
                    </a>
                </li>
            </ul>
            <hr class="d-md-none text-white-50">
            <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto">
                <i class="bi-person-circle me-1"></i>
                My Profile
            </a>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
</nav>
<?php /**PATH C:\Nurul Hidayah\Semester 6\Pemrograman Framework\laravel-application\masterBarangUts\resources\views/layouts/nav.blade.php ENDPATH**/ ?>