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
      <ul class="nav navbar-nav navbar-right" style="padding: 15px 0px 0px 0px;">
        <li><a href="/home/index"><?= t("home.link"); ?></a></li>

        <?php $parent_pages = Page::load()->where("page_id", NULL)->take(); ?>
        <?php if ($parent_pages) { ?>

        <?php foreach ($parent_pages as $parent_page) { ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <?= $parent_page->title; ?>
            <b class="caret"></b>
          </a>
          <?= PageHelper::dropdown_menu($parent_page->all_of_page); ?>
        </li>
        <?php } ?>

        <?php } ?>

        <li role="presentation" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> !!!!!!!!!!!!
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/home/solutions/structural_cabling">asdasd</a></li>

            <li class="dropdown-submenu">
              <a tabindex="-1" href="/home/solutions/security">asddddddddddddddddd</a>
              <ul class="dropdown-menu">
                <li><a href="/home/solutions/security/cctv/">sssssssssssssssss</a></li>
                <li class="dropdown-submenu">
                  <a href="/home/solutions/security">ddddddddddddddddd</a>
                  <ul class="dropdown-menu">
                    <li><a href="/home/solutions/security/cctv/">eeeeeeeeeeeeee</a></li>
                    <li><a href="/home/solutions/security/cctv/">ffffffffff</a></li>
                    <li><a href="/home/solutions/security/cctv/">ggggggggggg</a></li>

                  </ul>
                  <li><a href="/home/solutions/security/cctv/">hhhhhhhhhhhhhhhhhhhh</a></li>
                </li>
                <ul class="dropdown-menu">
                  <li><a href="/home/producttypes/show/">iiiiiiiiiiiii</a></li>
                </ul>
              </li>
            </ul>
            <li><a href="/home/solutions/security/cctv/">jjjjjjjjjjjjjj</a></li>
            <li><a href="/home/solutions/security/cctv/">kkkkkkkkkkkkkkkkkkk</a></li>
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
      <!--
      <ul class="nav navbar-nav navbar-right" style="padding: 15px 0px 0px 0px;">
        <li><a href="/lang/tr"><img src="/app/assets/img/tr.png" class="img-border"/></a></li>
      </ul>
    -->
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>