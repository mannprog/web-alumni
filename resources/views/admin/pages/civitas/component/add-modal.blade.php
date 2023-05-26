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
                @csrf
                <input type="hidden" name="civitas_id" id="civitas_id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama GTK<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username GTK<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email GTK<span class="text-danger">*</span></label>
                        <input type="email" class="form-control form-control-sm mr-2" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password GTK<span class="text-danger">*</span></label>
                        <input type="password" class="form-control form-control-sm mr-2" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="role">Jabatan GTK<span class="text-danger">*</span></label>
                        <select class="form-control" name="role" id="role">
                            <option>---Pilih Jabatan---</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                            <option value="3">Kepala Sekolah</option>
                            <option value="4">Petugas</option>
                        </select>
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
