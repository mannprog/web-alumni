

<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Petugas - <?php echo e($petugas->name); ?></h1>
        <a href="<?php echo e(route('petugas.index')); ?>" class="btn btn-sm btn-secondary shadow-sm">Kembali</a>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <form action="<?php echo e(route('alumni.update', $petugas->id)); ?>" method="post">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="row align-items-center mt-2 mb-0">
                    <div class="col-lg-12">
                        <h4 class="font-weight-bold border-bottom pb-2">Form Data Pribadi
                        </h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="name">Nama Lengkap<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="name" id="name"
                                value="<?php echo e(old('name', $petugas->name)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="nip" id="nip"
                                value="<?php echo e(old('nip', $petugas->petugasDetail->nip)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nuptk">NUPTK<span class="text-danger">*</span></label>
                            <?php if($detail->user_id == $petugas->id): ?>
                                <input type="text" class="form-control form-control-sm mr-2" name="nuptk"
                                    id="nuptk" value="<?php echo e(old('nip', $detail->nuptk)); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="nik" id="nik">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option>---Pilih Jenis Kelamin---</option>
                                <option value="l">Laki-laki</option>
                                <option value="p">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="role">Jabatan<span class="text-danger">*</span></label>
                            <select class="form-control" name="role" id="role">
                                <option>---Pilih Jabatan---</option>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">Kepala Sekolah</option>
                                <option value="4">Petugas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status Kepegawaian<span class="text-danger">*</span></label>
                            <select name="status" id="status" class="form-control">
                                <option>---Pilih Status Kepegawaian---</option>
                                <option value="pns">PNS</option>
                                <option value="nonpns">Non PNS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="tempat_lahir"
                                id="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
                            <input type="date" class="form-control form-control-sm mr-2" name="tanggal_lahir"
                                id="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="no_handphone">No Handphone<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-sm mr-2" name="no_handphone"
                                id="no_handphone">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Lengkap<span class="text-danger">*</span></label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                    <label class="custom-file-label" for="foto">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mt-2 mb-0">
                    <div class="col-lg-12">
                        <h4 class="font-weight-bold border-bottom pb-2">Form Data Kontak
                        </h4>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Ubah Data Petugas'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/petugas/pages/edit.blade.php ENDPATH**/ ?>