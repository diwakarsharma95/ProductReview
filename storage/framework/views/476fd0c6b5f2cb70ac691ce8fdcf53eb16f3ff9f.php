<?php $__env->startSection('title'); ?>
  Edit Form
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-sm-12 text-center" style="background-color:lavender;">
<?php if(count($errors) > 0): ?>
        <div class="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="POST" action="/product/<?php echo e($product->id); ?>">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PUT')); ?>

        <img src="<?php echo e(url($product->image)); ?>" alt="product image" style="width:200px;height:200px;">
        </p><label>Name</label>
        <input type="text" name="name" value="<?php echo e($product->name); ?>"></p>
        <p><label>Price</label>
        <input type="text" name="price" value="<?php echo e($product->price); ?>"><br></p>
        <p><label>Description: </label><br>
         <input type="text" name="description" value="<?php echo e($product->description); ?>"><br></p>
        <p><label>URL: </label><br>
         <input type="url" name="link" value="<?php echo e($product->link); ?>" placeholder="https://example.com"  pattern="https://.*"><br></p>
        <p><select name="manufacturer">
        <?php $__currentLoopData = $manufacturers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($manufacturer->id == $product->manufacturer_id): ?>
                <option value="<?php echo e($manufacturer->id); ?>" selected="selected"><?php echo e($manufacturer->name); ?></option>
            <?php else: ?>
                <option value="<?php echo e($manufacturer->id); ?>"><?php echo e($manufacturer->name); ?></option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    <input type="submit" value="Update">
    </form>
</div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>