<?php $__env->startSection('content'); ?>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kodeBrg" class="form-label">Kode
                            </label>
                        <h5><?php echo e($barang->kodebrg); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="namaBrg" class="form-label">Nama
                            Barang</label>
                        <h5><?php echo e($barang->namabrg); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="desk" class="form-label">desk</label>
                        <h5><?php echo e($barang->desk); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <h5><?php echo e($barang->harga); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuanBrg" class="form-label">Satuan</label>
                        <h5><?php echo e($barang->satuan->name); ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="<?php echo e(route('barangs.index')); ?>" class="btn btn-outline-dark btn-lg mt-3">
                            <i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Nurul Hidayah\Semester 6\Pemrograman Framework\laravel-application\masterBarangUts\resources\views/barang/show.blade.php ENDPATH**/ ?>