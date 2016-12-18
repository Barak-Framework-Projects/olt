<style type="text/css">
.footer {
  background: url('/app/assets/img/footer.png') repeat center center fixed;
  border-radius: 10px 10px 0px 0px;
  width: 100%;
  height: auto;
  display: block;
  left: 0;
  right: 0;
  bottom: 0;
  color: #ccc;
  font-size: 12px;
  padding: 1em;
}
</style>

<div class="footer">
  <div class="container-fluid">
    <div class="row animated zoomIn">
      <div class="col-md-4">

        <h3 class="lead">OLT</h3>
        <p>
          Aksi belirtilmedikçe <a href="http://olt.com.tr" target="_blank">olt.com.tr</a><br/>
          tarafından tüm içerik hakları saklıdır.
        </p>
        <br/>
        <div>
          Batıkent Mahallesi<br/>
          Ali İhsan Göğüş Caddesi Baran Apt Altı No: 140/A<br/>
          Şehitkamil/Gaziantep, Türkiye
        </div>

      </div>
      <div class="col-md-4">

        <h5>Kategoriler</h5>
        <hr>
        <?php if ($_footer_cs = Category::all()) { ?>
        <ul class="">
          <?php foreach ($_footer_cs as $_footer_c) { ?>
          <?php if ($_footer_c) { ?>
          <li>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <a href="/home/categories/show/<?= $_footer_c->id; ?>">
              <?= $_footer_c->name; ?>
            </a>
          </li>
          <?php } ?>
          <?php } ?>
        </ul>
        <?php } ?>

      </div>
      <div class="col-md-4">

        <h5><?= t("home.agendas"); ?></h5>
        <hr>
        <?php $agendas = Agenda::last(5); ?>

        <ul id="newsticker">
          <?php foreach ($agendas as $agenda) { ?>
          <li>
            <i class="fa fa-caret-right" aria-hidden="true"></i>
            <a href="/home/agendas/show/<?= $agenda->id; ?>"><?= $agenda->subject; ?></a>
          </li>
          <?php } ?>
        </ul>

        <div style="background-color:#aaa; color:black" class="btn " id="newsticker-prev"><span class="glyphicon glyphicon-chevron-down"></span></div>
        <div style="background-color:#aaa; color:black" class="btn " id="newsticker-next"><span class="glyphicon glyphicon-chevron-up"></span></div>

      </div>
    </div>
  </div>
</div>


<div style="font-size: 12px">
  <nav class="navbar navbar-default navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">
          copyright &copy; <?= date("Y"); ?><br>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
        <ul class="nav navbar-nav pull-left">

          <li><a href="mailto:info@olt.com.tr" target="_blank" class="fa fa-envelope fa-2x"></a></li>

          <li><a href="http://www.linkedin.com/in/olt.com.tr/" target="_blank" class="fa fa-linkedin-square fa-2x"></a></li>

          <li><a href="http://plus.google.com/olt.com.tr/" target="_blank" class="fa fa-google-plus-square fa-2x"></a></li>

          <li><a href="http://twitter.com/olt.com.tr/" target="_blank" class="fa fa-twitter-square fa-2x"></a></li>

          <li><a href="http://instagram.com/olt.com.tr/" target="_blank" class="fa fa-instagram fa-2x"></a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="http://www.turkeydiscoverthepotential.com/" target="_blank">
              <img src="/app/assets/img/signature_of_turkey.png" width="120" height="40" class="pull-right"/>
            </a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>