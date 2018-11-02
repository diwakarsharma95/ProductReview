<?php $__env->startSection('title'); ?>
Products
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-sm-12 text-center" style="background-color:lavender;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top text-center">
            <div class="container">
                You can't access this page ! This is for only "<?php echo e($role); ?>" user only.
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>