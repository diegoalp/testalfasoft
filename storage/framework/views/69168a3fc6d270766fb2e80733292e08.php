<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-12">
        <?php if(session()->get('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('success')); ?>  
            </div>
        <?php endif; ?>
    </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contatos</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Contato</th>
                                <th>E-mail</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($c->id); ?></td>
                                <td><?php echo e($c->name); ?></td>
                                <td><?php echo e($c->contact); ?></td>
                                <td><?php echo e($c->email); ?></td>
                                <td class="d-flex gap-2 justify-content-end">
                                    <a href="<?php echo e(route('contacts.show',$c->id)); ?>" class="btn btn-primary rounded-pill btn-sm text-uppercase">ver</a>
                                    <a href="<?php echo e(route('contacts.edit',$c->id)); ?>" class="btn btn-primary rounded-pill btn-sm text-uppercase">Editar</a>
                                    <form action="<?php echo e(route('contacts.destroy', $c->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger rounded-pill btn-sm text-uppercase">Remover</button>
                                    </form>
                                </td>
                            </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a class="btn btn-primary btn-sm text-uppercase" href="<?php echo e(route('contact.new')); ?>">+ novo</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/diego/Workspace/alfasoft/resources/views/home.blade.php ENDPATH**/ ?>