@extends('notadmin.layouts.app', ['title' => 'Profile Saya'])

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile Saya</h1>
        <div class="d-flex align-items-center justify-content-center">
            <a href="{{ route('dashboard-alumni') }}" class="btn btn-sm btn-secondary shadow-sm mr-2">Kembali</a>
            <a href="{{ route('editProfile-alumni', auth()->user()->id) }}" class="btn btn-sm mb-0 btn-warning"><i
                    class="fas fa-pencil-alt"></i> Ubah Profil</a>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 text-center">
                    <img src="{{ asset('img/foto/' . $user->foto) }}" class="img-fluid rounded">
                </div>
                <div class="col-lg-9 mt-3 mt-lg-0">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2">{{ $user->name }}
                            </h4>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Pribadi
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        @include('notadmin.pages.profile.partials.alumni-detail')
                    </div>
                    <div class="row align-items-center mt-3 mb-0">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Kontak
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        @include('notadmin.pages.profile.partials.alumni-kontak')
                    </div>
                    <div class="row align-items-center mt-3 mb-0">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Akademik
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        @include('notadmin.pages.profile.partials.alumni-akademik')
                    </div>
                    <div class="row align-items-center mt-3 mb-0">
                        <div class="col-lg-12">
                            <p class="font-weight-bold">Data Keluarga
                            </p>
                        </div>
                    </div>
                    <div class="container">
                        @include('notadmin.pages.profile.partials.alumni-keluarga')
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('custom-scripts')
    <script>
        $(document).ready(function() {
            var successMessage = '{{ session('success') }}';

            if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: successMessage,
                });
            }
        });
    </script>
@endpush
