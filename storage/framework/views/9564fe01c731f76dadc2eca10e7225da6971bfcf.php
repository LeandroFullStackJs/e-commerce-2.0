<?php $__env->startSection('title', 'Editar producto'); ?>

<?php $__env->startSection('main'); ?>
<br><br>
    <h1>Formulario de modificación de un producto</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        Nombre:
        <input value="<?php echo e(old('name', $Product->name)); ?>" class="form-control" type="text" name="name" class="form-control" require>
        <br>

        Precio:
        <input value="<?php echo e(old('price', $Product->price)); ?>" type="text" name="price" class="form-control" require>
        <br>

        Stock:
        <input value="<?php echo e(old('stock', $Product->stock)); ?>" type="number" name="stock" class="form-control" require>
        <br>

        Descripción:
        <input value="<?php echo e(old('description', $Product->description)); ?>" type="textarea" name="description" class="form-control" require>
        <br>

        Imagen:
        <input class="from-control" type="file" name="image" require>
        <br> <br>

        Categoría:
        <select name="category_id" class="form-control">
            <option value="">Seleccione una categoría</option>
            <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if(is_null(old('category_id'))): ?>

                    <?php if($Product->category_id == $Category->id): ?>
                        <option value="<?php echo e($Category->id); ?>" selected><?php echo e($Category->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($Category->id); ?>"><?php echo e($Category->name); ?></option>  
                    <?php endif; ?>

                <?php else: ?>

                    <?php if(old('category_id') == $Category->id): ?>
                        <option value="<?php echo e($Category->id); ?>" selected><?php echo e($Category->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($Category->id); ?>"><?php echo e($Category->name); ?></option>  
                    <?php endif; ?>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br>

        Marca:
        <select name="mark_id" class="form-control">
            <option value="">Seleccione una marca</option>
            <?php $__currentLoopData = $Marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Mark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if(is_null(old('mark_id'))): ?>

                    <?php if($Product->mark_id == $Mark->id): ?>
                        <option value="<?php echo e($Mark->id); ?>" selected><?php echo e($Mark->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($Mark->id); ?>"><?php echo e($Mark->name); ?></option>  
                    <?php endif; ?>

                <?php else: ?>

                    <?php if(old('mark_id') == $Mark->id): ?>
                        <option value="<?php echo e($Mark->id); ?>" selected><?php echo e($Mark->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($Mark->id); ?>"><?php echo e($Mark->name); ?></option>  
                    <?php endif; ?>
                    
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br>

        <input class="btn btn-success" type="submit" value="Agregar">
        <input class="btn btn-danger" type="button" value="Volver" onclick="location.href='/adminProducts';">
        <br> <br>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Principal\Desktop\Nueva carpeta (10)\ecommerce-acba-master\resources\views/editProduct.blade.php ENDPATH**/ ?>