<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="row mb-0">
        <div class="col-lg-9 col-xl-10">
            <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
        </div>
    </div>
    <hr>
    <div class="table-responsive border p-3 rounded-3">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Reservation Date</th>
                    <th>Order ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($reservation->firstname); ?></td>
                        <td><?php echo e($reservation->lastname); ?></td>
                        <td><?php echo e($reservation->email); ?></td>
                        <td><?php echo e($reservation->phone); ?></td>
                        <td><?php echo e($reservation->resev_date); ?></td>
                        <td><?php echo e($reservation->order_id); ?></td>
                        <td>
                            <?php echo $__env->make('resev.action', ['reservation' => $reservation], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\framework\UAS\listFoody\resources\views/resev/index.blade.php ENDPATH**/ ?>