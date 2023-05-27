<!-- Modal Create And Edit -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="updateForm" name="updateForm" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="alumni_id" id="edit_alumni_id">
                <div class="modal-body">
                    <h5 class="font-weight-bold border-bottom pb-1">Data Pribadi</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="name"
                                    id="edit_name">
                            </div>
                            <div class="form-group">
                                <label for="nis">NIS<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="nis"
                                    id="edit_nis">
                            </div>
                            <div class="form-group">
                                <label for="nisn">NISN<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="nisn"
                                    id="edit_nisn">
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="nik"
                                    id="edit_nik">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin<span class="text-danger">*</span></label>
                                <select name="jk" id="edit_jk" class="form-control form-control-sm">
                                    <option>---Pilih Jenis Kelamin---</option>
                                    <option value="l">Laki-laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="tempat_lahir"
                                    id="edit_tempat_lahir">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
                                <input type="date" class="form-control form-control-sm mr-2" name="tanggal_lahir"
                                    id="edit_tanggal_lahir">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Lengkap<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="alamat" id="edit_alamat" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="no_handphone">No Handphone<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="no_handphone"
                                    id="edit_no_handphone">
                            </div>
                            <div class="form-group">
                                <label for="status">Status Pekerjaan<span class="text-danger">*</span></label>
                                <select name="status" id="edit_status" class="form-control form-control-sm">
                                    <option>---Pilih Status Pekerjaan---</option>
                                    <option value="bekerja">Bekerja</option>
                                    <option value="tidakbekerja">Tidak Bekerja</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="organisasi">Organisasi<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="organisasi"
                                    id="edit_organisasi">
                            </div>
                            <div class="form-group">
                                <label for="keahlian">Keahlian<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="keahlian"
                                    id="edit_keahlian">
                            </div>
                            <div class="form-group">
                                <label for="pengalaman_kerja">Pengalaman Kerja<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2"
                                    name="pengalaman_kerja" id="edit_pengalaman_kerja">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto"
                                            name="foto">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-weight-bold border-bottom pb-1">Data Akun</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username">Username<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="username"
                                    id="edit_username">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email<span class="text-danger">*</span></label>
                                <input type="email" class="form-control form-control-sm mr-2" name="email"
                                    id="edit_email">
                            </div>
                        </div>
                    </div>
                    <h5 class="font-weight-bold border-bottom pb-1">Data Keluarga</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ayah">Ayah<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="ayah"
                                    id="edit_ayah">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan_ayah">Pekerjaan Ayah<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="pekerjaan_ayah"
                                    id="edit_pekerjaan_ayah">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ibu">Ibu<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="ibu"
                                    id="edit_ibu">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan_ibu">Pekerjaan Ibu<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="pekerjaan_ibu"
                                    id="edit_pekerjaan_ibu">
                            </div>
                        </div>
                    </div>
                    <h5 class="font-weight-bold border-bottom pb-1">Data AKademik</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="jurusan">Jurusan<span class="text-danger">*</span></label>
                                <select name="jurusan" id="edit_jurusan" class="form-control form-control-sm">
                                    <option>---Pilih Jurusan---</option>
                                    <option value="tkj">Teknik Komputer dan Jaringan</option>
                                    <option value="rpl">Rekayasa Perangkat Lunak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="rombel">Rombel<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="rombel"
                                    id="edit_rombel">
                            </div>
                            <div class="form-group">
                                <label for="rata_ijazah">Nilai Rata-rata Ijazah<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="rata_ijazah"
                                    id="edit_rata_ijazah">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tahun_masuk">Tahun Masuk<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="tahun_masuk"
                                    id="edit_tahun_masuk">
                            </div>
                            <div class="form-group">
                                <label for="tahun_lulus">Tahun Lulus<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm mr-2" name="tahun_lulus"
                                    id="edit_tahun_lulus">
                            </div>
                        </div>
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
