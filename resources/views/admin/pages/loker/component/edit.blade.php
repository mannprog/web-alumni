@extends('admin.layouts.app', ['title' => 'Ubah Lowongan Kerja'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Lowongan Kerja - {{ $loker->nama }}</h1>
        <a href="{{ route('loker.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <form action="{{ route('loker.update', $loker->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="loker_id" id="loker_id" value="{{ $loker->id }}">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="kategori_id">Kategori<span class="text-danger">*</span></label>
                            <select name="kategori_id" id="kategori_id" class="form-control form-control-sm"">
                                <option selected disabled>---Pilih Kategori---</option>
                                @if ($loker)
                                    @foreach ($kategoriList as $kategori)
                                        <option value="{{ $kategori->id }}"
                                            {{ old('kategori_id', $loker->kategori_id) == $kategori->id ? 'selected' : '' }}>
                                            {{ $kategori->nama }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="is_active">Status<span class="text-danger">*</span></label>
                            <select name="is_active" id="is_active" class="form-control form-control-sm">
                                <option selected disabled>---Pilih Status---</option>
                                <option value="0" {{ old('is_active', $loker->is_active) === 0 ? 'selected' : '' }}>
                                    Aktif</option>
                                <option value="1" {{ old('is_active', $loker->is_active) === 1 ? 'selected' : '' }}>
                                    Nonaktif</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama">Nama<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm mr-2" name="nama" id="nama" required
                        autofocus value="{{ old('nama', $loker->nama) }}">
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm mr-2" name="lokasi" id="lokasi" required
                        value="{{ old('lokasi', $loker->lokasi) }}">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="tanggal_mulai">Tanggal Mulai<span class="text-danger">*</span></label>
                            <input type="date" class="form-control form-control-sm mr-2" name="tanggal_mulai"
                                id="tanggal_mulai" required value="{{ old('tanggal_mulai', $loker->tanggal_mulai) }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="tanggal_akhir">Tanggal Akhir<span class="text-danger">*</span></label>
                            <input type="date" class="form-control form-control-sm mr-2" name="tanggal_akhir"
                                id="tanggal_akhir" required value="{{ old('tanggal_akhir', $loker->tanggal_akhir) }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="isi">Isi<span class="text-danger">*</span></label>
                    <input id="isi" type="hidden" name="isi" required value="{{ old('isi', $loker->isi) }}">
                    <trix-editor input="isi"></trix-editor>
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
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right mb-3">Simpan Perubahan</button>
            </div>
        </form>
    </div>
@endsection

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
