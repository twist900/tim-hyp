<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Home | E-Shopper</title>

<?php if(App::environment('local')): ?>
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.min.css', array(),true)); ?>" >
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/font-awesome.min.css', array(),true)); ?>" >
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/prettyPhoto.css', array(),true)); ?>" >
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/price-range.css', array(),true)); ?>" >
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/animate.css', array(),true)); ?>" >
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/main.css', array(),true)); ?>" >
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/responsive.css', array(),true)); ?>" >
<?php else: ?>

<?php endif; ?>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php echo URL::asset('images/ico/favicon.ico'); ?>">
