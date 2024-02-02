<?php $__env->startSection('content'); ?>
<div class="row">
 <div class="col-sm-6 offset-sm-3">
    <h3>Adicionar contato</h3>
  <div>
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('contacts.store')); ?>">
          <?php echo csrf_field(); ?>
          <div class="form-group mb-2">    
              <label for="name">Nome:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group mb-2">
              <label for="contact">Contato:</label>
              <input type="text" class="form-control" maxlength="9" name="contact"/>
          </div>

          <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
                             
          <button type="submit" class="btn btn-outline-primary my-4">Adicionar</button>
      </form>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/diego/Workspace/alfasoft/resources/views/create.blade.php ENDPATH**/ ?>