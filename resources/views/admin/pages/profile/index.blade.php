@extends('admin.layouts.app', ['title' => 'Profile Saya'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile Saya</h1>
        <div class="d-flex align-items-center justify-content-center">
            @role('superadmin|admin|kepalasekolah|petugas')
                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-secondary shadow-sm mr-2">Kembali</a>
                <a href="javascript:void()" data-id="{{ $user->id }}" id="editCivitas" class="btn btn-sm mb-0 btn-warning"><i
                        class="fas fa-pencil-alt"></i> Ubah Profil</a>
            @endrole
            @role('perusahaan')
                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-secondary shadow-sm mr-2">Kembali</a>
                <a href="javascript:void()" data-id="{{ $user->id }}" id="editCompany"
                    class="btn btn-sm mb-0 btn-warning"><i class="fas fa-pencil-alt"></i> Ubah Profil</a>
            @endrole
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            @role('admin|kepalasekolah|petugas')
                @include('admin.pages.profile.partials.profil-petugas')
            @endrole
            @role('perusahaan')
                @include('admin.pages.profile.partials.profil-perusahaan')
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
                    $('#edit_nip').val(data.petugas_detail.nip);
                    $('#edit_nuptk').val(data.petugas_detail.nuptk);
                    $('#edit_nik').val(data.petugas_detail.nik);
                    $('#edit_jenis_kelamin').val(data.petugas_detail.jenis_kelamin);
                    $('#edit_tempat_lahir').val(data.petugas_detail.tempat_lahir);
                    $('#edit_tanggal_lahir').val(data.petugas_detail.tanggal_lahir);
                    $('#edit_status').val(data.petugas_detail.status);
                    $('#edit_alamat').val(data.petugas_detail.alamat);
                    $('#edit_pendidikan_terakhir').val(data.petugas_detail.pendidikan_terakhir);
                    $('#edit_no_handphone').val(data.user_kontak.no_handphone);
                    $('#edit_facebook').val(data.user_kontak.facebook);
                    $('#edit_instagram').val(data.user_kontak.instagram);
                    $('#edit_twitter').val(data.user_kontak.twitter);
                    $('#edit_foto').val(data.foto);
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
                    $('#edit_perusahaan_id').val(data.id);
                    $('#edit_name').val(data.name);
                    $('#edit_username').val(data.username);
                    $('#edit_email').val(data.email);
                    $('#edit_foto').val(data.foto);
                    $('#edit_jenis').val(data.perusahaan_detail.jenis);
                    $('#edit_alamat').val(data.perusahaan_detail.alamat);
                    $('#edit_no_handphone').val(data.user_kontak.no_handphone);
                    $('#edit_facebook').val(data.user_kontak.facebook);
                    $('#edit_instagram').val(data.user_kontak.instagram);
                    $('#edit_twitter').val(data.user_kontak.twitter);
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
