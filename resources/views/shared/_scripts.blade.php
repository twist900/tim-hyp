@if (Request::isSecure())
  {{$secure = true}}
@else
  {{$secure = false}}
@endif

{!! Html::script("js/jquery.js",array(), $secure) !!}
{!! Html::script("js/bootstrap.min.js",array(), $secure) !!}
{!! Html::script("js/jquery.scrollUp.min.js",array(), $secure) !!}
{!! Html::script("js/price-range.js",array(), $secure) !!}
{!! Html::script("js/jquery.prettyPhoto.js",array(), $secure) !!}
{!! Html::script("js/main.js",array(), $secure) !!}
