<?php $__env->startSection('title'); ?>
  Product Show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1>Products orders by <?php echo e($user->name); ?></h1>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        Name: <?php echo e($product->name); ?>

        <br>
        Price: <?php echo e($product->price); ?>

        <br>
        Quantity:<?php echo e($product->pivot->quantity); ?>

        <br>
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>