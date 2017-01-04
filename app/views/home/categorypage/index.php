<h4 class="page-title"><?= t("home.categories"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li class="active"><?= t("home.categories"); ?></li>
</ol>

<div class="container">

  <div class="row">
    <?php if($categories) { ?>
    <?php foreach ($categories as $category) { ?>

    <div class="col-sm-6 col-md-4 animated flipInX">
      <div class="thumbnail">
        <img src="<?= $category->image; ?>" alt="..." style="height:100px; width:100%">
        <div class="caption">
          <h3><?= $category->name; ?></h3>
          <p><?= $category->content; ?></p>
          <p><a href="/home/categories/show/<?= $category->id; ?>" class="btn btn-primary fa fa-search" role="button">İncele</a></p>
        </div>
      </div>
    </div>

    <?php } ?>
  </div>
  <?php } ?>
  <?php } else { ?>
  <tr class="text-center"><td colspan="4">Henüz Kategori mevcut değil</td></tr>
  <?php } ?>

</div>