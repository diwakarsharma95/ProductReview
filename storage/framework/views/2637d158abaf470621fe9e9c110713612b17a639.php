<?php $__env->startSection('title'); ?>
  Review Show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-sm-12 text-center" style="background-color:lavender;">
        <b>Review:</b> <?php echo e($review->review); ?><br>
        <b>Rating:</b> <?php echo e($review->rating); ?><br>
        <b>Posted by:</b> <?php echo e($review->user->fname); ?><br>
        <b>Created at:</b> <?php echo e(Carbon\Carbon::parse($review->creation_date)); ?><br>
        <b>Updated at:</b> <?php echo e(Carbon\Carbon::parse($review->creation_date)->diffForHumans()); ?>

        <p></p>        
        <p><button><a href='/product/<?php echo e($product->id); ?>/review/<?php echo e($review->id); ?>/edit'>Edit Review</a></button></p>
        <p><button><a href='<?php echo e(url("product/{$product->id}/review/{$review->id}/like")); ?>'>Like(<?php echo e($likeCtr); ?>)</a></button></p>
        <p><button><a href='<?php echo e(url("product/{$product->id}/review/{$review->id}/dislike")); ?>'>Dislike(<?php echo e($dislikeCtr); ?>)</a></button></p>
        
         <form method="POST" action="/product/<?php echo e($product->id); ?>/review/<?php echo e($review->id); ?>">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <input type="submit" value="Delete">
        </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>