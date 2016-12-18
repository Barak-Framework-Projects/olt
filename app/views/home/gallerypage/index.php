<h4 class="page-title">Galeriler</h4>
<ol class="breadcrumb text-right">
  <li><a href="#">Anasayfa</a></li>
  <li class="active"><?= t("home.gallery"); ?></li>
</ol>

<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
  <div class="slides"></div>
  <h3 class="title"></h3>
  <a class="prev">‹</a>
  <a class="next">›</a>
  <a class="close">×</a>
  <a class="play-pause"></a>
  <ol class="indicator"></ol>
</div>

<div id="links">
  <?php if ($galleries) { ?>
  <?php foreach($galleries as $gallery) { ?>
  <a href="<?= $gallery->image; ?>" class="img-thumbnail animated flipInY" title="<?= $gallery->name; ?> ">
    <img src="<?= $gallery->image; ?>" style='min-width:200px;width:200px;min-height:200px;height:200px;'>
  </a>

  <?php } ?>
  <?php } else { ?>
  <tr class="text-center"><td colspan="4">Henüz galeri mevcut değil</td></tr>
  <?php } ?>
</div>

<script>
document.getElementById('links').onclick = function (event) {
  event = event || window.event;
  var target = event.target || event.srcElement,
  link = target.src ? target.parentNode : target,
  options = {index: link, event: event},
  links = this.getElementsByTagName('a');
  blueimp.Gallery(links, options);
};
</script>
<script>
blueimp.Gallery(
  document.getElementById('links').getElementsByTagName('a'),
  {
    container: '#blueimp-gallery-carousel',
    carousel: true
  }
  );
</script>