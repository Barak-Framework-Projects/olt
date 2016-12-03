<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <link href="" rel="alternate" title="" type="application/atom+xml" />
  <link rel="shortcut icon" href="/app/assets/img/default.ico">
  <link rel="stylesheet" href="/app/assets/css/syntax.css" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="/app/assets/js/html5shiv.min.js"></script>
  <script src="/app/assets/js/respond.min.js"></script>
  <![endif]-->

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="/app/assets/js/bootstrap.min.js"></script>

  <!-- Google Analytics start -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73568943-1', 'auto');
  ga('send', 'pageview');
  </script>
  <!-- Google Analytics end -->

  <!-- Jquery Datatables Responsive Bootstrap start -->
  <!-- source: https://datatables.net/extensions/responsive/examples/styling/bootstrap.html -->
  <link rel="stylesheet" type="text/css" href="/app/assets/css/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="/app/assets/css/responsive.bootstrap.min.css" />

  <script type="text/javascript" src="/app/assets/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="/app/assets/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="/app/assets/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="/app/assets/js/responsive.bootstrap.min.js"></script>

  <!-- Jquery Datatables Language start -->
  <!-- source: https://datatables.net/examples/basic_init/language.html -->
  <script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('#example').dataTable( {
      "order": [[ 1, "desc" ]],
      "responsive": true,
      "language": {
        "lengthMenu": "Gösterilen _MENU_ adet satır",
        "zeroRecords": "Kayıt Bulunamadı",
        "info": "Toplam _PAGES_ sayfadan _PAGE_ sayfa gösteriliyor",
        "infoEmpty": "Kayıt Sayısı Yok",
        "infoFiltered": "(Toplam _MAX_ gönderi filtrelendi)",
        "search": "Ara",
        "paginate": {
          "previous": "Önceki",
          "next": "Sonraki"
        }
      }
    });
  });
  </script>
  <!-- Jquery Datatables Language end -->
  <!-- Jquery Datatables Responsive Bootstrap end -->


  <!-- datepicker start -->
  <!-- source: https://github.com/eternicode/bootstrap-datepicker -->
  <link rel="stylesheet" href="/app/assets/css/bootstrap-datepicker.min.css" type="text/css" />
  <script src="/app/assets/js/bootstrap-datepicker.min.js"></script>
  <script src="/app/assets/js/bootstrap-datepicker.tr.js"></script>
  <!-- datepicker end -->

  <!-- bootstrap-image-gallery start -->
  <!-- source: https://github.com/blueimp/Gallery -->
  <link rel="stylesheet" href="/app/assets/css/blueimp-gallery.min.css" type="text/css" />
  <script src="/app/assets/js/blueimp-gallery.min.js"></script>
  <!-- bootstrap-image-gallery end -->

  <!-- auto search start -->
  <script src="/app/assets/js/typeahead.bundle.js"></script>
  <!-- auto search end -->

  <!-- Animatecss start -->
  <!-- source: https://daneden.github.io/animate.css/ -->
  <link rel="stylesheet" type="text/css" href="/app/assets/css/animate.min.css" />
  <!-- Animatecss end -->

  <!-- bxSlider start -->
  <!-- source: http://bxslider.com/ -->
  <script src="/app/assets/js/jquery.bxslider.min.js"></script>
  <link href="/app/assets/css/jquery.bxslider.css" rel="stylesheet" />
  <!-- bxSlider end -->
</head>
<body>

  <?php render("home_navbar", "home"); ?>

  <div class="well well-sm">

    <div class="row">

      <div class="col-xs-8">
        <ul class="nav nav-pills">
          <li role="presentation"><a href="/home/index"><?= t("home.link"); ?></a></li>

          <li role="presentation" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?= t("home.corporate.link"); ?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="/home/corporate/carrier"><?= t("home.corporate.carrier"); ?></a></li>
              <li><a href="/home/corporate/about"><?= t("home.corporate.about"); ?></a></li>
              <li><a href="/home/corporate/our_focus"><?= t("home.corporate.our_focus"); ?></a></li>
              <li><a href="/home/corporate/service_policy"><?= t("home.corporate.service_policy"); ?></a></li>
            </ul>
          </li>

          <li role="presentation" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?= t("home.solutions.link"); ?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="/home/solutions/structural_cabling"><?= t("home.solutions.structural_cabling"); ?></a></li>
              <li><a href="/home/solutions/fiber_optic_infrastructure"><?= t("home.solutions.fiber_optic_infrastructure"); ?></a></li>
              <li><a href="/home/solutions/network"><?= t("home.solutions.network"); ?></a></li>
              <li><a href="/home/solutions/server"><?= t("home.solutions.server"); ?></a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="/home/solutions/security"><?= t("home.solutions.security.link"); ?></a>
                <ul class="dropdown-menu">
                  <li><a href="/home/solutions/security/cctv/"><?= t("home.solutions.security.cctv"); ?></a></li>
                  <li class="dropdown-submenu">
                    <a href="/home/solutions/security"><?= t("home.solutions.security.wide_control_systems.link"); ?></a>
                    <ul class="dropdown-menu">
                      <li><a href="/home/solutions/security/cctv/"><?= t("home.solutions.security.wide_control_systems.face"); ?></a></li>
                      <li><a href="/home/solutions/security/cctv/"><?= t("home.solutions.security.wide_control_systems.finger"); ?></a></li>
                      <li><a href="/home/solutions/security/cctv/"><?= t("home.solutions.security.wide_control_systems.card"); ?></a></li>
                      <li><a href="/home/solutions/security/cctv/"><?= t("home.solutions.security.wide_control_systems.patrol_tour"); ?></a></li>
                    </ul>
                    <li><a href="/home/solutions/security/cctv/"><?= t("home.solutions.security.burglar_alarm_systems"); ?></a></li>
                  </li>
                  <ul class="dropdown-menu">
                    <li><a href="/home/producttypes/show/"><?=  t("home.solutions.security.link"); ?></a></li>
                  </ul>
                </li>
              </ul>
              <li><a href="/home/solutions/security/cctv/"><?= t("home.solutions.wireless"); ?></a></li>
              <li><a href="/home/solutions/security/cctv/"><?= t("home.solutions.video_conference"); ?></a></li>
            </ul>
          </li>

          <li role="presentation" class="dropdown">
            <a href="/home/products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?= t("home.products"); ?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu">
                <a tabindex="-1" href="/home/categories"><?= t("home.categories"); ?></a>
                <?php if($_cs = Category::all()) { ?>
                <ul class="dropdown-menu">
                  <?php foreach ($_cs as $_c) { ?>
                  <li class="dropdown-submenu">
                    <a href="/home/categories/show/<?= $_c->id; ?>"><?= $_c->name; ?></a>
                    <?php if ($_pts = ($_c->all_of_producttype)) { ?>
                    <ul class="dropdown-menu">
                      <?php foreach ($_pts as $_pt) { ?>
                      <?php if($_pt) { ?>
                      <li><a href="/home/producttypes/show/<?= $_pt->id; ?>"><?= $_pt->name; ?></a></li>
                      <?php } ?>
                      <?php } ?>
                    </ul>
                    <?php } ?>
                  </li>
                  <?php } ?>
                </ul>
                <?php } ?>
              </li>
              <li><a href="/home/products/search"><?= t("home.product_search"); ?></a></li>
              <li><a href="/home/products"><?= t("home.product_list"); ?></a></li>
            </ul>
          </li>

          <li role="presentation"><a href="/home/references"><?= t("home.references"); ?></a></li>
          <li role="presentation"><a href="/home/contact"><?= t("home.contact"); ?></a></li>
        </ul>
      </div>

      <div class="col-xs-4 hidden-xs hidden-sm">
        <!--<img src="/app/assets/img/signature_of_ataturk.svg.png" width="120" class="img-responsive pull-right"/>-->
        <ul class="nav nav-pills pull-right">
          <li role="presentation"><a href="/lang/tr"><img src="/app/assets/img/tr.png" class="img-border"/></a></li>
          <li role="presentation"><a href="/lang/en"><img src="/app/assets/img/en.png" class="img-border"/></a></li>
        </ul>
      </div>
    </div>

  </div>

  <?php if (!in_array($_SERVER["REQUEST_URI"], ["/", "/home", "/home/index"])) { ?>
  <div class="well well-sm">
    <!-- BootstrapHelper::page_title_and_breadcrumb(); -->

    <?php } else { ?>

    <div>

      <?php } ?>

      <!-- bildirimleri göster ve temizle -->

      <?= BootstrapHelper::notice_show(); ?>
      <?php BootstrapHelper::notice_clear(); ?>

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

      <?php
      $limit = 0;
      $item = 6;
      $col = int( 12 / $item );
      $start = true;
      ?>
      <?php
      while (true) {
        $partners = Partner::load()->limit($item)->offset($limit)->take();
        foreach ($partners as $partner) {
          if ($partners) { ?>

          <div class="item container <?php if($start) { echo 'active'; $start = false; }?>">
            <div class="row">
              <?php foreach ($partners as $partner) { ?>
              <div class="col-md-<?= $col; ?>">
                <div class="thumbnail">
                  <img src="<?= $partner->image; ?>" alt="..." style="height:150px" class="img-responsive">
                </div>
              </div>
              <?php } ?>
            </div>
          </div>

          <?php } else { break; } ?>

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



    </div>
<!--
    <div class="well well-lg" style="background-color:#465568; color:white">

      <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12">
          Aksi belirtilmedikçe <a href="http://olt.com.tr" target="_blank">olt.com.tr</a> tarafından tüm içerik hakları saklıdır.
        </div>
        <div class="col-md-3 hidden-sm hidden-xs">
        </div>
      </div>
    </div>
-->
    <?php render("signin_modal", "home"); ?>
    <?php render("home_footer", "home"); ?>
    <?php render("nav-up-down", "layouts"); ?>

    <!-- dropdown hover start -->
    <script src="/app/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript">
    $('.dropdown-toggle').dropdownHover();
    </script>
    <!-- dropdown hover end -->


  </body>
  </html>