<?php $__env->startSection('content'); ?>

<h2><?php echo e($smartLifeService->name); ?></h2>
<h3><?php echo $smartLifeService->description; ?></h3>
<p><?php echo $smartLifeService->benefits; ?></p>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.application', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>