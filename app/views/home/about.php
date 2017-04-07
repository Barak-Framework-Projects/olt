<h4 class="page-title"><?= t("home.about"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/"><?= t("home.link"); ?></a></li>
  <li class="active"><?= t("home.about"); ?></li>
</ol>

<div class="container">
  <div class="row">
    <div class="col-md-2 hidden-sm hidden-xs">
      <img src="<?= Setting::unique(['name' => 'image_emblem'])->value; ?>" style="width: 150px; height: 150px;" />
    </div>
    <div class="col-md-10 col-sm-12 col-xs-12" style="border-left: 2px solid #ddd;">
      <?= Setting::unique(["name" => "site_about"])->value; ?>
    </div>
  </div>

  <br/><br/>

  <h5 class="page-title">Çalışanlarımız</h5>

  <div class="row container">
    <?php $users = User::all(); ?>
    <?php foreach ($users as $user) { ?>
    <div class="col-md-4 col-sm-6 animated rollIn">
      <div class="thumbnail img-hover">
        <img src="<?= $user->image; ?>" alt="" class="img-circle"
        style="padding:0.4em; background-color:#ccc; height:200px; width: 200px">
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