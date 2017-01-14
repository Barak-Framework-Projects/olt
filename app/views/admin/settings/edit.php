<h4 class="page-title">Site Düzenle</h4>

<form class="form-horizontal" action="/admin/settings/update" accept-charset="UTF-8" method="post" enctype="multipart/form-data">

  <div class="form-horizontal">
    <?php foreach ($settings as $setting) { ?>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="subject"><?= $setting->name; ?></label>
      <div class="col-sm-10">
        <?php if (preg_match("/image/", $setting->name)) { ?>
        <div class="thumbnail">
          <img src="<?= $setting->value; ?>" width="100" height="100" />
          <div class="caption">
            <input type="file" id="<?= $setting->name; ?>" name="<?= $setting->name; ?>" class="form-control" />
          </div>
        </div>
        <?php } elseif (preg_match("/address/", $setting->name)) { ?>
        <textarea class="form-control" rows="5" name="<?= $setting->name; ?>" id="<?= $setting->name; ?>"><?= $setting->value; ?></textarea>
        <?php } else { ?>
        <input type="text" value="<?= $setting->value; ?>" class="form-control" name="<?= $setting->name; ?>" id="<?= $setting->name; ?>" />
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary"
      onClick="return confirm('Güncellemek istediğinizden emin misiniz?');">Güncelle</button>
    </div>
  </div>
</form>