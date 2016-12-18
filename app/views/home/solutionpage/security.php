<h4 class="page-title"><?= t("home.solutions.security.link"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li><a href="/home/solutions"><?= t("home.solutions.link"); ?></a></li>
  <li class="active"><?= t("home.solutions.security.link"); ?></li>
</ol>

<!-- first section - Home -->
<div class="parallax" style="background: url(/app/assets/img/solutions.jpg) no-repeat center fixed">
  <div class="parallax-caption">
    <h1 class="background-transparent"><?= t("home.solutions.security.link"); ?></h1>
  </div>
</div>
<!-- /first section -->

<div class="row">
  <div class=" col-md-3">
    <?php render("list", "home/solutionpage"); ?>
  </div>
  <div class="col-md-8">

    <div class="well well-sm">

      <h4 class="page-title"><?= t("home.solutions.security.cctv"); ?></h4>

      <div class="container-fluid">
        <?= t("home.solutions.security.cctv_content"); ?><br/><br/>
      </div>

      <h4 class="page-title"><?= t("home.solutions.security.burglar_alarm_systems"); ?></h4>

      <div class="container-fluid">
        <?= t("home.solutions.security.burglar_alarm_systems_content"); ?><br/><br/>
      </div>

      <h4 class="page-title"><?= t("home.solutions.security.wide_control_systems.link"); ?></h4>

      <h5 class="page-title"><?= t("home.solutions.security.wide_control_systems.face"); ?></h5>

      <div class="container-fluid">
        <?= t("home.solutions.security.wide_control_systems.face_content"); ?><br/><br/>
      </div>

      <h5 class="page-title"><?= t("home.solutions.security.wide_control_systems.finger"); ?></h5>

      <div class="container-fluid">
        <?= t("home.solutions.security.wide_control_systems.finger_content"); ?><br/><br/>
      </div>

      <h5 class="page-title"><?= t("home.solutions.security.wide_control_systems.card"); ?></h5>

      <div class="container-fluid">
        <?= t("home.solutions.security.wide_control_systems.card_content"); ?><br/><br/>
      </div>

      <h5 class="page-title"><?= t("home.solutions.security.wide_control_systems.patrol_tour"); ?></h5>

      <div class="container-fluid">
        <?= t("home.solutions.security.wide_control_systems.patrol_tour_content"); ?><br/><br/>
      </div>

    </div>
  </div>
</div>