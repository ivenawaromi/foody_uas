<div class="d-flex">
    <a href="<?php echo e(route('resev.show', $reservation->order_id)); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
    <a href="<?php echo e(route('resev.edit', $reservation->order_id)); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
    <div>
        <form action="<?php echo e(route('resev.destroy', $reservation->order_id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
<?php /**PATH C:\Users\ASUS\Downloads\UTS\listFoody\resources\views/resev/action.blade.php ENDPATH**/ ?>