<!-- Modal Create And Edit -->
<div class="modal fade" id="modal-md">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="itemForm" name="itemForm" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="berita_id" id="berita_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judul">Judul<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="judul" id="judul"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi<span class="text-danger">*</span></label>
                        <input id="isi" type="hidden" name="isi">
                        <trix-editor input="isi"></trix-editor>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto" required>
                                <label class="custom-file-label" for="foto">Choose file</label>
                            </div>
                        </div>
                        <img id="img-preview" class="col-lg-6 img-fluid">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="saveBtn">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/berita/component/modal.blade.php ENDPATH**/ ?>