<nav class="navbar navbar-default navbar-static-top animated fadeInDown">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="min-height: 80px">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="margin-top:25px">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home/index" style="padding: 12px 0px 0px 10px;">
        <img alt="Brand" src="/app/assets/img/default-side.png" width="200" class="img-responsive"/>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left" style="padding: 15px 0px 0px 0px;">
        <li><a href="/home/index"><?= t("home.link"); ?></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?= t("home.corporate.link"); ?>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/home/corporate/about"><?= t("home.corporate.about"); ?></a></li>
            <li><a href="/home/corporate/our_focus"><?= t("home.corporate.our_focus"); ?></a></li>
            <li><a href="/home/corporate/service_policy"><?= t("home.corporate.service_policy"); ?></a></li>
            <li><a href="/home/corporate/human_resources"><?= t("home.corporate.human_resources"); ?></a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?= t("home.solutions.link"); ?>
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/home/solutions/network"><?= t("home.solutions.network"); ?></a></li>
            <li><a href="/home/solutions/server"><?= t("home.solutions.server"); ?></a></li>
            <li><a href="/home/solutions/security"><?= t("home.solutions.security.link"); ?></a></li>
            <li><a href="/home/solutions/wireless/"><?= t("home.solutions.wireless"); ?></a></li>
            <li><a href="/home/solutions/video_conference/"><?= t("home.solutions.video_conference"); ?></a></li>
            <li><a href="/home/solutions/structural_cabling"><?= t("home.solutions.structural_cabling"); ?></a></li>
            <li><a href="/home/solutions/fiber_optic_infrastructure"><?= t("home.solutions.fiber_optic_infrastructure"); ?></a></li>
          </ul>
        </li>

        <li class="dropdown">
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

        <li><a href="/home/references"><?= t("home.references"); ?></a></li>
        <li><a href="/home/gallery"><?= t("home.gallery"); ?></a></li>
        <li><a href="/home/contact"><?= t("home.contact"); ?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="padding: 15px 0px 0px 0px;">
        <li><a href="/lang/tr"><img src="/app/assets/img/tr.png" class="img-border"/></a></li>
        <!--<li><a href="/lang/en"><img src="/app/assets/img/en.png" class="img-border"/></a></li>-->
        <li>
          <!-- Button trigger modal -->
          <a data-toggle="modal" data-target="<?php if (!isset($_SESSION['admin'])) echo '#myModal1'; ?>" href="<?php if (isset($_SESSION['admin'])) echo '/admin/index'?>">
            <?= t("login.link"); ?>
          </a>
          <!-- Button trigger modal end -->
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>