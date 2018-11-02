<?php $__env->startSection('title'); ?>
  Product Show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo e($reviews->review); ?><br>
    <?php echo e($reviews->creation_date); ?><br>
    <a href="/product">Home</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>