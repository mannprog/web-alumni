<form id="deleteDoc" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <a href="<?php echo e(route('berita.show', $row->slug)); ?>" class="btn btn-sm mb-0 btn-primary"><i class="fas fa-eye"></i></a>
    <a href="<?php echo e(route('berita.edit', $row->slug)); ?>" class="btn btn-sm mb-0 btn-warning"><i
            class="fas fa-pencil-alt"></i></a>
    <button type="submit" class="btn btn-sm mb-0 btn-danger deleteBtn" data-id="<?php echo e($row->id); ?>"><i
            class="fas fa-trash-alt"></i></button>
</form>
<?php /**PATH C:\laragon\www\web-alumni\resources\views/admin/pages/berita/component/action.blade.php ENDPATH**/ ?>