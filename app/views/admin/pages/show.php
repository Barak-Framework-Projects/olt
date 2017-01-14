<h4 class="page-title">Sayfa Bilgileri</h4>

<div class="form-horizontal">
  <div class="form-group">
    <label class="col-sm-1 control-label" for="parent_page_title">Üst Sayfa</label>
    <div class="col-sm-11">
      <?php $parent_page = $page->page; ?>
      <?php $parent_page_title = (!is_null($parent_page)) ? $parent_page->title : "Üst Sayfa Yok"; ?>
      <input type="text" value="<?= $parent_page_title; ?>" class="form-control" name="parent_page_title" id="parent_page_title" disabled />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-1 control-label" for="title">Konu</label>
    <div class="col-sm-11">
      <input type="text" value="<?= $page->title; ?>" class="form-control" name="title" id="title" disabled />
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-1 control-label" for="content">İçerik</label>
    <div class="col-sm-11">
      <textarea class="form-control" rows="10" name="content" id="content" disabled><?= $page->content; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-1 control-label" for="image">Resim</label>
    <div class="col-sm-11">
      <div class="thumbnail">
        <img src="<?= $page->image; ?> " width="100" height="100" />
      </div>
    </div>
  </div>
</div>

<form class="form-horizontal" action="/admin/pages/destroy" method="post">
  <input type="hidden" value="<?= $page->id; ?>" id="id" name="id" />
  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-11">
      <a class="btn btn-primary" href="/admin/pages/edit/<?= $page->id; ?>">Düzenle</a>
      <input type="submit" class="btn btn-danger" value="sil"
      onClick="return confirm('Bu kaydı silmek istediğinizden emin misiniz?');" />
    </div>
  </div>
</form>

<script type="text/javascript">
$(document).ready(function() {
  $('#content').prop('disabled', true);
  $('#content').summernote({
    toolbar: [],
    height: 200,
    minHeight: null,
    maxHeight: null,
    focus: true,
    lang: 'tr-TR'
  });
});
</script>