<!-- Accept Modal-->
<div class="modal fade" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah yakin untuk melamar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih tombol "Kirim" dibawah jika kamu yakin untuk mengirim lamaran.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <form action="<?php echo e(route('kirim-lamaran')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">
                    <input type="hidden" name="loker_id" value="<?php echo e($loker->id); ?>">
                    
                    <button class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/notadmin/pages/lowongan/component/kirimLamaran.blade.php ENDPATH**/ ?>