<h4 class="page-title"><?= t("home.corporate.about"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li><a href="/home/corporate"><?= t("home.corporate.link"); ?></a></li>
  <li class="active"><?= t("home.corporate.about"); ?></li>
</ol>

<!-- first section - Home -->
<div class="parallax" style="background: url(/app/assets/img/corporate.jpg) no-repeat center fixed">
  <div class="parallax-caption animated fadeInRight">
    <h1 class="background-transparent"><?= t("home.corporate.about"); ?></h1>
  </div>
</div>
<!-- /first section -->

<div class="row">
  <div class="col-md-3">
    <?php render("list", "home/corporatepage"); ?>
  </div>
  <div class="col-md-8">

    <div class="well well-sm">
      <h5 class="page-title">Kuruluş</h5>

      <?= t("home.corporate.about_content"); ?><br/><br/>
    </div>

    <h5 class="page-title">Çalışanlarımız</h5>

    <div class="row container">
      <?php $users = User::all(); ?>
      <?php foreach ($users as $user) { ?>
      <div class="col-md-4 col-sm-6 animated rollIn">
        <div class="thumbnail img-hover">
          <img src="<?= $user->image; ?>" alt="" class="img-circle"
          style="padding:0.4em; background-color:#ccc; height:200px">
          <div class="caption text-center">
            <h3><?= $user->full_name(); ?></h3>
            <p><?= $user->cv ?></p>
            <p>
              <i class="fa fa-phone-square"></i> <?= $user->phone; ?><br/>
              <i class="fa fa-envelope"></i> <a href="mailto:<?= $user->email; ?>"><?= $user->email; ?></a>
            </p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

  </div>

  <div class="col-md-offset-1"></div>
</div>