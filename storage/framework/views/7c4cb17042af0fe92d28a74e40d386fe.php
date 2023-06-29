<div class="modal-body">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name">Nama Perusahaan<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" name="name" id="edit_name">
            </div>
            <div class="form-group">
                <label for="email">Email Perusahaan<span class="text-danger">*</span></label>
                <input type="email" class="form-control form-control-sm" name="email" id="edit_email">
            </div>
            <div class="form-group">
                <label for="facebook">Facebook<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" name="facebook" id="edit_facebook">
            </div>
            <div class="form-group">
                <label for="twitter">Twitter<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" name="twitter" id="edit_twitter">
            </div>
            <div class="form-group">
                <label for="foto">Logo Perusahaan</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                    </div>
                </div>
                <img id="img-preview" class="col-lg-6 img-fluid">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="username">Username<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" name="username" id="edit_username">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Perusahaan<span class="text-danger">*</span></label>
                <select class="form-control form-control-sm" name="jenis" id="edit_jenis">
                    <option selected disabled>---Pilih Jenis Perusahaan---</option>
                    <option value="pt">Perseroan Terbatas (PT)</option>
                    <option value="cv">Commanditaire Vennootschap (CV)</option>
                    <option value="firma">Firma</option>
                    <option value="koperasi">Koperasi</option>
                    <option value="persero">Persero</option>
                    <option value="umkm">UMKM</option>
                </select>
            </div>
            <div class="form-group">
                <label for="no_handphone">Nomor Perusahaan<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" name="no_handphone" id="edit_no_handphone">
            </div>
            <div class="form-group">
                <label for="instagram">Instagram<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm" name="instagram" id="edit_instagram">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat Perusahaan<span class="text-danger">*</span></label>
                <textarea class="form-control" id="edit_alamat" name="alamat" rows="3"></textarea>
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('custom-scripts'); ?>
    <script>
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
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/profile/component/partials/edit-perusahaan.blade.php ENDPATH**/ ?>