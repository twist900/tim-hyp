<?php if(App::environment('local')): ?>
  <script src="<?php echo e(URL::to('js/jquery.js')); ?>"></script>
  <script src="<?php echo e(URL::to('js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(URL::to('js/jquery.scrollUp.min.js')); ?>"></script>
  <script src="<?php echo e(URL::to('js/price-range.js')); ?>"></script>
  <script src="<?php echo e(URL::to('js/jquery.prettyPhoto.js')); ?>"></script>
  <script src="<?php echo e(URL::to('js/main.js')); ?>"></script>
  <script src="<?php echo e(URL::to('js/slick.js')); ?>"></script>
<?php else: ?>
  <script src='https://s3.eu-central-1.amazonaws.com/timhyp/js/jquery.js'></script>
  <script src='https://s3.eu-central-1.amazonaws.com/timhyp/js/bootstrap.min.js'></script>
  <script src='https://s3.eu-central-1.amazonaws.com/timhyp/js/jquery.scrollUp.min.js'></script>
  <script src='https://s3.eu-central-1.amazonaws.com/timhyp/js/price-range.js'></script>
  <script src='https://s3.eu-central-1.amazonaws.com/timhyp/js/jquery.prettyPhoto.js'></script>
  <script src='https://s3.eu-central-1.amazonaws.com/timhyp/js/slick.js'></script>
  <script src='https://s3.eu-central-1.amazonaws.com/timhyp/js/main.js'></script>
<?php endif; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.1/jquery.flexslider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>