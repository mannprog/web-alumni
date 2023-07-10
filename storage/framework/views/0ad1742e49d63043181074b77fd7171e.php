

<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Lowongan Kerja - <?php echo e($loker->nama); ?></h1>
        <a href="<?php echo e(route('loker.index')); ?>" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 mx-auto text-center mb-3">
                    <?php if($loker->foto): ?>
                        <img class="card-img-top" src="<?php echo e(asset('img/loker/' . $loker->foto)); ?>" style="height: 250px">
                    <?php else: ?>
                        <h5 class="font-italic">Tidak Ada Gambar</h5>
                    <?php endif; ?>
                </div>
                <div class="col-lg-9">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <h4 class="font-weight-bold border-bottom pb-2"><?php echo e($loker->nama); ?>

                            </h4>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-2">
                            <p class="card-text">Status</p>
                        </div>
                        <div class="col-1">
                            <p class="card-text">:</p>
                        </div>
                        <div class="col-7 col-lg-9">
                            <?php if($loker->is_active === 0): ?>
                                <p class="card-text text-justify">Lowongan masih berlangsung</p>
                            <?php else: ?>
                                <p class="card-text text-justify">Lowongan sudah ditutup</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-2">
                            <p class="card-text">Lokasi</p>
                        </div>
                        <div class="col-1">
                            <p class="card-text">:</p>
                        </div>
                        <div class="col-7 col-lg-9">
                            <p class="card-text text-justify"><?php echo e($loker->lokasi); ?></p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-2">
                            <p class="card-text">Tanggal Mulai</p>
                        </div>
                        <div class="col-1">
                            <p class="card-text">:</p>
                        </div>
                        <div class="col-7 col-lg-9">
                            <p class="card-text text-justify">
                                <?php echo e(\Carbon\Carbon::parse($loker->tanggal_mulai)->format('d M Y')); ?></p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-2">
                            <p class="card-text">Tanggal Akhir</p>
                        </div>
                        <div class="col-1">
                            <p class="card-text">:</p>
                        </div>
                        <div class="col-7 col-lg-9">
                            <p class="card-text text-justify">
                                <?php echo e(\Carbon\Carbon::parse($loker->tanggal_akhir)->format('d M Y')); ?></p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-2">
                            <p class="card-text">Spesifikasi</p>
                        </div>
                        <div class="col-1">
                            <p class="card-text">:</p>
                        </div>
                        <div class="col-7 col-lg-9">
                            <p class="card-text text-justify"><?php echo $loker->isi; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-between my-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Pelamar - <?php echo e($loker->nama); ?></h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pelamar</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($lamaran->isEmpty()): ?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada pelamar yang melamar dalam lowongan ini.
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php $__currentLoopData = $lamaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lamar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($lamar->user->name); ?></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($lamar->tanggal_lamaran)->format('d M Y')); ?></td>
                                    <td>
                                        <?php if($lamar->is_accept === null): ?>
                                            Belum ditentukan
                                        <?php else: ?>
                                            <?php if($lamar->is_accept === 0): ?>
                                                Disetujui
                                            <?php else: ?>
                                                Ditolak
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('allAlumni.detail', $lamar->user->username)); ?>"
                                            class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                        <?php if($lamar->is_accept === null): ?>
                                            <a href="#" class="btn btn-sm btn-info" data-toggle="modal"
                                                data-target="#accModal"><i class="fas fa-check"></i></a>
                                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                                                data-target="#rejModal"><i class="fas fa-times"></i></a>
                                        <?php else: ?>
                                            <?php if($lamar->is_accept === 0): ?>
                                                <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="#rejModal"><i class="fas fa-times"></i></a>
                                            <?php else: ?>
                                                <a href="#" class="btn btn-sm btn-info" data-toggle="modal"
                                                    data-target="#accModal"><i class="fas fa-check"></i></a>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>

                                <?php echo $__env->make('admin.pages.loker.component.accOrRej', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('custom-scripts'); ?>
    <script src="<?php echo e(asset('library/http_cdn.datatables.net_1.13.4_js_jquery.dataTables.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            var successMessage = '<?php echo e(session('success')); ?>';

            if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: successMessage,
                });
            }

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Detail Lowongan Kerja'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/loker/detail.blade.php ENDPATH**/ ?>