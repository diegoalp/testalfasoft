 
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="card">
            <div class="card-header">
                <h3>Página do Contato</h3>
            </div>
            <div class="card-body">
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            <div><span class="fw-bold">Nome:</span> <?php echo e($contact->name); ?></div>
            <div><span class="fw-bold">Contato:</span> <?php echo e($contact->contact); ?></div>
            <div><span class="fw-bold">E-mail:</span> <?php echo e($contact->email); ?></div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/diego/Workspace/alfasoft/resources/views/detail.blade.php ENDPATH**/ ?>