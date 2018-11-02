<?php $__env->startSection('title'); ?>
  Edit Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form method="POST" action="/product/<?php echo e($product->id); ?>">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PUT')); ?>

        </p><label>Name</label>
        <input type="text" name="name" value="<?php echo e($product->name); ?>"></p>
        <p><label>Price</label>
        <input type="text" name="price" value="<?php echo e($product->price); ?>"><br></p>
        <p><select name="manufacturer">
        <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($manufacturer->id === $product->manufacturer_id): ?>
                <option value="<?php echo e($manufacturer->id); ?>" selected="selected"><?php echo e($manufacturer->name); ?></option>
            <?php else: ?>
                <option value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->name); ?></option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    <input type="submit" value="Update">
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>