<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project UTS</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Hello, this is the UTS Nurul project</h1>
        
        <img src="<?php echo e(Vite::asset('resources/images/inventory2.png')); ?>" alt="image" class="img-fluid">
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2"><a href="<?php echo e(route('home')); ?>" class="btn btn-info">Click here to enter</a></div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\Nurul Hidayah\Semester 6\Pemrograman Framework\laravel-application\masterBarangUts\resources\views/welcome.blade.php ENDPATH**/ ?>