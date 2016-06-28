<?php if(isset($device)): ?>
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
          <div class="productinfo text-center">
            <?php if( !$device->attachments()->get()->isEmpty()): ?>
              <img src="<?php echo e($device->attachments()->first()->image->url('large')); ?>" alt="" />
            <?php endif; ?>
            <h2>$ <?php echo e($device->cost); ?></h2>
            <div class="product-name">
              <?php echo HTML::linkAction('DeviceController@show', $device->name,  $device->id, []); ?>

            </div>
          </div>

      </div>

    </div>
  </div>
<?php endif; ?>