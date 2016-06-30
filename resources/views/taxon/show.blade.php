@extends('layouts.application')
@section('content')


  @unless($taxon->parent == null)

    @if($taxon->parent->name == "Products")
      @include('taxon._device_taxon', ['taxon' => $taxon, 'devices' => $devices])
    @elseif($taxon->parent->name == "Assistance")
      @include('taxon._assistance_service_taxon', ['taxon' => $taxon, 'assistanceServices' => $assistanceServices])
    @elseif($taxon->parent->name == "Smart Life")
      @include('taxon._smart_life_taxon', ['taxon' => $taxon, 'smartLifeServices' => $smartLifeServices ])
    @endif

  @else
    @include('taxon._root_taxon', ['taxon' => $taxon])
  @endunless

@stop