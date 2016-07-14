<?php $__env->startSection('content'); ?>
<div class="container">

  <h2><?php echo e($smartLifeService->name); ?></h2>
  <h3><?php echo $smartLifeService->description; ?></h3>
  <p><?php echo $smartLifeService->benefits; ?></p>

  <?php if ( ! ($relatedDevices->isEmpty())): ?>
    <h3>Related Devices:</h3>
    <ul class="list-group">


      <div class="col-sm-12" style="width: 100%; padding:35px;">
          <?php foreach( $relatedDevices as $device ): ?>
            <?php echo $__env->make('shared._device', ['device' => $device], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php endforeach; ?>
      </div>
    </ul>

    <?php echo $relatedDevices->render(); ?>

  <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.application', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>