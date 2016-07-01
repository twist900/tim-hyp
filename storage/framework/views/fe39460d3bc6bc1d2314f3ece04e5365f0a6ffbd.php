<div class="container">
  <h2><?php echo e($taxon->name); ?></h2>
  <ul class="list-group">
  <?php foreach($assistanceServices as $assistanceService): ?>

    <li class="list-group-item">
      <?php if($taxon->most_popular): ?>
        <span class="label label-default label-pill pull-right"><?php echo e($assistanceService->views()->count()); ?></span>
      <?php endif; ?>

      <?php echo HTML::linkAction('AssistanceServiceController@show', $assistanceService->name,  $assistanceService->id, []); ?>

    </li>

  <?php endforeach; ?>
  </ul>
</div>