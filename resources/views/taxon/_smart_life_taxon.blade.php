<h2>{{ $taxon->name }}</h2>
<ul class="list-group">
@foreach($smartLives as $smartLife)

  <li class="list-group-item">
    {!! Html::linkAction('SmartLifeController@show', $smartLife->name,  $smartLife->id, []) !!}
  </li>

@endforeach
</ul>