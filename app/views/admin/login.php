<div class="panel panel-default" style="box-shadow: 0 3px 12px rgba(0, 0, 0, 0.3);">
  <div class="panel-heading">
    <h4 class="panel-title">
      <center>
        <?= t("login.title"); ?>
      </center>
    </h4>
  </div>
  <div class="panel-body">

    <form class="login-form" action="/admin/login" accept-charset="UTF-8" method="post">
      <input type="text" placeholder="<?= t("login.username"); ?>" class="form-control" name="username" id="username" />
      <input type="password" placeholder="<?= t("login.password"); ?>" class="form-control" name="password" id="password" />
      <div class="g-recaptcha" data-sitekey="<?= Setting::unique(["name" => "site_googlerecaptchasitekey"])->value; ?>"></div>
      <button type="submit" class="btn btn-primary btn-block"><?= t("login.button"); ?></button>
    </form>

  </div>
  <div class="panel-footer">
    Copyright &copy; <?php echo date("Y"); ?>
    <a data-toggle="modal" data-target="#password_reset" class="pull-right" href=""><?= t("login.password_reset"); ?></a>
  </div>
</div>

<!-- Modal -->

<div class="modal fade" id="password_reset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button" aria-hidden="true">×</button>
        <h4 class="modal-title"><?= t("login.password_reset"); ?></h4>
      </div>

      <form class="login-form" action="/admin/password_reset" accept-charset="UTF-8" method="post">
        <div class="modal-body">
          <div class="form-group">
              <input class="form-control" type="text" placeholder="email" name="email" id="email" />
          </div>
        </div>

        <div class="modal-footer">
          <a data-dismiss="modal" class="btn btn-danger" href="#">İptal</a>
          <input type="submit" name="commit" value="Doğrulama Kodu Gönder" class="btn btn-info" data-disable-with="Doğrulama Kodu Gönder">
        </div>
      </form>

    </div>
  </div>

</div>