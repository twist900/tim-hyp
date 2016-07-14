<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="col-sm-12 padding-right">
    <div class="product-details"><!--product-details-->
      <div class="col-sm-5">
        <div class="product-view-slider">
          <?php if( !$device->attachments()->get()->isEmpty()): ?>
            <?php foreach($device->attachments as $attachment): ?>
                <div>
                  <img src="<?php echo e($attachment->image->url('large')); ?>" alt="" />
                </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->
          <h2><?php echo e($device->name); ?></h2>
          <span>
            <span>EUR <?php echo e($device->cost); ?></span>
          </span>
          <p><b>Availability:</b> In Stock</p>
          <p><b>Condition:</b> New</p>
          <p><b>Brand:</b> <?php echo e($device->company->name); ?></p>

        <?php if ( ! ($device->smartLifeServices->isEmpty())): ?>
          <h3>Related Smart Life Services:</h3>
          <ul class="list-group">
            <?php foreach($device->smartLifeServices as $smartLifeService): ?>
              <li class="list-group-item">
                 <?php echo HTML::linkAction('SmartLifeServiceController@show', $smartLifeService->name,  $smartLifeService->id, []); ?>

               </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

        <?php if ( ! ($device->assistanceServices->isEmpty())): ?>
          <h3>Related Assistance Services:</h3>
          <ul class="list-group">
            <?php foreach($device->assistanceServices as $assistanceService): ?>
              <li class="list-group-item">
                 <?php echo HTML::linkAction('AssistanceServiceController@show', $assistanceService->name,  $assistanceService->id, []); ?>

               </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div><!--/product-information-->

    </div><!--/product-details-->



    <div class="category-tab shop-details-tab"><!--category-tab-->
      <div class="col-sm-12">
        <ul class="nav nav-tabs">
          <li ><a href="#details" data-toggle="tab">DESCRIPTION</a></li>
          <li class="active"><a href="#specs" data-toggle="tab">TECNICHAL SPECIFICATIONS</a></li>
        </ul>
      </div>
      <div class="tab-content">
          <div class="tab-pane fade" id="details" >
            <div class="col-sm-12">
              <p><?php echo e($device->description); ?></p>
            </div>
          </div>

          <div class="tab-pane fade in active" id="specs" >
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach( $device->properties as $property): ?>
                  <tr>
                    <td><?php echo e($property->name); ?></td>
                    <td><?php echo e($property->pivot->value); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
              </table>
          </div>
      </div>
    </div><!--/category-tab-->

  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.application', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>