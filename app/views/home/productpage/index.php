<h4 class="page-title">Ürünler</h4>

<div class="container">

  <table id="example" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Resim</th>
        <th>Ürün</th>
        <th>Kategori</th>
        <th>Ürün Tipi</th>
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
          <a class="label label-info" href="/home/categories/show/<?= $product->producttype->category->id; ?>">
            <?= $product->producttype->category->name; ?>
          </a>
        </td>
        <td>
          <a class="label label-danger" href="/home/producttypes/show/<?= $product->producttype->id; ?>">
            <?= $product->producttype->name; ?>
          </a>
        </td>
        <td>
          <a href="/home/products/show/<?= $product->id; ?>"
            class="btn btn-default" role="button" title="Göster"><i class="fa fa-search"></i>
          </a>
        </td>
      </tr>

      <?php } ?>
      <?php } else { ?>
      <tr class="text-center"><td colspan="4">Henüz Ürün mevcut değil</td></tr>
      <?php } ?>
    </tbody>
  </table>

</div>