<footer id="footer"><!--Footer-->

  <div class="footer-widget">
    <div class="container">
      <div class="row">

        <?php foreach( App\Taxon::whereIsRoot()->get() as $rootTaxon): ?>
          <div class="col-lg-3">
            <div class="single-widget">
              <h2><?php echo e($rootTaxon->name); ?></h2>
              <ul class="nav nav-pills nav-stacked">
                <?php foreach($rootTaxon->children as $childTaxon): ?>
                  <li>
                    <a href="<?php echo e(action('TaxonController@show', ['id' => $childTaxon->id])); ?>"><?php echo e($childTaxon->name); ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        <?php endforeach; ?>
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