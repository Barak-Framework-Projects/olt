<h4 class="page-title"><?= t("home.producttype"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li><a href="/home/categories"><?= t("home.categories"); ?></a></li>
  <li><a href="/home/categories/show/<?= $producttype->category->id; ?>"><?= $producttype->category->name ?></a></li>
  <li class="active"><?= $producttype->name; ?></li>
</ol>

<!-- first section - Home -->
<div class="parallax" style="background-image: url(<?= $producttype->image; ?>);">
  <div class="parallax-caption">
    <h1 class="background-transparent"><?= $producttype->name; ?></h1>
  </div>
</div>
<!-- /first section -->

<div class="container"><?= $producttype->content; ?></div>

<div class="row">

  <div class="col-md-3">
    <?php render("product_menu", "home"); ?>
  </div>

  <div class="col-md-9">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          <?= t("home.products"); ?>
        </h3>
      </div>

      <?= render("table", "/home/productpage", ["products" => $products]); ?>

    </div>
  </div>
</div>
