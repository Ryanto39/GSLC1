

<?php $__env->startSection('title', 'Kampoeng Legenda'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="d-flex justify-content-around">
    <?php for($i = 0; $i < count($stand); $i++): ?>
        <div class="card" style="width: 18rem;">
        <img src=<?php echo e($image[$i]); ?> class="card-img-top mx-auto d-block" style="width: 100px; height: 100px; margin: 20px;" alt="...">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?php echo e($stand[$i]); ?></h5>
            <p class="card-text"><?php echo e($menu[$i]); ?></p>
            <a href="#" class="btn btn-primary" style="margin: 10px;">Check</a>
            <?php if($status[$i] == "Closed"): ?>
            <div class="alert alert-danger d-inline-bock" style="text-align:center">
                Closed
            </div>
            <?php else: ?>
            <div class="alert alert-success d-inline-bock" style="text-align:center">
                Open
            </div>
            <?php endif; ?>
        </div>
        </div>
        <?php endfor; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VSCode Workspace\Laravel Projects\LaravelProject\LaravelProject\resources\views/restaurant.blade.php ENDPATH**/ ?>