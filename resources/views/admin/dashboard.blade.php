@extends('admin.layouts.app', ['title' => 'Dashboard'])

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Petugas
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $petugas }}</div>
                                </div>
                                {{-- <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Alumni</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $alumni }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Perusahaan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $perusahaan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-building fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Lowongan Pekerjaan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $loker }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-suitcase fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Alumni (Berdasarkan Tahun Kelulusan)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    {!! $alChart->container() !!}
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Alumni (Berdasarkan Jurusan)</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    {!! $ajChart->container() !!}
                </div>
            </div>
        </div>
    </div>

    <script src="{{ $alChart->cdn() }}"></script>
    {{ $alChart->script() }}
    <script src="{{ $ajChart->cdn() }}"></script>
    {{ $ajChart->script() }}
@endsection

@push('custom-scripts')
    <script>
        // Mendapatkan referensi ke elemen <canvas>
        var ctx = document.getElementById('barChart').getContext('2d');

        // Menyiapkan data untuk diagram batang
        var tahunLulus = [2015, 2016, 2017, 2018, 2019, 2020]; // Contoh data tahun lulus
        var jumlahAlumni = [50, 80, 120, 100, 90, 110]; // Contoh data jumlah alumni per tahun

        // Menggambar diagram batang
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: tahunLulus,
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: jumlahAlumni,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Warna latar belakang batang
                    borderColor: 'rgba(54, 162, 235, 1)', // Warna garis batang
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true, // Mulai sumbu y dari 0
                        ticks: {
                            precision: 0 // Mengatur jumlah desimal pada label sumbu y
                        }
                    }
                }
            }
        });
    </script>
@endpush
