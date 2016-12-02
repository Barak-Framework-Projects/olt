<legend align="center">Partnerlerimiz</legend>
<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item active container">
      <?= foreach (Partner::first(6) as $partner) { ?>
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="<?= $partner->image; ?>" alt="...">
      <?= } ?>
    </div>

    <div class="item container">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/default-normal.png" alt="...">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
    </div>

    <div class="item container">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
      <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="/app/assets/img/jquery.png" alt="...">
    </div>

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