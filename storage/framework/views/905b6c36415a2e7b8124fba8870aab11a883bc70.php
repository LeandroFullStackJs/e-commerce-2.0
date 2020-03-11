<?php $__env->startSection('title', 'Ingreso de administradores'); ?>

<?php $__env->startSection('main'); ?>

<h1>Ingreso de administradores</h1>

<form action="" method="post">

    <?php if($errors->any()): ?>
    <div class="alert alert-danger text-left">
        <ul class="text-left">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php echo csrf_field(); ?>
    Usuario:
    <input value="<?php echo e(old('user')); ?>" class="form-control" type="text" name="user" class="form-control" require>
    <br>

    Contraseña:
    <input type="password" name="password" class="form-control" require>
    <br>

    <input type="submit" value="Entrar">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Principal\Desktop\Nueva carpeta (10)\ecommerce-acba-master\resources\views/adminLogIn.blade.php ENDPATH**/ ?>