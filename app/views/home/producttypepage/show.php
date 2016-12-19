<h4 class="page-title"><?= t("home.producttype"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li><a href="/home/categories"><?= t("home.categories"); ?></a></li>
  <li><a href="/home/categories/show/<?= $producttype->category->id; ?>"><?= $producttype->category->name ?></a></li>
  <li class="active"><?= $producttype->name; ?></li>
</ol>

<!-- first section - Home -->
<div class="parallax" style="background: url(<?= $producttype->image; ?>) no-repeat center fixed">
  <div class="parallax-caption">
    <h1 class="background-transparent"><?= $producttype->name; ?></h1>
  </div>
</div>
<!-- /first section -->

<div class="container"><?= $producttype->content; ?></div>

<div class="container">

  <h4 class="page-title">Ürünler</h4>

  <table id="example" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th></th>
        <th>Ad</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php if ($products) { ?>
      <?php foreach ($products as $product) { ?>
      <tr>
        <td><img src="<?= $product->image; ?>" class="thumbnail img-responsive" width="184" height="140"/></td>
        <td><?= $product->name; ?></td>
        <td>
          <a href="/home/products/show/<?= $product->id; ?>" class="btn btn-default" role="button" title="Göster">
            <i class="fa fa-search"></i>Göster
          </a>
        </td>
      </tr>

      <?php } ?>
      <?php } ?>
    </tbody>
  </table>


</div>