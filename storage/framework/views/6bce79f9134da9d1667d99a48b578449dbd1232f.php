<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="col-sm-12 padding-right">
    <div class="product-details"><!--product-details-->
      <div class="col-sm-5">
        <div class="view-product">
          <?php if( !$device->attachments()->get()->isEmpty()): ?>
            <img src="<?php echo e($device->attachments()->first()->image->url('large')); ?>" alt="" />
          <?php endif; ?>
          <h3>ZOOM</h3>
        </div>
        <div id="similar-product" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
              <div class="carousel-inner">
              <div class="item active">

                <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
              </div>
              <div class="item">
                <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
              </div>
              <div class="item">
                <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
              </div>

            </div>

            <!-- Controls -->
            <a class="left item-control" href="#similar-product" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="right item-control" href="#similar-product" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
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