 
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3>Atualizar Contato</h3>

        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <br /> 
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('contacts.update', $contact->id)); ?>">
            <?php echo method_field('PATCH'); ?> 
            <?php echo csrf_field(); ?>
            <div class="form-group mb-2">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" value=<?php echo e($contact->name); ?> />
            </div>

            <div class="form-group mb-2">
                <label for="contact">Contato:</label>
                <input type="text" class="form-control" name="contact" value=<?php echo e($contact->contact); ?> />
            </div>

            <div class="form-group mb-2">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" name="email" value=<?php echo e($contact->email); ?> />
            </div>

            <button type="submit mty-4" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/diego/Workspace/alfasoft/resources/views/edit.blade.php ENDPATH**/ ?>