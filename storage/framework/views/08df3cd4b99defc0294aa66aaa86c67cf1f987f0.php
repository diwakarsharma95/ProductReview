<?php $__env->startSection('title'); ?>
  Create Review Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-sm-12 text-center" style="background-color:lavender;">
<h1>Create a New Review</h1>
<form  method="POST" action="/product" enctype="multipart/form-data">
  
  
</form> 
   <?php if(count($errors) > 0): ?>
        <div class="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="POST" action="/product/<?php echo e($product->id); ?>/review" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
        <p><label>Rating: </label><input type="text" name="rating" value="<?php echo e(old('rating')); ?>" placeholder="Out of 5"></p>
        <p><label>Review: </label><input type="text" name="review" value="<?php echo e(old('review')); ?>"></p>
        <input type="submit" value="Create">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>