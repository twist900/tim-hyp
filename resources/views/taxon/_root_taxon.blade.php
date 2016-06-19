<h2>{{ $taxon->name }}</h2>
@foreach($taxon->children as $childTaxon)

  @if($taxon->name == 'Smart Life')
    @if($childTaxon->smartLifeServices->count() > 0)
      <h3>{{ $childTaxon->name }}</h3>
      @include('shared._smart_life_service_list', ['taxon' => $childTaxon])
    @endif
  @elseif($taxon->name == 'Assistenza')
    @if($childTaxon->assistanceServices->count() > 0)
      <h3>{{ $childTaxon->name }}</h3>
      @include('shared._assistance_service_list', ['taxon' => $childTaxon])
    @endif
  @elseif($taxon->name == 'Prodotti')
    @if($childTaxon->devices->count() > 0)
      <h3 style="clear: left;">{{ $childTaxon->name }}</h3>
      @include('shared._device_list', ['taxon' => $childTaxon])
    @endif
  @endif

@endforeach