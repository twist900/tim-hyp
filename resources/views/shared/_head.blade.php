<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Home | E-Shopper</title>

@if (Request::secure())
  {{$secure = true}}
@else
  {{$secure = false}}
@endif
{!! Html::style("css/bootstrap.min.css", array(), $secure) !!}
{!! Html::style("css/font-awesome.min.css", array(), $secure) !!}
{!! Html::style("css/prettyPhoto.css", array(), $secure) !!}
{!! Html::style("css/price-range.css", array(), $secure) !!}
{!! Html::style("css/animate.css", array(), $secure) !!}
{!! Html::style("css/main.css", array(), $secure) !!}
{!! Html::style("css/responsive.css", array(), $secure) !!}

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="{!! URL::asset('images/ico/favicon.ico') !!}">
