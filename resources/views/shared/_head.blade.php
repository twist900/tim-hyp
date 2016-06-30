<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>TIM</title>

@if(App::environment('local'))
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css', array(),true) }}" >
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css', array(),true) }}" >
  <link rel="stylesheet" href="{{ URL::asset('css/prettyPhoto.css', array(),true) }}" >
  <link rel="stylesheet" href="{{ URL::asset('css/price-range.css', array(),true) }}" >
  <link rel="stylesheet" href="{{ URL::asset('css/animate.css', array(),true) }}" >
  <link rel="stylesheet" href="{{ URL::asset('css/main.css', array(),true) }}" >
  <link rel="stylesheet" href="{{ URL::asset('css/responsive.css', array(),true) }}" >
  <link rel="stylesheet" href="{{ URL::asset('css/slick.css', array(),true) }}" >
  <link rel="stylesheet" href="{{ URL::asset('css/slick-theme.css', array(),true) }}" >
@else
  <link href='https://s3.eu-central-1.amazonaws.com/timhyp/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='https://s3.eu-central-1.amazonaws.com/timhyp/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
  <link href='https://s3.eu-central-1.amazonaws.com/timhyp/css/prettyPhoto.css' rel='stylesheet' type='text/css'>
  <link href='https://s3.eu-central-1.amazonaws.com/timhyp/css/price-range.css' rel='stylesheet' type='text/css'>
  <link href='https://s3.eu-central-1.amazonaws.com/timhyp/css/animate.css' rel='stylesheet' type='text/css'>
  <link href='https://s3.eu-central-1.amazonaws.com/timhyp/css/main.css' rel='stylesheet' type='text/css'>
  <link href='https://s3.eu-central-1.amazonaws.com/timhyp/css/responsive.css' rel='stylesheet' type='text/css'>
  <link href='https://s3.eu-central-1.amazonaws.com/timhyp/css/slick.css' rel='stylesheet' type='text/css'>
  <link href='https://s3.eu-central-1.amazonaws.com/timhyp/css/slick-theme.css' rel='stylesheet' type='text/css'>
@endif

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="{!! URL::asset('favicon.ico') !!}">
