

<?php $__env->startSection('content'); ?>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Alumni</h1>
        <button id="createAlumni" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>
            Tambah</button>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <?php echo e($dataTable->table(['class' => 'table align-items-center display responsive nowrap'])); ?>

            </div>
        </div>
    </div>
    <?php echo $__env->make('admin.pages.alumni.component.add-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.pages.alumni.component.edit-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('custom-styles'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('library/http_cdn.datatables.net_1.13.4_css_dataTables.bootstrap5.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('library/http_cdn.datatables.net_responsive_2.4.1_css_responsive.bootstrap5.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('library/http_cdnjs.cloudflare.com_ajax_libs_toastr.js_latest_toastr.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('custom-scripts'); ?>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo e(asset('library/http_cdn.datatables.net_1.13.4_js_jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('library/http_cdn.datatables.net_1.13.4_js_dataTables.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('library/http_cdn.datatables.net_responsive_2.4.1_js_dataTables.responsive.js')); ?>"></script>
    <script src="<?php echo e(asset('library/http_cdn.datatables.net_responsive_2.4.1_js_responsive.bootstrap4.js')); ?>"></script>

    <?php echo e($dataTable->scripts(attributes: ['type' => 'module'])); ?>


    <script>
        $(document).ready(function() {

            $('#createAlumni').click(function() {
                setTimeout(function() {
                    $('#name').focus();
                }, 500);
                $('#saveBtn').removeAttr('disabled');
                $('#saveBtn').html("Simpan");
                $('#itemForm').trigger("reset");
                $('.modal-title').html("Tambah Alumni");
                $('#modal-md').modal('show');
            });

            $('body').on('click', '#editItem', function() {
                var alumni_id = $(this).data('id');
                $.get("<?php echo e(route('alumni.index')); ?>" + '/' + alumni_id + '/edit', function(data) {
                    $('#modal-edit').modal('show');
                    setTimeout(function() {
                        $('#name').focus();
                    }, 500);
                    $('.modal-title').html("Ubah Profil Alumni");
                    $('#updateBtn').removeAttr('disabled');
                    $('#updateBtn').html("Simpan");
                    $('#edit_alumni_id').val(data.id);
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
                })
            });

            $('body').on('click', '.deleteBtn', function(e) {
                e.preventDefault();
                var confirmation = confirm("Apakah yakin untuk menghapus?");
                if (confirmation) {
                    var company_id = $(this).data('id');
                    var formData = new FormData($('#deleteDoc')[0]);
                    $('.deleteBtn').attr('disabled', 'disabled');
                    $('.deleteBtn').html('...');
                    $.ajax({
                        data: formData,
                        url: "<?php echo e(route('alumni.index')); ?>" + '/' + company_id,
                        contentType: false,
                        processData: false,
                        type: "POST",
                        success: function(data) {
                            $('#deleteDoc').trigger("reset");
                            $('#company-table').DataTable().draw();
                            toastr.success(data.message);
                        },
                        error: function(data) {
                            $('.deleteBtn').removeAttr('disabled');
                            $('.deleteBtn').html('Hapus');
                            // toastr.error(data.responseJSON.message)
                            toastr.error('Tidak bisa hapus data karena sudah digunakan')
                        }
                    });
                }
            });

            $('#saveBtn').click(function(e) {
                e.preventDefault();
                $('#saveBtn').attr('disabled', 'disabled');
                $('#saveBtn').html('Simpan ...');
                var formData = new FormData($('#itemForm')[0]);
                $.ajax({
                    data: formData,
                    url: "<?php echo e(route('alumni.store')); ?>",
                    contentType: false,
                    processData: false,
                    type: "POST",
                    success: function(data) {
                        $('#itemForm').trigger("reset");
                        $('#modal-md').modal('hide');
                        $('#company-table').DataTable().draw();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.message,
                        });
                    },
                    error: function(data) {
                        $('#saveBtn').removeAttr('disabled');
                        $('#saveBtn').html("Simpan");
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

            $('#updateBtn').click(function(e) {
                e.preventDefault();
                var company_id = $(this).data('id');
                var formData = new FormData($('#updateForm')[0]);
                $('#updateBtn').attr('disabled', 'disabled');
                $('#updateBtn').html('Simpan ...');
                $.ajax({
                    data: formData,
                    url: "<?php echo e(route('alumni.index')); ?>" + '/' + company_id,
                    contentType: false,
                    processData: false,
                    type: "POST",
                    success: function(data) {
                        $('#updateForm').trigger("reset");
                        $('#modal-edit').modal('hide');
                        $('#company-table').DataTable().draw();
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', ['title' => 'Data Alumni'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/alumni/index.blade.php ENDPATH**/ ?>