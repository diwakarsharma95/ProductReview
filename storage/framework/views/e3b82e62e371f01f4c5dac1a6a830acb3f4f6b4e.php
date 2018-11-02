<?php $__env->startSection('title'); ?>
  Create Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Create a New Product</h1>
    <form method="POST" action="/product">
        <?php echo e(csrf_field()); ?>

        <p><label>Name: </label><input type="text" name="name"></p>
        <p><label>Price: </label><input type="text" name="price"></p>
        <p><select name="manufacturer">
        <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select></p>
        <input type="submit" value="Create"> 
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>