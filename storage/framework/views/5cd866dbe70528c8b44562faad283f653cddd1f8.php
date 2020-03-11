<?php $__env->startSection('title', 'Panel de administracion'); ?>

<?php $__env->startSection('main'); ?>
    <h1>Administración</h1>

    <div class="list-group">
        <a class="list-group-item list-group-item-action" href="adminMarks">
            Administración de Marcas
        </a>
        <a class="list-group-item list-group-item-action" href="adminCategories">
            Administración de Categorías
        </a>
        <a class="list-group-item list-group-item-action" href="adminProducts">
            Administración de Productos
        </a>
        <a class="list-group-item list-group-item-action" href="adminCustomers">
            Administración de Usuarios
        </a>
    </div>

    <br>

    <a class="py-2" href="adminLogOut">Cerrar sesion de administrador</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Principal\Desktop\Nueva carpeta (10)\ecommerce-acba-master\resources\views/admin.blade.php ENDPATH**/ ?>