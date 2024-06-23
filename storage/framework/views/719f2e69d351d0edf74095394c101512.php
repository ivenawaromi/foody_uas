<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-md" style="background-color: #fca838" data-bs-toggle="modal" data-bs-target="#createEmployee">
                        <i class="bi bi-plus-circle me-1"></i>Create Food
                    </button>
                    <div class="modal fade" id="createEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo e(route('foods.store')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Input Food</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nameFood" class="form-label">Name Food</label>
                                            <input class="form-control <?php $__errorArgs = ['nameFood'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="nameFood" id="nameFood" value="<?php echo e(old('nameFood')); ?>" placeholder="Enter Name Food">
                                            <?php $__errorArgs = ['nameFood'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="price" class="form-label">Price</label>
                                            <input class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="decimal" name="price" id="price" value="<?php echo e(old('price')); ?>" placeholder="Enter Price">
                                            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="categorie" class="form-label">Categories</label>
                                            <select name="categorie" id="categorie" class="form-select">
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($categorie->id); ?>" <?php echo e(old('categorie') == $categorie->id ? 'selected' : ''); ?>><?php echo e($categorie->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['categorie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" value="<?php echo e(old('description')); ?> " placeholder="Enter Description"></textarea>
                                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="cv" class="form-label">Upload Gambar</label>
                                            <input type="file" class="form-control" name="cv" id="cv">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn" style="background-color: #fca838">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($food->nameFood); ?></h5>
                <p class="card-text">
                    <?php echo e($food->description); ?> <br>
                    Category : <?php echo e($food->categorie->name); ?> <br>
                    Rp <?php echo e(intval($food->price) . '.000'); ?>

                </p>
                <a href="<?php echo e(route('foods.show', ['food'=> $food->id])); ?>" class="btn btn-outline-warning btn-sm me-1" >See</a>
                <a href="<?php echo e(route('foods.edit', ['food'=> $food->id])); ?>" class="btn btn-outline-warning btn-sm me-1">Edit</a>
                <form action="<?php echo e(route('foods.destroy', ['food' => $food->id])); ?>" method="POST" class="btn row">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-outline-warning btn-sm me-1">Delete</button>
                </form>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\framework\listFoody\resources\views/food/index.blade.php ENDPATH**/ ?>