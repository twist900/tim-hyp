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
        </div><!--/product-information-->
      </div>
    </div><!--/product-details-->

    <div class="category-tab shop-details-tab"><!--category-tab-->
      <div class="col-sm-12">
        <ul class="nav nav-tabs">
          <li ><a href="#details" data-toggle="tab">DESCRIZIONE</a></li>
          <li class="active"><a href="#specs" data-toggle="tab">SPECIFICHE TECNICHE</a></li>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.application', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>