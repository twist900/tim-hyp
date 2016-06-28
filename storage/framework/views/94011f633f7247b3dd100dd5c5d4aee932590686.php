<?php $__env->startSection('content'); ?>
<div class="container">

  <?php if ( ! ($taxon->parent == null)): ?>

    <?php if($taxon->parent->name == "Prodotti"): ?>
      <?php echo $__env->make('taxon._device_taxon', ['taxon' => $taxon, 'devices' => $devices], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php elseif($taxon->parent->name == "Assistenza"): ?>
      <?php echo $__env->make('taxon._assistance_service_taxon', ['taxon' => $taxon, 'assistanceServices' => $assistanceServices], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php elseif($taxon->parent->name == "Smart Life"): ?>
      <?php echo $__env->make('taxon._smart_life_taxon', ['taxon' => $taxon, 'smartLifeServices' => $smartLifeServices ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>

  <?php else: ?>
    <?php echo $__env->make('taxon._root_taxon', ['taxon' => $taxon], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.application', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>