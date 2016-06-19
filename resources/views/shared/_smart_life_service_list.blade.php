<ul class="list-group">
@foreach($childTaxon->smartLifeServices as $smartLifeService)

  <li class="list-group-item">
    {!! Html::linkAction('SmartLifeServiceController@show', $smartLifeService->name,  $smartLifeService->id, []) !!}
  </li>

@endforeach
</ul>