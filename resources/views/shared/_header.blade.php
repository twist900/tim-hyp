<header id="header"><!--header-->

  <div class="header-bottom"><!--header-bottom-->
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="navbar-header">


            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <div class="navbar-brand" >
                <a href="/" class="logo-tim" itemprop="url"><img itemprop="logo" src="https://img.tim.it:443/img/logo_tim_2016.png"></a>
            </div>
          </div>
          <div class="mainmenu pull-left">
            <ul class="nav navbar-nav collapse navbar-collapse">
              @foreach ( App\Taxon::whereIsRoot()->get() as $rootTaxon)
                <li class="dropdown"><a href="{!! action('TaxonController@show', ['id' => $rootTaxon->id]); !!}">{!! $rootTaxon->name !!}<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                      @foreach( $rootTaxon->descendants as  $childTaxon )
                       <li>
                          <div class="taxon-title">
                              @if( File::exists(public_path($childTaxon->icon->url())) )
                                <img class="taxon-title-image"  src="{{ $childTaxon->icon->url('thumb') }}">
                              @endif

                              {!! HTML::linkAction('TaxonController@show', $childTaxon->name,  $childTaxon->id, []) !!}
                           </div>
                        </li>
                      @endforeach
                    </ul>
                </li>
              @endforeach
              <li><a href="/who-we-are">Who We Are</a></li>
              <li><a href="/the-group">The Group</a></li>
            </ul>
          </div>
        </div>
    </div>
  </div><!--/header-bottom-->
</header><!--/header-->
