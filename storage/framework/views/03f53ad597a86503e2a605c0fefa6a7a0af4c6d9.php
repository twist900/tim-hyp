<div class="container">
  <h2><?php echo e($taxon->name); ?></h2>
  <?php foreach($taxon->children as $childTaxon): ?>

    <?php if($taxon->name == 'Smart Life'): ?>
      <?php if($childTaxon->smartLifeServices->count() > 0): ?>
        <div class="taxon-title">
          <a href="<?php echo e(action('TaxonController@show', ['id' => $childTaxon->id])); ?>">
            <img class="taxon-title-image"  src="<?php echo e($childTaxon->icon->url('thumb')); ?>">
            <h3 class="taxon-title-h3"><?php echo e($childTaxon->name); ?></h3>
          </a>
        </div>

        <?php echo $__env->make('shared._smart_life_service_list', ['taxon' => $childTaxon], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>
    <?php elseif($taxon->name == 'Assistance'): ?>
      <?php if($childTaxon->assistanceServices->count() > 0): ?>
        <a href="<?php echo e(action('TaxonController@show', ['id' => $childTaxon->id])); ?>">
          <h3><?php echo e($childTaxon->name); ?></h3>
        </a>
        <?php echo $__env->make('shared._assistance_service_list', ['taxon' => $childTaxon], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>
    <?php elseif($taxon->name == 'Products'): ?>
      <?php if($childTaxon->devices->count() > 0): ?>
       <div class="taxon-title">
          <a href="<?php echo e(action('TaxonController@show', ['id' => $childTaxon->id])); ?>">
            <img class="taxon-title-image"  src="<?php echo e($childTaxon->icon->url('thumb')); ?>">
            <h3 class="taxon-title-h3"><?php echo e($childTaxon->name); ?></h3>
          </a>
        </div>
        <?php echo $__env->make('shared._device_list', ['taxon' => $childTaxon], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>
    <?php endif; ?>

  <?php endforeach; ?>
</div>