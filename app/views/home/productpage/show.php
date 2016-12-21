<h4 class="page-title"><?= t("home.product"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li><a href="/home/categories"><?= t("home.categories"); ?></a></li>
  <li><a href="/home/categories/show/<?= $product->producttype->category->id; ?>"><?= $product->producttype->category->name ?></a></li>
  <li><a href="/home/producttypes/show/<?= $product->producttype->id; ?>"><?= $product->producttype->name; ?></a></li>
  <li class="active"><?= $product->name; ?></li>
</ol>


<div class="container">

  <div class="row">

    <div class="col-md-4 col-sm-6">

      <div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <img src="<?= $product->image; ?>" width="600" height="400" class="img-thumbnail" />
            </div>
          </div>
        </div>
      </div>
      <div class="img-thumbnail">
        <img src="<?= $product->image; ?>" height="200" width="350"  data-toggle="modal" data-target="#image"/>
      </div>

    </div>
    <div class="col-md-8 col-sm-6">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            Ürün Bilgileri
          </h3>
        </div>

        <table class="table table-striped table-bordered table-hover">
          <tbody>
            <tr>
              <td><b>Kategori</b></td>
              <td><?= $product->producttype->category->name; ?></td>
            </tr>
            <tr>
              <td><b>Ürün Tipi</b></td>
              <td><?= $product->producttype->name; ?></td>
            </tr>
            <tr>
              <td><b>Ad</b></td>
              <td><?= $product->name; ?></td>
            </tr>
            <tr>
              <td><b>Fiyat</b></td>
              <td><?= $product->price; ?></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </div>




  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">


    <li role="presentation" class="active">
      <a href="#content" aria-controls="content" role="tab" data-toggle="tab">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              Detaylı Açıklama
            </h3>
          </div>
        </div>
      </a>
    </li>


    <li role="presentation">
      <a href="#file" aria-controls="file" role="tab" data-toggle="tab">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              Dosya
            </h3>
          </div>
        </div>
      </a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="content">
      <div class="well well-sm"><?= $product->content; ?></div>
    </div>
    <div role="tabpanel" class="tab-pane" id="file">
      <embed src="<?= $product->file; ?>" style="width:100%;height:200px"></embed>
    </div>
  </div>

  <script type="text/javascript">
  $('#someTab').tab('show');
  </script>

  <hr>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">
        İlgili Ürünler
      </h3>
    </div>

    <?php $products = Producttype::find($product->producttype->id)->all_of_product; ?>


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
</div>