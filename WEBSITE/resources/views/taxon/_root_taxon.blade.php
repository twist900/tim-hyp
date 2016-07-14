<div class="container">
  <h2>{{ $taxon->name }}</h2>
  @foreach($taxon->children as $childTaxon)

    @if($taxon->name == 'Smart Life')
      @if($childTaxon->smartLifeServices->count() > 0)
        <div class="taxon-title">
          <a href="{{ action('TaxonController@show', ['id' => $childTaxon->id]) }}">
            <img class="taxon-title-image"  src="{{ $childTaxon->icon->url('thumb') }}">
            <h3 class="taxon-title-h3">{{ $childTaxon->name }}</h3>
          </a>
        </div>

        @include('shared._smart_life_service_list', ['taxon' => $childTaxon])
      @endif
    @elseif($taxon->name == 'Assistance')
      @if($childTaxon->assistanceServices->count() > 0)
        <a href="{{ action('TaxonController@show', ['id' => $childTaxon->id]) }}">
          <h3>{{ $childTaxon->name }}</h3>
        </a>
        @include('shared._assistance_service_list', ['taxon' => $childTaxon])
      @endif
    @elseif($taxon->name == 'Products')
      @if($childTaxon->devices->count() > 0)
       <div class="taxon-title">
          <a href="{{ action('TaxonController@show', ['id' => $childTaxon->id]) }}">
            <img class="taxon-title-image"  src="{{ $childTaxon->icon->url('thumb') }}">
            <h3 class="taxon-title-h3">{{ $childTaxon->name }}</h3>
          </a>
        </div>
        @include('shared._device_list', ['taxon' => $childTaxon])
      @endif
    @endif

  @endforeach
</div>