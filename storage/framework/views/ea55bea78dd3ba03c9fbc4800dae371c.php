    <?php $__env->startSection('content'); ?>

    <div class="container-sm my-5 card border-secondary">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo e(Vite::asset('resources/img/logo.png')); ?>" class="img-fluid rounded-strart" alt="Gambar Detail">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <?php if($foods): ?>
                        <h5 class="card-title"><?php echo e($foods->nameFood); ?></h5>
                        <p class="card-text">
                            <?php echo e($foods->description); ?> <br>
                            Categories: <?php echo e($foods->categorie->name); ?> <br>
                            Rp <?php echo e(intval ($foods->price). '.000'); ?>

                        </p>
                        <p class="card-text d-grid gap-2 d-md-flex justify-content-md-end">
                            <small>
                                <a href="<?php echo e(route('foods.index')); ?>" class="btn me-md-2" style="background-color: #fca838">Back</a>
                                <a href="<?php echo e(route('foods.edit', [$foods->id])); ?>" class="btn me-md-2" style="background-color: #fca838">Edit</a>
                            </small>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\framework\listFoody\resources\views/food/show.blade.php ENDPATH**/ ?>