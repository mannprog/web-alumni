

<?php $__env->startSection('content'); ?>
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Inner Page</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Inner Page</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-4">
        <div class="container">
            <p>
                Example inner page template
            </p>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/home/pages/berita.blade.php ENDPATH**/ ?>