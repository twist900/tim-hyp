<h2><?php echo e($taxon->name); ?></h2>
<ul class="list-group">

<?php foreach($smartLifeServices as $smartLifeService): ?>

  <li class="list-group-item">
    <?php echo Html::linkAction('SmartLifeServiceController@show', $smartLifeService->name,  $smartLifeService->id, []); ?>

  </li>

<?php endforeach; ?>
</ul>