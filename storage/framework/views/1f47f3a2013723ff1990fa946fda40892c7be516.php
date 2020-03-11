<?php $__env->startSection('title', 'Administrador de productos'); ?>

<?php $__env->startSection('main'); ?>
    <h1>Panel de administración de productos</h1>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver al panel</a>

    <table class="table table-stripped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Marca</th>
                <th>Categoría</th>
                <th colspan="2">
                <a href="addProduct" class="btn btn-light">
                    Agregar nuevo producto
                </a>
                </th>
            </tr>
        </thead>
    <tbody>
        
        <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($Product->id); ?></td>
                <td><?php echo e($Product->name); ?></td>
                <td>$<?php echo e($Product->price); ?></td>
                <td><?php echo e($Product->stock); ?></td>
                <td><?php echo e($Product->description); ?></td>
                <td><img class="img-fluid img-thumbnail main-image" src="product_img/<?php echo e($Product->image); ?>" alt=""></td>
                <td><?php echo e($Product->mark->name); ?></td>
                <td><?php echo e($Product->category->name); ?></td>
                <td><a href="editProduct/<?php echo e($Product->id); ?>" class="btn btn-outline-secondary">Modificar</a></td>
                <td><a href="deleteProduct/<?php echo e($Product->id); ?>" class="btn btn-outline-secondary">Eliminar</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
    </table>

    <a href="admin" class="btn btn-outline-secondary m-3">Volver al panel</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Principal\Desktop\Nueva carpeta (10)\ecommerce-acba-master\resources\views/adminProducts.blade.php ENDPATH**/ ?>