<h4 class="page-title"><?= t("home.products"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li class="active"><?= t("home.products"); ?></li>
</ol>

<div class="container-fluid">

  <?php render(["partial" => "home/productpage/table", "locals" => ["products" => $products]]); ?>

</div>