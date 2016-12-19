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
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88458033-1', 'auto');
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

  <!-- ticker slider lib start -->
  <!-- source: https://github.com/risq/jquery-advanced-news-ticker -->
  <script type="text/javascript" src="/app/assets/js/jquery.newsTicker.js"></script>
  <!-- ticker slider lib end -->

  <!-- Pace start -->
  <!-- source: https://github.com/HubSpot/pace -->
  <script src="/app/assets/js/pace.min.js"></script>
  <link href="/app/assets/css/pace.css" rel="stylesheet" />
  <script type="text/javascript">
  $(document).ready(function() {
    Pace.on("done", function(){
      $("#contents").fadeIn(1000);

      /* Ticker slider start */
      $('#newsticker').newsTicker({
        duration: 4000,
        prevButton: $('#newsticker-prev'),
        nextButton: $('#newsticker-next')
      });

      /* Ticker slider end */
    });
  });
  </script>
  <style type="text/css">
  #contents {
    display: none;
  }
  </style>
  <!-- Page end -->



</head>
<body>
  <div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
      <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
  </div>

  <div id="contents">

    <?php render("home_navbar", "home"); ?>

    <?php $_is_home = in_array($_SERVER["REQUEST_URI"], ["/", "/home", "/home/index"]); ?>

    <?php if (!$_is_home) { ?>
    <div class="well well-sm">

      <div class="">

        <?php } else { ?>

        <div>
          <div>

            <?php } ?>

            <!-- bildirimleri göster ve temizle -->

            <?= BootstrapHelper::notice_show(); ?>
            <?php BootstrapHelper::notice_clear(); ?>

            {yield}

          </div>
        </div>

        <?php render("signin_modal", "home"); ?>
        <?php render("home_footer", "home"); ?>
        <?php render("back_to_top", "layouts"); ?>

        <!-- dropdown hover start -->
        <script src="/app/assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript">
        $('.dropdown-toggle').dropdownHover();
        </script>
        <!-- dropdown hover end -->
      </div>
    </div>
  </div>
</body>
</html>
