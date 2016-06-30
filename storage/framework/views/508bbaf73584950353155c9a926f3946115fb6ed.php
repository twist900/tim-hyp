<!-- <h2><?php echo e($taxon->name); ?></h2>

 -->
<?php foreach($smartLifeServices as $smartLifeService): ?>

  <section class="group-panel" style="background-image: url(<?php echo e(URL::to($smartLifeService->wide_image->url('wide'))); ?>);">
    <div class="header-content">
      <div class="header-content-inner">
        <a href="<?php echo action('SmartLifeServiceController@show', ['id' => $smartLifeService->id]);; ?>">
        <div class="content">
          <h1><?php echo e($smartLifeService->name); ?></h1>
          <h2 style="color:DimGray; "><?php echo e($smartLifeService->description); ?></h2>
        </div>
      </div>
    </div>
  </section>

<?php endforeach; ?>



