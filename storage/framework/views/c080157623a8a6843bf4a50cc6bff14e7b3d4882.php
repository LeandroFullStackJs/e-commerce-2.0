<?php $__env->startSection('title', 'Tu carrito'); ?>

<?php $__env->startSection('css'); ?>
    <?php echo e('/css/cart.css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>
<section class="row">
    
    <section class=" products-list col-12 col-md-7">
        
        <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <article class="row product-added">
            <img class="col-3 img-fluid img-thumbnail" src="product_img/<?php echo e($Product->image); ?>" alt="">
            <div class="col-7 product-added-info">
                <h4><?php echo e($Product->name); ?></h4>
                <form method="post" action="/modifyProductQuantity">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="product_id" value="<?php echo e($Product->id); ?>"></input>
                    Cantidad: <input type="number" name="quantity" min="1" max="50" value="<?php if(old('product_id') == $Product->id): ?><?php echo e(old('product_id')); ?><?php else: ?><?php echo e($Product->pivot->quantity); ?><?php endif; ?>">
                    <input type="submit" value="modificar">
                </form>
                <span class="price">$<?php echo e($Product->price); ?></span>
            </div>
            <div class="remove-btn col-2">
                <form method="post" action="/removeProduct">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="product_id" value="<?php echo e($Product->id); ?>"></input>
                    <button type="submit" class="btn btn-danger">Quitar</button><br>
                </form>
            </div>
        </article>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </section>
    
    <section class="proceder col-12 col-md-5">
        <form action="/checkout" method="POST">
            <?php echo csrf_field(); ?>
            <span class="total-price-label">Total: </span> <span class="total-price">$<?php echo e($totalPrice); ?> </span>
            <br>
            <input type="hidden" name="checkout" value="<?php echo e($totalPrice); ?>"></input>
            <button type="submit" class="btn btn-success">Proceder a pagar</button>

            <?php if($errors->any()): ?>
            <div class="alert alert-danger text-left"> No hay stock suficiente de:
                <ul class="text-left">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
        </form>
    </section>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Principal\Desktop\Nueva carpeta (10)\ecommerce-acba-master\resources\views//cart.blade.php ENDPATH**/ ?>