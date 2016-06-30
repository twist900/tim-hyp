@extends('layouts.application')
@section('content')
<div class="container">

  <section id="slider"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#slider-carousel" data-slide-to="1"></li>
              <li data-target="#slider-carousel" data-slide-to="2"></li>
              <li data-target="#slider-carousel" data-slide-to="3"></li>
              <li data-target="#slider-carousel" data-slide-to="4"></li>
            </ol>

            <div class="carousel-inner">

              @foreach($devices->shuffle()->take(5) as $index => $offer)
                @if($index == 0)
                  <div class="item active">
                @else
                  <div class="item">
                @endif
                  <div class="col-sm-6">
                    <h1><span>TIM</span>-STORE</h1>
                    <h2>{{ strtoupper($offer->company->name) }}</h2>
                    <p> {{ $offer->description }}</p>
                    <a href="{{ action('DeviceController@show', ['id' => $offer->id]) }}" type="button" class="btn btn-default get">Get it now</a>
                  </div>
                  <div class="col-sm-6 offer-image">
                    <img src="{{ $offer->attachments()->first()->image->url('large') }}" class="" alt="" />
                  </div>
                </div>
              @endforeach




            </div>

            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section><!--/slider-->

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="left-sidebar">
            <h2>Brands</h2>
            <div class="brands_products"><!--brands_products-->
              <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                  @unless(!isset($taxon))
                    @foreach ($taxon->companies as $company)
                      <li>
                        {!! HTML::linkAction('TaxonController@show', $company->name, $parameters = array('id' => $taxon->id, 'company' => $company->id), []) !!}
                      </li>
                    @endforeach
                  @endunless
                </ul>
              </div>
            </div><!--/brands_products-->
          </div>
        </div>

        <div class="col-sm-9 padding-right">
          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Features Items</h2>
            @foreach( $devices as $device )
              @include('shared._device', ['device' => $device])
            @endforeach
          </div><!--features_items-->

        </div>
      </div>
    </div>
  </section>

  <div class="container">
@stop