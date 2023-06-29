<div class="modal-body">
    <h5 class="font-weight-bold border-bottom pb-1">Data Pribadi</h5>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name">Nama Lengkap<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm mr-2" name="name" id="edit_name">
            </div>
            <div class="form-group">
                <label for="edit_nip">NIP<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm mr-2" name="nip" id="edit_nip">
            </div>
            <div class="form-group">
                <label for="edit_nuptk">NUPTK<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm mr-2" name="nuptk" id="edit_nuptk">
            </div>
            <div class="form-group">
                <label for="edit_nik">NIK<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm mr-2" name="nik" id="edit_nik">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
                <select name="jenis_kelamin" id="edit_jenis_kelamin" class="form-control form-control-sm">
                    <option selected disabled>---Pilih Jenis Kelamin---</option>
                    <option value="l">Laki-laki</option>
                    <option value="p">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status Kepegawaian<span class="text-danger">*</span></label>
                <select name="status" id="edit_status" class="form-control form-control-sm">
                    <option selected disabled>---Pilih Status Kepegawaian---</option>
                    <option value="pns">PNS</option>
                    <option value="nonpns">Non PNS</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="pendidikan_terakhir">Pendidikan Terakhir<span class="text-danger">*</span></label>
                <select name="pendidikan_terakhir" id="edit_pendidikan_terakhir" class="form-control form-control-sm">
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
            <div class="form-group">
                <label for="edit_tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm mr-2" name="tempat_lahir"
                    id="edit_tempat_lahir">
            </div>
            <div class="form-group">
                <label for="edit_tanggal_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
                <input type="date" class="form-control form-control-sm mr-2" name="tanggal_lahir"
                    id="edit_tanggal_lahir">
            </div>
            <div class="form-group">
                <label for="edit_alamat">Alamat Lengkap<span class="text-danger">*</span></label>
                <textarea class="form-control" name="alamat" id="edit_alamat" rows="4"></textarea>
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
    </div>
    <h5 class="font-weight-bold border-bottom pb-1">Data Kontak</h5>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="username">Username<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm mr-2" name="username" id="edit_username">
            </div>
            <div class="form-group">
                <label for="email">Email<span class="text-danger">*</span></label>
                <input type="email" class="form-control form-control-sm mr-2" name="email" id="edit_email">
            </div>
            <div class="form-group">
                <label for="edit_no_handphone">No Handphone<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm mr-2" name="no_handphone"
                    id="edit_no_handphone">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="edit_facebook">Facebook<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm mr-2" name="facebook" id="edit_facebook">
            </div>
            <div class="form-group">
                <label for="edit_instagram">Instagram<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm mr-2" name="instagram"
                    id="edit_instagram">
            </div>
            <div class="form-group">
                <label for="edit_twitter">Twitter<span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-sm mr-2" name="twitter" id="edit_twitter">
            </div>
        </div>
    </div>
</div>

@push('custom-scripts')
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
@endpush
