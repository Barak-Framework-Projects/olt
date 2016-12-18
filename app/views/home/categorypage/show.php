<h4 class="page-title"><?= t("home.category"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li><a href="/home/categories"><?= t("home.categories"); ?></a></li>
  <li class="active"><?= $category->name ?></li>
</ol>

<!-- first section - Home -->
<div class="parallax" style="background: url(<?= $category->image; ?>) no-repeat center fixed">
  <div class="parallax-caption">
    <h1 class="background-transparent"><?= $category->name; ?></h1>
  </div>
</div>
<!-- /first section -->

<div class="container">

  <h4 class="page-title">Ürün Tipleri</h4>

  <table id="example" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th></th>
        <th>Ad</th>
        <th>Çeşit</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php if ($producttypes) { ?>
      <?php foreach ($producttypes as $producttype) { ?>
      <tr>
        <td><img src="<?= $producttype->image; ?>" class="thumbnail img-responsive" width="184" height="140"/></td>
        <td><?= $producttype->name; ?></td>
        <td><?= count($producttype->all_of_product); ?></td>
        <td>
          <a href="/home/producttypes/show/<?= $producttype->id; ?>" class="btn btn-default" role="button" title="Göster">
            <i class="fa fa-search"></i>Göster
          </a>
        </td>
      </tr>
      <?php } ?>
      <?php } ?>
    </tbody>
  </table>


</div>