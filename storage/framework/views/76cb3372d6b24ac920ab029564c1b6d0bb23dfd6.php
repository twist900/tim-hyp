<?php $__env->startSection('content'); ?>

<h2><?php echo e($service->name); ?></h2>
<p><?php echo $service->description; ?></p>

<?php if ( ! ($faqs->count() == 0)): ?>

  <h2>FAQ</h2>

  <div class="panel-group accordion" id="accordion-15800067" style=" padding-bottom: 50px;">
    <?php foreach($faqs as $faq): ?>

      <div class="panel panel-default">
        <div class="panel-heading active">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-<?php echo e($faq->id); ?>" href="#collapse-<?php echo e($faq->id); ?>">
              <?php echo e($faq->title); ?>

            </a>
          </h4>
        </div>

        <div id="collapse-<?php echo e($faq->id); ?>" class="panel-collapse collapse">
          <div class="panel-body">
            <?php echo $faq->content; ?>

          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.application', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>