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
              <?php foreach( App\Taxon::whereIsRoot()->get() as $rootTaxon): ?>
                <li class="dropdown"><a href="<?php echo action('TaxonController@show', ['id' => $rootTaxon->id]);; ?>"><?php echo $rootTaxon->name; ?><i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                      <?php foreach( $rootTaxon->descendants as  $childTaxon ): ?>
                       <li>
                          <?php echo Html::linkAction('TaxonController@show', $childTaxon->name,  $childTaxon->id, []); ?>

                        </li>
                      <?php endforeach; ?>
                    </ul>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
    </div>
  </div><!--/header-bottom-->
</header><!--/header-->
