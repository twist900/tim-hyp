<h2>{{ $taxon->name }}</h2>
<ul class="list-group">
@foreach($services as $service)

  <li class="list-group-item">
    @if($taxon->most_popular)
      <span class="label label-default label-pill pull-right">{{ $service->views()->count() }}</span>
    @endif

    {!! Html::linkAction('ServiceController@show', $service->name,  $service->id, []) !!}
  </li>

@endforeach
</ul>