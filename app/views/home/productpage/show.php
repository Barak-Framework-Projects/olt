<h4 class="page-title"><?= t("home.product"); ?></h4>
<ol class="breadcrumb text-right">
  <li><a href="/">Anasayfa</a></li>
  <li><a href="/home/categories"><?= t("home.categories"); ?></a></li>
  <li><a href="/home/categories/show/<?= $product->producttype->category->id; ?>"><?= $product->producttype->category->name ?></a></li>
  <li><a href="/home/producttypes/show/<?= $product->producttype->id; ?>"><?= $product->producttype->name; ?></a></li>
  <li class="active"><?= $product->name; ?></li>
</ol>

<style>
.thumbnail {
  position: relative;
  overflow: hidden;
}

.caption {
  position: absolute;
  top: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.2);
  width: 100%;
  height: 100%;
  padding: 2%;
  display: none;
  text-align: center;
  color: #fff !important;
  z-index: 2;
}
</style>

<script type="text/javascript">
$( document ).ready(function() {

  $('.thumbnail').hover(
    function(){
            $(this).find('.caption').fadeToggle("slow"); //.fadeIn(250)
          },
          function(){
            $(this).find('.caption').fadeToggle("slow"); //.fadeOut(205)
          }
          );
});
</script>

<div class="container">

  <div class="row">

    <div class="col-md-4 col-sm-6">

      <div class="modal fade" id="<?= $product->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <img src="<?= $product->image; ?>" width="600" height="400" class="img-thumbnail" />
            </div>
          </div>
        </div>
      </div>

      <a data-toggle="modal" data-target="#<?= $product->id; ?>" style="color:white">
        <div class="thumbnail">
          <img src="<?= $product->image; ?>" alt="..." class="img-responsive" style="max-height:177px" />
          <div class="caption" >
            <h3><i class="fa fa-plus-circle fa-3x"></i></h3>
          </div>
        </div>
      </a>

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
    <?= render("table", "/home/productpage", ["products" => $products]); ?>

  </div>
</div>