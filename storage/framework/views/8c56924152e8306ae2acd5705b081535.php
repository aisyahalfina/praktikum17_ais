<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <h4 style="font-weight: bolder"><?php echo e($pageTitle = 'Home'); ?></h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Well done! this is <?php echo e($pageTitle); ?>.</h4>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Documents\Kuliah\Semester 3\Pengembangan Aplikasi Website\File Project\Semester 3\Laravel baru\Praktikum16\ais_prak_16\resources\views/home.blade.php ENDPATH**/ ?>