<?php $__env->startSection('title'); ?>
Reviews
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-sm-12 text-center" style="background-color:lavender;">
    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/product/<?php echo e($product->id); ?>/review/<?php echo e($review->id); ?>"><li><?php echo e($review->review); ?></li></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br>
<p><button><a href='/product/<?php echo e($product->id); ?>/review/create'>Create Review</a></button></p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>