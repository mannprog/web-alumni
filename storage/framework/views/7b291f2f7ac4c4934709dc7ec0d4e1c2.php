

<?php $__env->startSection('content'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Lamaran</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <?php echo e($dataTable->table(['class' => 'table align-items-center display responsive nowrap'])); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('custom-styles'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('library/http_cdn.datatables.net_1.13.4_css_dataTables.bootstrap5.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('library/http_cdn.datatables.net_responsive_2.4.1_css_responsive.bootstrap5.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('library/http_cdnjs.cloudflare.com_ajax_libs_toastr.js_latest_toastr.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('custom-scripts'); ?>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo e(asset('library/http_cdn.datatables.net_1.13.4_js_jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('library/http_cdn.datatables.net_1.13.4_js_dataTables.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('library/http_cdn.datatables.net_responsive_2.4.1_js_dataTables.responsive.js')); ?>"></script>
    <script src="<?php echo e(asset('library/http_cdn.datatables.net_responsive_2.4.1_js_responsive.bootstrap4.js')); ?>"></script>

    <?php echo e($dataTable->scripts(attributes: ['type' => 'module'])); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('notadmin.layouts.app', ['title' => 'Lamaran'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/notadmin/pages/lamaran/index.blade.php ENDPATH**/ ?>