<nav class="navbar navbar-default animated fadeInDown">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="min-height: 60px">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home/index" style="padding: 2px 0px 0px 10px;">
        <img alt="Brand" src="/app/assets/img/default-side.png" width="200" class="img-responsive"/>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" style="padding: 5px 0px 0px 0px;">
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