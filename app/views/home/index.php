<!-- first section - Slides -->

<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel" style="color:white; font-size:14px;">

  <?php $slides = Slide::all(); ?>
  <?php if ($slides) { ?>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <?php $active = "active"; ?>
    <?php foreach ($slides as $slide) { ?>


    <div class="item <?= $active; ?>" style="
      background-image:url(<?= $slide->bg_image; ?>);
      background-position:center;
      min-height:479px;
      max-height:479px;
      ">

      <center style="padding-top:80px">
        <img class="img-responsive hidden-xs animated zoomInLeft" src="<?= $slide->image; ?>" style="max-width:200px; max-height:200px;" />
      </center>
      <div class="carousel-caption" style="bottom:0;left:0;right:0; margin-bottom:-40px;">
        <div class="background-transparent" style="min-height:80px;">
          <h3 class="animated bounceInDown"><?= $slide->subject; ?></h3>
          <h4 class="animated bounceInUp"><?= $slide->content; ?></h4>
        </div>
      </div>

    </div>
    <?php $active = ""; ?>
    <?php } ?>

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

  <?php } ?>

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
          <a href="/home/about" class="btn btn-info" role="button">OLT HAKKINDA</a>
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
