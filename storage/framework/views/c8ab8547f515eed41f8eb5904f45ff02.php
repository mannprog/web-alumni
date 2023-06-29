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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="name"
                                    id="name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username">Username<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="username"
                                    id="username">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email<span class="text-danger">*</span></label>
                                <input type="email" class="form-control form-control-sm mr-2" name="email"
                                    id="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="password">Password<span class="text-danger">*</span></label>
                                <input type="password" class="form-control form-control-sm mr-2" name="password"
                                    id="password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nis">NIS<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="nis"
                                    id="nis">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nisn">NISN<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="nisn"
                                    id="nisn">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-sm">
                                    <option selected disabled>---Pilih Jenis Kelamin---</option>
                                    <option value="l">Laki-laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pendidikan_terakhir">Pendidikan Terakhir<span
                                        class="text-danger">*</span></label>
                                <select name="pendidikan_terakhir" id="pendidikan_terakhir"
                                    class="form-control form-control-sm">
                                    <option selected disabled>Pendidikan Terakhir</option>
                                    <option value="sma">SMA/Sederajat</option>
                                    <option value="d1">D1/Sederajat</option>
                                    <option value="d2">D2/Sederajat</option>
                                    <option value="d3">D3/Sederajat</option>
                                    <option value="s1">S1/Sederajat</option>
                                    <option value="s2">S2/Sederajat</option>
                                    <option value="s3">S3/Sederajat</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jurusan">Jurusan<span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm" name="jurusan" id="jurusan">
                                    <option selected disabled>---Pilih Jurusan---</option>
                                    <option value="tkj">Teknik Komputer Jaringan</option>
                                    <option value="rpl">Rekayasa Perangkat Lunak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="status">Status Pekerjaan<span class="text-danger">*</span></label>
                                <select class="form-control form-control-sm" name="status" id="status">
                                    <option selected disabled>---Pilih Status Pekerjaan---</option>
                                    <option value="bekerja">Bekerja</option>
                                    <option value="tidakbekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tahun_masuk">Tahun Masuk<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2"
                                    aria-describedby="masukHelp" name="tahun_masuk" id="tahun_masuk">
                                <small id="masukHelp" class="form-text text-muted font-italic">Isikan dengan tahun
                                    ajaran ketika masuk. (Contoh: 2020/2021)</small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tahun_lulus">Tahun Lulus<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2"
                                    aria-describedby="lulusHelp" name="tahun_lulus" id="tahun_lulus">
                                <small id="lulusHelp" class="form-text text-muted font-italic">Isikan dengan tahun
                                    ajaran ketika lulus. (Contoh: 2022/2023)</small>
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
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/alumni/component/add-modal.blade.php ENDPATH**/ ?>