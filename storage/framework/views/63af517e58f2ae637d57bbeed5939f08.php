<form id="deleteDoc" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-sm mb-0 btn-danger deleteBtn" data-id="<?php echo e($row->id); ?>"><i
            class="fas fa-trash-alt"></i></button>
</form>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/notadmin/pages/lamaran/component/action.blade.php ENDPATH**/ ?>