<?php $__env->startSection('title'); ?>
  Create Item Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <div class="col-sm-12 text-center" style="background-color:lavender;">
    <h1>Create a New Product</h1>
    <?php if(count($errors) > 0): ?>
        <div class="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
    
    <form class="form-group" method="POST" action="/product" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <p><label>Name: </label><input type="text" name="name" value="<?php echo e(old('name')); ?>"></p>
        <p><label>Price: </label><input type="text" name="price" value="<?php echo e(old('price')); ?>"></p>
        <label>Description: </label>
        <textarea class="form-control" name="description" value="<?php echo e(old('description')); ?>" rows="5" ></textarea><br>
        <p><label>URL: </label><input type="url" name="link" value="<?php echo e(old('link')); ?>" placeholder="https://example.com"  pattern="https://.*"></p>
        <p><select class="form-control" name="manufacturer">
        <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($manufacturer->id == old('manufacturer')): ?>
                <option value="<?php echo e($manufacturer->id); ?>" selected="selected"><?php echo e($manufacturer->name); ?></option>
            <?php else: ?>
                <option value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->name); ?></option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select></p>
        <p><input type="file"name="image"></p>
        <input class="btn btn-default" type="submit" value="Create">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>