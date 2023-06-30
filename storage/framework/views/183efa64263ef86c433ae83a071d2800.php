

<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Berita - <?php echo e($berita->judul); ?></h1>
        <a href="<?php echo e(route('berita.index')); ?>" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <form action="<?php echo e(route('berita.update', $berita->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <input type="hidden" name="berita_id" id="berita_id" value="<?php echo e($berita->id); ?>">
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm mr-2" name="judul" id="judul" required
                        autofocus value="<?php echo e(old('judul', $berita->judul)); ?>">
                </div>
                <div class="form-group">
                    <label for="isi">Isi<span class="text-danger">*</span></label>
                    <input id="isi" type="hidden" name="isi" required value="<?php echo e(old('isi', $berita->isi)); ?>">
                    <trix-editor input="isi"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                            <label class="custom-file-label" for="foto">Choose file</label>
                        </div>
                    </div>
                    <img id="img-preview" class="col-lg-6 img-fluid">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right mb-3">Simpan Perubahan</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('custom-scripts'); ?>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        $('#foto').change(function(e) {
            var file = e.target.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                var previewImage = $('#img-preview');
                previewImage.attr('src', e.target.result);
            };

            reader.readAsDataURL(file);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Ubah Berita'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/berita/component/edit.blade.php ENDPATH**/ ?>