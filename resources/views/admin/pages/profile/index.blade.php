@extends('admin.layouts.app', ['title' => 'Profile Saya'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile Saya</h1>
        <div class="d-flex align-items-center justify-content-center">
            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-secondary shadow-sm mr-2">Kembali</a>
            @role('superadmin|admin|kepalasekolah|petugas')
                <a href="javascript:void()" data-id="{{ $user->id }}" id="editCivitas" class="btn btn-sm mb-0 btn-warning"><i
                        class="fas fa-pencil-alt"></i> Ubah Profil</a>
            @endrole
            @role('perusahaan')
                <a href="javascript:void()" data-id="{{ $user->id }}" id="editCompany"
                    class="btn btn-sm mb-0 btn-warning"><i class="fas fa-pencil-alt"></i> Ubah Profil</a>
            @endrole
            @role('alumni')
                <a href="javascript:void()" data-id="{{ $user->id }}" id="editAlumni" class="btn btn-sm mb-0 btn-warning"><i
                        class="fas fa-pencil-alt"></i> Ubah Profil</a>
            @endrole
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            @role('superadmin|admin|kepalasekolah|petugas')
                <div class="row">
                    <div class="col-lg-3">
                        <img src="{{ asset('img/foto/' . $user->foto) }}" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-9">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h4 class="font-weight-bold border-bottom pb-2">{{ $user->name }}
                                </h4>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Status
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($user->civitas_detail->status === 'pns')
                                    PNS
                                @elseif ($user->civitas_detail->status === 'nonpns')
                                    Non PNS
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NIP
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->civitas_detail->nip }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NUPTK
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->civitas_detail->nuptk }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                NIK
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->civitas_detail->nik }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Jenis Kelamin
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($user->civitas_detail->jk === 'l')
                                    Laki-laki
                                @elseif ($user->civitas_detail->jk === 'p')
                                    Perempuan
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Tempat, Tanggal Lahir
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->civitas_detail->tempat_lahir }}, {{ $user->civitas_detail->tanggal_lahir }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Username
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->username }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Email
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->email }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Nomor Handphone
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->civitas_detail->no_handphone }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Alamat
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->civitas_detail->alamat }}
                            </div>
                        </div>
                    </div>
                </div>
            @endrole
            @role('perusahaan')
                <div class="row">
                    <div class="col-lg-3">
                        <img src="{{ asset('img/foto/' . $user->foto) }}" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-9">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h4 class="font-weight-bold border-bottom pb-2">{{ $user->name }}
                                </h4>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Jenis
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                @if ($user->company_detail->jenis_perusahaan === 'pt')
                                    Perseroan Terbatas (PT)
                                @elseif ($user->civitas_detail->status === 'cv')
                                    Commanditaire Vennootschap (CV)
                                @elseif ($user->civitas_detail->status === 'firma')
                                    Firma
                                @elseif ($user->civitas_detail->status === 'koperasi')
                                    Koperasi
                                @elseif ($user->civitas_detail->status === 'persero')
                                    Persero
                                @elseif ($user->civitas_detail->status === 'umkm')
                                    UMKM
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Alamat
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->company_detail->alamat_perusahaan }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Username
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->username }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Email
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->email }}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-4">
                                Nomor
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-7">
                                {{ $user->company_detail->no_perusahaan }}
                            </div>
                        </div>
                    </div>
                </div>
            @endrole
            @role('alumni')
                <div class="row">
                    <div class="col-lg-3">
                        <img src="{{ asset('img/foto/' . $user->foto) }}" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-9">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <h4 class="font-weight-bold border-bottom pb-2">{{ $user->name }}
                                </h4>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <h5 class="font-weight-bold">Data Pribadi
                                    </h5>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        NIS
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_detail->nis }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        NISN
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_detail->nisn }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        NIK
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_detail->nik }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Jenis Kelamin
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        @if ($user->alumni_detail->jk === 'l')
                                            Laki-laki
                                        @elseif ($user->alumni_detail->jk === 'p')
                                            Perempuan
                                        @else
                                            -
                                        @endif
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Tempat, Tanggal Lahir
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_detail->tempat_lahir }}, {{ $user->alumni_detail->tanggal_lahir }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Alamat
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_detail->alamat }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Username
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->username }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Email
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->email }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Nomor Handphone
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_detail->no_handphone }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Status
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        @if ($user->alumni_detail->status === 'bekerja')
                                            Bekerja
                                        @else
                                            Tidak Bekerja
                                        @endif
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Organisasi
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_detail->organisasi }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Keahlian
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_detail->keahlian }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Pengalaman Kerja
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_detail->pengalaman_kerja }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <h5 class="font-weight-bold">Data Keluarga
                                    </h5>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Nama Ayah
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_family->ayah }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Pekerjaan Ayah
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_family->pekerjaan_ayah }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Nama Ibu
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_family->ibu }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Pekerjaan Ibu
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_family->pekerjaan_ibu }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <h5 class="font-weight-bold">Data Akademik
                                    </h5>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Jurusan
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        @if ($user->alumni_academic->jurusan === 'tkj')
                                            Teknik Komputer Jaringan
                                        @elseif ($user->alumni_academic->jurusan === 'rpl')
                                            Rekayasa Perangkat Lunak
                                        @else
                                            -
                                        @endif
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Rombel
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_academic->rombel }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Tahun Masuk
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_academic->tahun_masuk }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Tahun Lulus
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_academic->tahun_lulus }}
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        Nilai Rata-rata Ijazah
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $user->alumni_academic->rata_ijazah }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endrole
        </div>
    </div>
    @include('admin.pages.profile.component.edit-modal')
@endsection

@push('custom-scripts')
    <script>
        $(document).ready(function() {
            $('body').on('click', '#editCivitas', function() {
                $.get("{{ route('edit-profile', auth()->user()->id) }}", function(data) {
                    $('#modal-edit').modal('show');
                    setTimeout(function() {
                        $('#name').focus();
                    }, 500);
                    $('.modal-title').html("Ubah Profil Saya");
                    $('#updateBtn').removeAttr('disabled');
                    $('#updateBtn').html("Simpan");
                    $('#edit_user_id').val(data.id);
                    $('#edit_name').val(data.name);
                    $('#edit_username').val(data.username);
                    $('#edit_email').val(data.email);
                    $('#edit_nip').val(data.civitas_detail.nip);
                    $('#edit_nuptk').val(data.civitas_detail.nuptk);
                    $('#edit_nik').val(data.civitas_detail.nik);
                    $('#edit_jk').val(data.civitas_detail.jk);
                    $('#edit_tempat_lahir').val(data.civitas_detail.tempat_lahir);
                    $('#edit_tanggal_lahir').val(data.civitas_detail.tanggal_lahir);
                    $('#edit_no_handphone').val(data.civitas_detail.no_handphone);
                    $('#edit_status').val(data.civitas_detail.status);
                    $('#edit_alamat').val(data.civitas_detail.alamat);
                    $('#edit_foto').val(data.foto);
                    $('#edit_roles').val(data.roles[0].name);
                })
            });

            $('body').on('click', '#editAlumni', function() {
                $.get("{{ route('edit-profile', auth()->user()->id) }}", function(data) {
                    $('#modal-edit').modal('show');
                    setTimeout(function() {
                        $('#name').focus();
                    }, 500);
                    $('.modal-title').html("Ubah Profil Saya");
                    $('#updateBtn').removeAttr('disabled');
                    $('#updateBtn').html("Simpan");
                    $('#edit_user_id').val(data.id);
                    $('#edit_name').val(data.name);
                    $('#edit_username').val(data.username);
                    $('#edit_email').val(data.email);
                    $('#edit_nis').val(data.alumni_detail.nis);
                    $('#edit_nisn').val(data.alumni_detail.nisn);
                    $('#edit_nik').val(data.alumni_detail.nik);
                    $('#edit_jk').val(data.alumni_detail.jk);
                    $('#edit_tempat_lahir').val(data.alumni_detail.tempat_lahir);
                    $('#edit_tanggal_lahir').val(data.alumni_detail.tanggal_lahir);
                    $('#edit_no_handphone').val(data.alumni_detail.no_handphone);
                    $('#edit_alamat').val(data.alumni_detail.alamat);
                    $('#edit_status').val(data.alumni_detail.status);
                    $('#edit_keahlian').val(data.alumni_detail.keahlian);
                    $('#edit_organisasi').val(data.alumni_detail.organisasi);
                    $('#edit_pengalaman_kerja').val(data.alumni_detail.pengalaman_kerja);
                    $('#edit_foto').val(data.foto);
                    $('#edit_ayah').val(data.alumni_family.ayah);
                    $('#edit_pekerjaan_ayah').val(data.alumni_family.pekerjaan_ayah);
                    $('#edit_ibu').val(data.alumni_family.ibu);
                    $('#edit_pekerjaan_ibu').val(data.alumni_family.pekerjaan_ibu);
                    $('#edit_jurusan').val(data.alumni_academic.jurusan);
                    $('#edit_rombel').val(data.alumni_academic.rombel);
                    $('#edit_tahun_masuk').val(data.alumni_academic.tahun_masuk);
                    $('#edit_tahun_lulus').val(data.alumni_academic.tahun_lulus);
                    $('#edit_rata_ijazah').val(data.alumni_academic.rata_ijazah);
                    $('#edit_roles').val(data.roles[0].name);
                })
            });

            $('body').on('click', '#editCompany', function() {
                $.get("{{ route('edit-profile', auth()->user()->id) }}", function(data) {
                    $('#modal-edit').modal('show');
                    setTimeout(function() {
                        $('#name').focus();
                    }, 500);
                    $('.modal-title').html("Ubah Profil Perusahaan");
                    $('#updateBtn').removeAttr('disabled');
                    $('#updateBtn').html("Simpan");
                    $('#edit_user_id').val(data.id);
                    $('#edit_name').val(data.name);
                    $('#edit_username').val(data.username);
                    $('#edit_email').val(data.email);
                    $('#edit_foto').val(data.foto);
                    $('#edit_no_perusahaan').val(data.company_detail.no_perusahaan);
                    $('#edit_jenis_perusahaan').val(data.company_detail.jenis_perusahaan);
                    $('#edit_alamat_perusahaan').val(data.company_detail.alamat_perusahaan);
                    $('#edit_roles').val(data.roles[0].name);
                })
            });

            $('#updateBtn').click(function(e) {
                e.preventDefault();
                var formData = new FormData($('#updateForm')[0]);
                $('#updateBtn').attr('disabled', 'disabled');
                $('#updateBtn').html('Simpan ...');
                $.ajax({
                    data: formData,
                    url: "{{ route('update-profile', auth()->user()->id) }}",
                    contentType: false,
                    processData: false,
                    type: "POST",
                    success: function(data) {
                        $('#updateForm').trigger("reset");
                        $('#modal-edit').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.message,
                        });
                    },
                    error: function(data) {
                        $('#updateBtn').removeAttr('disabled');
                        $('#updateBtn').html("Simpan");
                        Swal.fire({
                            icon: 'error',
                            title: 'Oppss',
                            text: data.responseJSON.message,
                        });
                        $.each(data.responseJSON.errors, function(index, value) {
                            toastr.error(value);
                        });
                    }
                });
            });
        });
    </script>
@endpush
