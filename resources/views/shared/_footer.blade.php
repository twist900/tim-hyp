<footer id="footer"><!--Footer-->

  <div class="footer-widget">
    <div class="container">
      <div class="row">

        @foreach( App\Taxon::whereIsRoot()->get() as $rootTaxon)
          <div class="col-lg-3">
            <div class="single-widget">
              <h2>{{ $rootTaxon->name }}</h2>
              <ul class="nav nav-pills nav-stacked">
                @foreach($rootTaxon->children as $childTaxon)
                  <li>
                    <a href="{{ action('TaxonController@show', ['id' => $childTaxon->id]) }}">{{ $childTaxon->name }}</a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        @endforeach
        <div class="col-lg-3">
          <div class="single-widget">
            <h2>About</h2>
            <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="/who-we-are">Who We Are</a>
              </li>
              <li>
                <a href="/the-group">The Group</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <p class="pull-left">Copyright © 2016 TIM Inc. All rights reserved.</p>
      </div>
    </div>
  </div>

</footer><!--/Footer-->