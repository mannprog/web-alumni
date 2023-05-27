<!-- Modal Create And Edit -->
<div class="modal fade" id="modal-md">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="itemForm" name="itemForm" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="alumni_id" id="alumni_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama Alumni<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin<span class="text-danger">*</span></label>
                        <select class="form-control" name="jk" id="jk">
                            <option selected disabled>---Pilih Jenis Kelamin---</option>
                            <option value="l">Laki-laki</option>
                            <option value="p">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan<span class="text-danger">*</span></label>
                        <select class="form-control" name="jurusan" id="jurusan">
                            <option selected disabled>---Pilih Jurusan---</option>
                            <option value="tkj">Teknik Komputer Jaringan</option>
                            <option value="rpl">Rekayasa Perangkat Lunak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status Pekerjaan<span class="text-danger">*</span></label>
                        <select class="form-control" name="status" id="status">
                            <option selected disabled>---Pilih Status Pekerjaan---</option>
                            <option value="bekerja">Bekerja</option>
                            <option value="tidakbekerja">Tidak Bekerja</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Username<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control form-control-sm mr-2" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password<span class="text-danger">*</span></label>
                        <input type="password" class="form-control form-control-sm mr-2" name="password" id="password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveBtn">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/alumni/component/add-modal.blade.php ENDPATH**/ ?>