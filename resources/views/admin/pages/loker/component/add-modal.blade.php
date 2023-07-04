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
                @csrf
                <input type="hidden" name="berita_id" id="berita_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kategori_id">Kategori<span class="text-danger">*</span></label>
                                <select name="kategori_id" id="kategori_id" class="form-control form-control-sm">
                                    <option selected disabled>---Pilih Kategori---</option>
                                    @foreach ($loker as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="is_active">Status<span class="text-danger">*</span></label>
                                <select name="is_active" id="is_active" class="form-control form-control-sm">
                                    <option selected disabled>---Pilih Status---</option>
                                    <option value="0">Aktif</option>
                                    <option value="1">Nonaktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="nama" id="nama"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm mr-2" name="lokasi" id="lokasi"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi<span class="text-danger">*</span></label>
                        <input id="isi" type="hidden" name="isi">
                        <trix-editor input="isi"></trix-editor>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tanggal_mulai">Tanggal Mulai<span class="text-danger">*</span></label>
                                <input type="date" class="form-control form-control-sm mr-2" name="tanggal_mulai"
                                    id="tanggal_mulai" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tanggal_akhir">Tanggal Akhir<span class="text-danger">*</span></label>
                                <input type="date" class="form-control form-control-sm mr-2" name="tanggal_akhir"
                                    id="tanggal_akhir" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
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

@push('custom-scripts')
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
@endpush
