<?php $__env->startSection('title'); ?>
Products
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<ul>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/product/<?php echo e($product->id); ?>"><li><?php echo e($product->name); ?></li></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<a href = "/product/create">Create</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>