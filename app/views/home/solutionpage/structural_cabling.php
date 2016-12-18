<h4 class="page-title"><?= t("home.solutions.structural_cabling"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li><a href="/home/solutions"><?= t("home.solutions.link"); ?></a></li>
  <li class="active"><?= t("home.solutions.structural_cabling"); ?></li>
</ol>

<!-- first section - Home -->
<div class="parallax" style="background: url(/app/assets/img/solutions.jpg) no-repeat center fixed">
  <div class="parallax-caption">
    <h1 class="background-transparent"><?= t("home.solutions.structural_cabling"); ?></h1>
  </div>
</div>
<!-- /first section -->

<div class="row">
  <div class=" col-md-3">
    <?php render("list", "home/solutionpage"); ?>
  </div>
  <div class="col-md-8">

    <div class="well well-sm">

      <?= t("home.solutions.structural_cabling_content"); ?>

    </div>
  </div>
</div>