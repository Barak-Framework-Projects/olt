<h4 class="page-title"><?= t("home.corporate.human_resources"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li><a href="/home/corporate"><?= t("home.corporate.link"); ?></a></li>
  <li class="active"><?= t("home.corporate.human_resources"); ?></li>
</ol>

<!-- first section - Home -->
<div class="parallax" style="background: url(/app/assets/img/corporate.jpg) no-repeat center fixed">
  <div class="parallax-caption animated fadeInRight">
    <h1 class="background-transparent"><?= t("home.corporate.human_resources"); ?></h1>
  </div>
</div>
<!-- /first section -->


<div class="row">
  <div class=" col-md-3">
    <?php render("list", "home/corporatepage"); ?>
  </div>
  <div class="col-md-8">

    <div class="well well-sm">

      <?= t("home.corporate.human_resources_content"); ?>

    </div>

  </div>
  <div class="col-md-offset-1"></div>
</div>