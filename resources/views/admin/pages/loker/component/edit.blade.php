@extends('admin.layouts.app', ['title' => 'Ubah Berita'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Berita - {{ $berita->judul }}</h1>
        <a href="{{ route('berita.index') }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="berita_id" id="berita_id" value="{{ $berita->id }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm mr-2" name="judul" id="judul" required
                        autofocus value="{{ old('judul', $berita->judul) }}">
                </div>
                <div class="form-group">
                    <label for="isi">Isi<span class="text-danger">*</span></label>
                    <input id="isi" type="hidden" name="isi" required value="{{ old('isi', $berita->isi) }}">
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
