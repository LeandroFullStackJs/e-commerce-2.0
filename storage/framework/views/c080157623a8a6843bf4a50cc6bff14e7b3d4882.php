<?php $__env->startSection('title', 'Carrito'); ?>


<?php $__env->startSection('content'); ?>
 <!-- Start Cart  -->
 <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__currentLoopData = $Products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                                    <td class="thumbnail-img">

                                        <a href="products/<?php echo e($Product->id); ?>">
									<img class="img-fluid" src="product_img/<?php echo e($Product->image); ?>" alt="" />
								</a>
                                    </td>

                                    <td class="name-pr">
                                        <a href="products/<?php echo e($Product->id); ?>">
									    <?php echo e($Product->name); ?>

								</a>
                                    </td>
                            <td class="price-pr">
                                        <p><?php echo e($Product->price); ?></p>
                                    </td>
                                    <td class="quantity-box">
                                      <form method="post" action="/modifyProductQuantity">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="product_id" value="<?php echo e($Product->id); ?>"></input>
                     <input type="number" name="quantity" min="1" max="50" value="<?php if(old('product_id') == $Product->id): ?><?php echo e(old('product_id')); ?><?php else: ?><?php echo e($Product->pivot->quantity); ?><?php endif; ?>">
                       <div class="update-box">
                       <input type="submit" value="modificar">
                       </div>

                </form>
                                    </td>
                                    <td class="total-pr">
                                        <p><?php echo e($Product->price * $Product->pivot->quantity); ?></p>
                                    </td>
                                    <td class="remove-pr">

                <form method="post" action="/removeProduct">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="product_id" value="<?php echo e($Product->id); ?>"></input>
                    <button type="submit" class="btn btn-danger">Quitar</button><br>
                </form>
                                    </td>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

                    </div>

                </div>

            </div>


            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="coupon-box">
                        <div class="input-group input-group-sm">
                            <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                            <div class="input-group-append">
                                <button class="btn btn-theme" type="button">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">

                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4> sub total </h4>
                            <div class="ml-auto font-weight-bold"> <?php echo e($totalPrice); ?> </div>
                        </div>
                        <div class="d-flex">
                            <h4>Discount</h4>
                            <div class="ml-auto font-weight-bold"> $ 40 </div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Coupon Discount</h4>
                            <div class="ml-auto font-weight-bold"> $ 10 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Tax</h4>
                            <div class="ml-auto font-weight-bold"> $ 2 </div>
                        </div>
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> $ 388 </div>
                        </div>
                        <hr>
                      </div>

                </div>
                <div class="col-12 d-flex shopping-box">
               
               <form action="" method="post">

            <?php echo csrf_field(); ?>
            
             <input type="hidden" name="checkout" value="<?php echo e($totalPrice); ?>"></input>
           
             <a href="/checkout"class="ml-auto btn hvr-hover">Proceder a pagar</a>

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
        </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Principal\Desktop\Nueva carpeta (10)\ecommerce-acba-master\resources\views//cart.blade.php ENDPATH**/ ?>