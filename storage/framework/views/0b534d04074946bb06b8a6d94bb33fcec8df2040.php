<?php $__env->startSection('title'); ?>
Products
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="jumbotron text-center">
    <h1>Product List</h1>      
  </div>
</div>
 <div class="col-sm-12 text-center" style="background-color:lavender;">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/product/<?php echo e($product->id); ?>"><li><?php echo e($product->name); ?></li></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div  class="col-sm-12 text-center">
<button><a href = "/product/create">Create</a></button>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>