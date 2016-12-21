<!-- first section - Slides -->

<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel" style="color:white; font-size:14px;">
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
    <div class="item active" style="background-image:url(/app/assets/img/slide-bg-1.jpg);">
      <div class="row">
        <div class="container">
          <div class="col-md-2 text-right" style="min-height: 390px">
            <img class="animated zoomInLeft" src="/app/assets/img/slide-2.png">
          </div>
          <div class="col-md-10 text-left background-transparent">
            <h3 class="animated bounceInDown">Fiber Optik Tesisatları</h3>
            <h4 class="animated bounceInUp">Fiber Optik Kurulum</h4>
          </div>
        </div>
      </div>
    </div>
    <!-- End Item 1 -->
    <!-- Item 2 -->
    <div class="item" style="background-image:url(/app/assets/img/slide-bg-2.jpg);">
      <div class="row">
        <div class="container">
          <div class="col-md-5 text-left" style="min-height: 390px">
            <div class="row">
              <img style="max-height: 80px"  class="animated infinite pulse" src="/app/assets/img/sfp.png">
            </div>
            <div class="row">
              <img style="max-height: 80px"  class="animated infinite pulse" src="/app/assets/img/sfp-plus.png">
            </div>
            <div class="row">
              <img style="max-height: 80px"  class="animated infinite pulse" src="/app/assets/img/sfp-copper.png">
            </div>
            <div class="row">
              <img style="max-height: 80px"  class="animated infinite pulse" src="/app/assets/img/sfp_transceiver.png">
            </div>
          </div>
          <div class="col-md-7 text-right background-transparent">
            <h3 class="animated bounceInDown">SFP Data Transferleri</h3>
            <h4 class="animated bounceInUp">Cisco, Hp, D-Link, Huawei, Intel, Juniper, Linksys</h4>
          </div>
        </div>
      </div>
    </div>
    <!-- End Item 2 -->
    <!-- Item 3 -->
    <div class="item" style="background-image:url(/app/assets/img/slide-bg-3.jpg); background-position:center;">
      <div class="row">
        <div class="container">
          <div class="col-md-7 text-left background-transparent">
            <h3 class="animated bounceInDown">Simple Bootstrap Carousel</h3>
            <h4 class="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</h4>
          </div>
          <div class="col-md-5 text-right" style="min-height: 390px">
            <img style="max-width: 350px;"  class="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png">
          </div>
        </div>
      </div>
    </div>
    <!-- End Item 3 -->
    <!-- Item 4 -->
    <div class="item" style="background-image:url(/app/assets/img/slide-bg-4.jpg); background-position:center;">
      <div class="row">
        <div class="container">
          <div class="col-md-7 text-left" style="padding: 20px; color: rgb(255, 255, 255); background-color: rgba(0, 0, 0, 0.4); border-radius: 10px;">
            <h3 class="animated bounceInDown">We are creative</h3>
            <h4 class="animated bounceInUp">Get start your next awesome project</h4>
          </div>
          <div class="col-md-5 text-right" style="min-height: 390px">
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

<!-- morphext start -->
<!-- source: https://github.com/MrSaints/Morphext -->
<link href="/app/assets/css/morphext.css" rel="stylesheet" />
<script src="/app/assets/js/morphext.min.js"></script>
<!-- morphext end -->

<script>
$(document).ready(function() {
  $("#js-rotating").Morphext({
      // The [in] animation type. Refer to Animate.css for a list of available animations.
      animation: "flipInX",
      // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
      separator: ",",
      // The delay between the changing of each phrase in milliseconds.
      speed: 2000,
      complete: function () {
        // Called after the entrance animation is executed.
      }
    });
});
</script>

<div class="well well-sm">
  <div style="border-bottom: 1px solid #e7e7e7;">
    <div class="container">
      <div class="text-center">
        <img src="/app/assets/img/default.png" style="width: 80px; height: 80px;"/>
        <h2>
          OLT İLE TELEKOM İŞLERİ <b id="js-rotating">HIZLI, SÜREKLİ, PRATİK, KARARLI</b><br/>
        </h2>
        <h4>
          ve her gün daha iyisi olmak için çalışıyoruz!<br/><br/>
          <a href="/home/corporate/about" class="btn btn-info" role="button">OLT HAKKINDA</a>
        </h4>
      </div>
    </div>
  </div>

  <!-- /first section -->

  <!-- second section - Solutions -->
  <div style="border-bottom: 1px olid #e7e7e7; background-color: #e7e7e7;">
    <div class="container">
      <h2 class="text-center">Çözümlerimiz</h2> <hr/>
      <div class="row text-center">
        <div class="col-md-3 col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-cloud"> </i>
          <h4>Service 1</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-leaf"> </i>
          <h4>Service 2</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-phone-alt"> </i>
          <h4>Service 3</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <i class="glyphicon glyphicon-bullhorn"> </i>
          <h4>Service 4</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- /second section -->

  <!-- third section - Partners -->
  <div class="container">

    <h2 class="text-center">Partnerlerimiz</h2> <hr/>
    <?php $partners = Partner::all(); ?>
    <?php if ($partners) { ?>
    <center>
      <?php foreach ($partners as $partner) { ?>
      <i class="gray_scale_box img-hover">
        <img src="<?= $partner->image; ?>" class="gray_scale" style="padding:1em; max-height:100px; max-width:300px;"/>
      </i>
      <?php } ?>
    </center>
    <?php } ?>
  </div>

  <!-- /third section -->

</div>
