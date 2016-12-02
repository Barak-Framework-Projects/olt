<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic1" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic1" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic1" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <!-- Item 1 -->
    <div class="item active">
      <div class="row">
        <div class="container">
          <div class="col-md-3 text-right">
            <img style="max-width: 350px;"  class="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png">
          </div>
          <div class="col-md-9 text-left">
            <h3 class="animated bounceInDown">Add images, or even your logo!</h3>
            <h4 class="animated bounceInUp">Easily use stunning effects</h4>
          </div>
        </div>
      </div>
    </div>
    <!-- Item 2 -->
    <div class="item">
      <div class="row">
        <div class="container">
          <div class="col-md-7 text-left">
            <h3 class="animated bounceInDown"> 50 animation options A beautiful</h3>
            <h4 class="animated bounceInUp">Create beautiful slideshows </h4>
          </div>
          <div class="col-md-5 text-right">
            <img style="max-width: 350px;"  class="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png">
          </div>
        </div>
      </div>
    </div>
    <!-- Item 3 -->
    <div class="item">
      <div class="row">
        <div class="container">
          <div class="col-md-7 text-left">
            <h3 class="animated bounceInDown">Simple Bootstrap Carousel</h3>
            <h4 class="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</h4>
          </div>
          <div class="col-md-5 text-right">
            <img style="max-width: 350px;"  class="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png">
          </div>
        </div>
      </div>
    </div>
    <!-- Item 4 -->
    <div class="item">
      <div class="row">
        <div class="container">
          <div class="col-md-7 text-left">
            <h3 class="animated bounceInDown">We are creative</h3>
            <h4 class="animated bounceInUp">Get start your next awesome project</h4>
          </div>
          <div class="col-md-5 text-right">
            <img style="max-width: 350px;"  class="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png">
          </div>
        </div>
      </div>
    </div>
    <!-- End Item 4 -->

  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?= link_to("merhaba", "evet"); ?>
<!-- third section - Services -->

<div class="well well-sm">
  <div class="container">
    <h2 class="text-center">Çözümlerimiz</h2> <hr />
    <div class="row text-center">
      <div class="col-sm-3 col-xs-6">
        <i class="glyphicon glyphicon-cloud"> </i>
        <h4>Service 1</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
      </div>
      <div class="col-sm-3 col-xs-6">
        <i class="glyphicon glyphicon-leaf"> </i>
        <h4>Service 2</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
      </div>
      <div class="col-sm-3 col-xs-6">
        <i class="glyphicon glyphicon-phone-alt"> </i>
        <h4>Service 3</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
      </div>
      <div class="col-sm-3 col-xs-6">
        <i class="glyphicon glyphicon-bullhorn"> </i>
        <h4>Service 4</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
      </div>
    </div>
  </div>

  <!-- /third section -->


  <h2 class="text-center">Partnerlerimiz</h2> <hr />
  <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <?php $partners = Partner::first(6); ?>
      <?php if ($partners) { ?>

      <div class="item container active">
        <div class="row">
          <?php foreach ($partners as $partner) { ?>
          <img class="col-md-2 img-responsive" src="<?= $partner->image; ?>" alt="partner-image" style="max-height:100px;min-height:100px;width:auto">
          <?php } ?>
        </div>
      </div>

      <?php } ?>

      <?php $partners = Partner::load()->limit(6)->offset(6)->take(); ?>
      <?php if($partners) { ?>

      <div class="item container">
        <div class="row">
          <?php foreach ($partners as $partner) { ?>
          <img class="col-md-2 img-responsive" src="<?= $partner->image; ?>" alt="partner-image" style="max-height:100px;min-height:100px;width:auto">
          <?php } ?>
        </div>
      </div>

      <?php } ?>

      <?php $partners = Partner::load()->limit(6)->offset(12)->take(); ?>
      <?php if($partners) { ?>

      <div class="item container">
        <div class="row">
          <?php foreach ($partners as $partner) { ?>
          <img class="col-md-2 img-responsive" src="<?= $partner->image; ?>" alt="partner-image" style="max-height:100px;min-height:100px;width:auto">
          <?php } ?>
        </div>
      </div>

      <?php } ?>

    </div>

    <div align="center" style="margin-top:20px;">
      <!-- Controls -->
      <a class="left" href="#carousel-example-generic2" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right" href="#carousel-example-generic2" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

  </div>
</div>

