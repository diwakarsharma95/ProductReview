<!DOCTYPE html>
<html>
<head>
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="<?php echo e(secure_asset('css/wp.css')); ?>">
</head>

  <body>
    <?php echo $__env->yieldContent('content'); ?>
  </body>
</html>