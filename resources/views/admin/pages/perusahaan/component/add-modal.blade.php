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
                <input type="hidden" name="perusahaan_id" id="perusahaan_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Perusahaan<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="name" id="name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Perusahaan<span class="text-danger">*</span></label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis Perusahaan<span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm" name="jenis" id="jenis" required>
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
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control form-control-sm" name="facebook"
                                    id="facebook">
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control form-control-sm" name="twitter"
                                    id="twitter">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username">Username<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="username"
                                    id="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control form-control-sm" name="password"
                                    id="password" required>
                            </div>
                            <div class="form-group">
                                <label for="no_handphone">Nomor Perusahaan</label>
                                <input type="text" class="form-control form-control-sm" name="no_handphone"
                                    id="no_handphone">
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control form-control-sm" name="instagram"
                                    id="instagram">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Perusahaan<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                            </div>
                        </div>
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
