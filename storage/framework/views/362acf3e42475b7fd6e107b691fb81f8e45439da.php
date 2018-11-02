<?php $__env->startSection('title'); ?>
  Product Show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1><?php echo e($product->name); ?></h1>
    <p><?php echo e($product->price); ?></p>
    <p><?php echo e($product->manufacturer->name); ?></p>
    <p><a href='/product/<?php echo e($product->id); ?>/edit'>Edit</a></p>
    <p>
        <form method="POST" action="/product/<?php echo e($product->id); ?>">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <input type="submit" value="Delete">
        </form>
    </p>
    <a href="/product">Home</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>