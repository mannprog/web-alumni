<form id="deleteDoc" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <a href="<?php echo e(route('petugas.show', $row->id)); ?>" class="btn btn-sm mb-0 btn-primary"><i class="fas fa-eye"></i></a>
    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
        <a href="javascript:void()" data-id="<?php echo e($row->id); ?>" id="editData" class="btn btn-sm mb-0 btn-warning"><i
                class="fas fa-pencil-alt"></i></a>
        <button type="submit" class="btn btn-sm mb-0 btn-danger deleteBtn" data-id="<?php echo e($row->id); ?>"><i
                class="fas fa-trash-alt"></i></button>
    <?php endif; ?>
</form>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/petugas/component/action.blade.php ENDPATH**/ ?>