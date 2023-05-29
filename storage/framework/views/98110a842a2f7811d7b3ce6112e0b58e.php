<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="updateForm" name="updateForm" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <input type="hidden" name="company_id" id="edit_company_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama Perusahaan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="name" id="edit_name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username Perusahaan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="username"
                            id="edit_username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Perusahaan<span class="text-danger">*</span></label>
                        <input type="email" class="form-control form-control-sm mr-2" name="email" id="edit_email">
                    </div>
                    <div class="form-group">
                        <label for="no_perusahaan">Nomor Perusahaan<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="no_perusahaan"
                            id="edit_no_perusahaan">
                    </div>
                    <div class="form-group">
                        <label for="jenis_perusahaan">Jenis Perusahaan<span class="text-danger">*</span></label>
                        <select class="form-control" name="jenis_perusahaan" id="edit_jenis_perusahaan">
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
                        <label for="alamat_perusahaan">Alamat Perusahaan<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="edit_alamat_perusahaan" name="alamat_perusahaan" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="updateBtn">Simpan Perubahan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/company/component/edit-modal.blade.php ENDPATH**/ ?>