@extends('notadmin.layouts.app', ['title' => 'Ubah Profil'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Profil Saya</h1>
        <a href="{{ route('profile-alumni', auth()->user()->id) }}" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <form action="{{ route('updateProfile-alumni', $alumni->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            {{-- <input type="hidden" name="alumni_id" id="alumni_id"> --}}
            <div class="card-body">
                <h5 class="font-weight-bold border-bottom pb-1">Data Pribadi</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Nama Lengkap<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="name" id="name"
                                required autofocus value="{{ old('name', $alumni->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="nik" id="nik"
                                required value="{{ old('nik', $alumni->alumniDetail->nik) }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-control-sm" required>
                                <option disabled>---Pilih Jenis Kelamin---</option>
                                <option value="l"
                                    {{ old('jenis_kelamin', $alumni->alumniDetail->jenis_kelamin) == 'l' ? 'selected' : '' }}>
                                    Laki-laki</option>
                                <option value="p"
                                    {{ old('jenis_kelamin', $alumni->alumniDetail->jenis_kelamin) == 'p' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="tempat_lahir"
                                id="tempat_lahir" required
                                value="{{ old('tempat_lahir', $alumni->alumniDetail->tempat_lahir) }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
                            <input type="date" class="form-control form-control-sm mr-2" name="tanggal_lahir"
                                id="tanggal_lahir" required
                                value="{{ old('tanggal_lahir', $alumni->alumniDetail->tanggal_lahir) }}">
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_terakhir">Pendidikan Terakhir<span class="text-danger">*</span></label>
                            <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control form-control-sm"
                                required>
                                <option disabled>-- Pilih Pendidikan Terakhir --</option>
                                <option value="sma"
                                    {{ old('pendidikan_terakhir', $alumni->alumniDetail->pendidikan_terakhir) === 'sma' ? 'selected' : '' }}>
                                    SMA/Sederajat</option>
                                <option value="d1"
                                    {{ old('pendidikan_terakhir', $alumni->alumniDetail->pendidikan_terakhir) === 'd1' ? 'selected' : '' }}>
                                    D1/Sederajat</option>
                                <option value="d2"
                                    {{ old('pendidikan_terakhir', $alumni->alumniDetail->pendidikan_terakhir) === 'd2' ? 'selected' : '' }}>
                                    D2/Sederajat</option>
                                <option value="d3"
                                    {{ old('pendidikan_terakhir', $alumni->alumniDetail->pendidikan_terakhir) === 'd3' ? 'selected' : '' }}>
                                    D3/Sederajat</option>
                                <option value="s1"
                                    {{ old('pendidikan_terakhir', $alumni->alumniDetail->pendidikan_terakhir) === 's1' ? 'selected' : '' }}>
                                    S1/Sederajat</option>
                                <option value="s2"
                                    {{ old('pendidikan_terakhir', $alumni->alumniDetail->pendidikan_terakhir) === 's2' ? 'selected' : '' }}>
                                    S2/Sederajat</option>
                                <option value="s3"
                                    {{ old('pendidikan_terakhir', $alumni->alumniDetail->pendidikan_terakhir) === 's3' ? 'selected' : '' }}>
                                    S3/Sederajat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status Pekerjaan<span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control form-control-sm" required>
                                <option disabled>---Pilih Status Pekerjaan---</option>
                                <option value="bekerja"
                                    {{ old('status', $alumni->alumniDetail->status) === 'bekerja' ? 'selected' : '' }}>
                                    Bekerja</option>
                                <option value="tidakbekerja"
                                    {{ old('status', $alumni->alumniDetail->status) === 'tidakbekerja' ? 'selected' : '' }}>
                                    Tidak Bekerja</option>
                            </select>
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
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="alamat">Alamat Lengkap<span class="text-danger">*</span></label>
                            <input id="alamat" type="hidden" name="alamat" required
                                value="{{ old('alamat', $alumni->alumniDetail->alamat) }}">
                            <trix-editor input="alamat"></trix-editor>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_lain">Pendidikan Lain<span class="text-danger">*</span></label>
                            <input id="pendidikan_lain" type="hidden" name="pendidikan_lain" required
                                value="{{ old('pendidikan_lain', $alumni->alumniDetail->pendidikan_lain) }}">
                            <trix-editor input="pendidikan_lain"></trix-editor>
                        </div>
                        <div class="form-group">
                            <label for="organisasi">Organisasi<span class="text-danger">*</span></label>
                            <input id="organisasi" type="hidden" name="organisasi" required
                                value="{{ old('organisasi', $alumni->alumniDetail->organisasi) }}">
                            <trix-editor input="organisasi"></trix-editor>
                        </div>
                        <div class="form-group">
                            <label for="keahlian">Keahlian<span class="text-danger">*</span></label>
                            <input id="keahlian" type="hidden" name="keahlian" required
                                value="{{ old('keahlian', $alumni->alumniDetail->keahlian) }}">
                            <trix-editor input="keahlian"></trix-editor>
                        </div>
                        <div class="form-group">
                            <label for="pengalaman_kerja">Pengalaman Kerja<span class="text-danger">*</span></label>
                            <input id="pengalaman_kerja" type="hidden" name="pengalaman_kerja" required
                                value="{{ old('pengalaman_kerja', $alumni->alumniDetail->pengalaman_kerja) }}">
                            <trix-editor input="pengalaman_kerja"></trix-editor>
                        </div>
                    </div>
                </div>
                <h5 class="font-weight-bold border-bottom pb-1">Data Kontak</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="username">Username<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="username"
                                id="username" required value="{{ old('username', $alumni->username) }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control form-control-sm mr-2" name="email"
                                id="email" required value="{{ old('email', $alumni->email) }}">
                        </div>
                        <div class="form-group">
                            <label for="no_handphone">No Handphone<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="no_handphone"
                                id="no_handphone" required
                                value="{{ old('no_handphone', $alumni->userKontak->no_handphone) }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="facebook">Facebook<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="facebook"
                                id="facebook" required value="{{ old('facebook', $alumni->userKontak->facebook) }}">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="instagram"
                                id="instagram" required value="{{ old('instagram', $alumni->userKontak->instagram) }}">
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="twitter"
                                id="twitter" required value="{{ old('twitter', $alumni->userKontak->twitter) }}">
                        </div>
                    </div>
                </div>
                <h5 class="font-weight-bold border-bottom pb-1">Data Akademik</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nis">NIS<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="nis"
                                id="nis" required value="{{ old('nis', $alumni->alumniAkademik->nis) }}">
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="nisn"
                                id="nisn" required value="{{ old('nisn', $alumni->alumniAkademik->nisn) }}">
                        </div>
                        <div class="form-group">
                            <label for="rata_ijazah">Nilai Rata-rata Ijazah<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="rata_ijazah"
                                id="rata_ijazah" required
                                value="{{ old('rata_ijazah', $alumni->alumniAkademik->rata_ijazah) }}">
                        </div>
                        <div class="form-group">
                            <label for="angkatan">Angkatan<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="angkatan"
                                id="angkatan" required value="{{ old('angkatan', $alumni->alumniAkademik->angkatan) }}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="jurusan">Jurusan<span class="text-danger">*</span></label>
                            <select name="jurusan" id="jurusan" class="form-control form-control-sm" required>
                                <option disabled>---Pilih Jurusan---</option>
                                <option value="tkj"
                                    {{ old('jurusan', $alumni->alumniDetail->jurusan) == 'tkj' ? 'selected' : '' }}>
                                    Teknik Komputer Jaringan</option>
                                <option value="rpl"
                                    {{ old('jurusan', $alumni->alumniDetail->jurusan) == 'rpl' ? 'selected' : '' }}>
                                    Rekayasa Perangkat Lunak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rombel">Rombel<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="rombel"
                                id="rombel" aria-describedby="rombelHelp" required
                                value="{{ old('rombel', $alumni->alumniAkademik->rombel) }}">
                            <small id="rombelHelp" class="form-text text-muted font-italic">Isikan dengan nama kelas
                                terakhir. (Contoh: XII-TKJ-1)</small>
                        </div>
                        <div class="form-group">
                            <label for="tahun_masuk">Tahun Masuk<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="tahun_masuk"
                                id="tahun_masuk" aria-describedby="masukHelp" required
                                value="{{ old('tahun_masuk', $alumni->alumniAkademik->tahun_masuk) }}">
                            <small id="masukHelp" class="form-text text-muted font-italic">Isikan dengan tahun
                                ajaran ketika masuk. (Contoh: 2020/2021)</small>
                        </div>
                        <div class="form-group">
                            <label for="tahun_lulus">Tahun Lulus<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="tahun_lulus"
                                id="tahun_lulus" aria-describedby="lulusHelp" required
                                value="{{ old('tahun_lulus', $alumni->alumniAkademik->tahun_lulus) }}">
                            <small id="lulusHelp" class="form-text text-muted font-italic">Isikan dengan tahun
                                ajaran ketika lulus. (Contoh: 2022/2023)</small>
                        </div>
                    </div>
                </div>
                <h5 class="font-weight-bold border-bottom pb-1">Data Keluarga</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="ayah">Ayah<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="ayah"
                                id="ayah" required value="{{ old('ayah', $alumni->alumniKeluarga->ayah) }}">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_ayah">Pekerjaan Ayah<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="pekerjaan_ayah"
                                id="pekerjaan_ayah" required
                                value="{{ old('pekerjaan_ayah', $alumni->alumniKeluarga->pekerjaan_ayah) }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat_ortu">Alamat Lengkap Orang Tua<span class="text-danger">*</span></label>
                            <input id="alamat_ortu" type="hidden" name="alamat_ortu" required
                                value="{{ old('alamat_ortu', $alumni->alumniKeluarga->alamat_ortu) }}">
                            <trix-editor input="alamat_ortu"></trix-editor>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="ibu">Ibu<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="ibu"
                                id="ibu" required value="{{ old('ibu', $alumni->alumniKeluarga->ibu) }}">
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_ibu">Pekerjaan Ibu<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="pekerjaan_ibu"
                                id="pekerjaan_ibu" required
                                value="{{ old('pekerjaan_ibu', $alumni->alumniKeluarga->pekerjaan_ibu) }}">
                        </div>
                    </div>
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
