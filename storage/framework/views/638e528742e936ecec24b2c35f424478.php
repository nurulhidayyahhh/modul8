<div class="d-flex">
    <a href="<?php echo e(route('barangs.show', ['barang' => $barang->id])); ?>" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi-person-lines-fill"></i>
    </a>
    <a href="<?php echo e(route('barangs.edit', ['barang' => $barang->id])); ?>" class="btn btn-outline-dark btn-sm me-2">
        <i class="bi-pencil-square"></i>
    </a>
    <div>
        <form action="<?php echo e(route('barangs.destroy', ['barang' => $barang->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn btn-outline-dark btn-sm me-2">
                <i class="bi-trash"></i>
            </button>
        </form>
    </div>
</div>
<?php /**PATH C:\Nurul Hidayah\Semester 6\Pemrograman Framework\laravel-application\modul5\resources\views/barang/actions.blade.php ENDPATH**/ ?>