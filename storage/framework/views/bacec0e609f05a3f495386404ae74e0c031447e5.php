<?php $__env->startSection('title'); ?>
  Edit Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-sm-12 text-center" style="background-color:lavender;">
<h1>Edit Review</h1>
   <?php if(count($errors) > 0): ?>
        <div class="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="POST" action="/product/<?php echo e($product->id); ?>/review/<?php echo e($review->id); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PUT')); ?>

        <p><label>Rating</label>
        <input type="text" name="rating" value="<?php echo e($review->rating); ?>"><br></p>
        
        <p><label>Review</label>
        <input type="text" name="review" value="<?php echo e($review->review); ?>"><br></p>
        </select>
    <input type="submit" value="Update">
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>