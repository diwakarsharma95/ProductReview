<?php $__env->startSection('title'); ?>
  Product Show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-sm-12 text-center" style="background-color:lavender;">
    <h1>Name: <?php echo e($product->name); ?></h1>
    <img src="<?php echo e(url($product->image)); ?>" alt="product image" style="width:200px;height:200px;">
    <p><b>Price: </b><?php echo e($product->price); ?></p>
    <p><b>Manufacturer: </b><?php echo e($product->manufacturer->name); ?></p>
    <p><b>Description: </b><br><?php echo e($product->description); ?></p>
    <p><b>URL: </b><a href="<?php echo e($product->link); ?>" target="_blank"><?php echo e($product->link); ?></a></p>
    
    <p><button><a href='/product/<?php echo e($product->id); ?>/review/'>See Reviews</a></button></p>
    <p><button><a href='/product/<?php echo e($product->id); ?>/edit'>Edit Product</a></button></p>
    <p>
        <form method="POST" action="/product/<?php echo e($product->id); ?>">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <input type="submit" value="Delete">
        </form>
    </p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>