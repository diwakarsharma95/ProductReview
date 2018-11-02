<?php $__env->startSection('title'); ?>
  Product Show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Products orders by <?php echo e($user->name); ?></h1>
    <?php $__currentLoopData = $followers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        Name: <?php echo e($follow->user_id->fname); ?>

        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>