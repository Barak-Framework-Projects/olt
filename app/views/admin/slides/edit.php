<h4 class="page-title">Slayt Düzenle</h4>

<form class="form-horizontal" action="/admin/slides/update" accept-charset="UTF-8" method="post" enctype="multipart/form-data">
	<input type="hidden" value="<?= $slide->id; ?>" name="id" id="id" />
	<div class="form-group">
		<label class="col-sm-1 control-label" for="subject">Konu</label>
		<div class="col-sm-11">
			<input type="text" value="<?= $slide->subject; ?>" class="form-control" size="50" name="subject" id="subject" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-1 control-label" for="content">İçerik</label>
		<div class="col-sm-11">
			<textarea class="form-control" rows="10" name="content" id="content"><?= $slide->content; ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-1 control-label" for="image">Resim</label>
		<div class="col-sm-11">
			<div class="thumbnail">
				<img src="<?= $slide->image; ?>" width="100" height="100" />
				<div class="caption">
					<input type="file" id="image" name="image" class="form-control" />
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-1 control-label" for="image">Arka Plan</label>
		<div class="col-sm-11">
			<div class="thumbnail">
				<img src="<?= $slide->bg_image; ?>" width="100" height="100" />
				<div class="caption">
					<input type="file" id="bg_image" name="bg_image" class="form-control" />
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-1 col-sm-11">
			<button type="submit" class="btn btn-primary"
			onClick="return confirm('Güncellemek istediğinizden emin misiniz?');">Güncelle</button>
		</div>
	</div>
</form>

<script type="text/javascript">
$(document).ready(function() {
	$('#content').summernote({
		height: 200,
		minHeight: null,
		maxHeight: null,
		focus: true,
		lang: 'tr-TR'
	});
});
</script>