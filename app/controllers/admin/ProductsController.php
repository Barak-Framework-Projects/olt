<?php

class ProductsController extends AdminController {

  public function index() {
    $this->products = Product::all();
  }

  public function create() {
    $this->categories = Category::all();
  }

  public function save() {
    $product = Product::draft($_POST);
    $product->created_at = date("Y-m-d H:i:s");
    $product->save();

    $image = $_FILES["image"];
    if ($image["name"] != "") {// varsa yeni resmi ekle
      $product->image = FileHelper::move_f($image, "/upload/products/image", $product->id);
      $product->save();
    } else {
    	$product->image = FileHelper::copy("/app/assets/img/default.png", "/upload/products", $product->id . ".png");
    	$product->save();
    }

    $file = $_FILES["file"];
    if ($file["name"] != "") {// varsa yeni resmi ekle
      $product->file = FileHelper::move_f($file, "/upload/products/file", $product->id);
      $product->save();
    }

    $_SESSION["success"] = "Yeni Ürün eklendi";
    $this->redirect_to("/admin/products/show/" . $product->id);
  }

  public function show() {
    if (!$this->product = Product::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Ürün bulunmamaktadır";
      return $this->redirect_to("/admin/products");
    }
  }

  public function edit() {
  	$this->categories = Category::all();
    if (!$this->product = Product::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Ürün bulunmamaktadır";
      return $this->redirect_to("/admin/products");
    }
  }

  public function update() {
    $product = Product::find($_POST["id"]);
    foreach ($_POST as $key => $value) $product->$key = $value;
    $product->updated_at = date("Y-m-d H:i:s");
    $product->save();

    $image = $_FILES["image"];
    if ($image["name"] != "") {// varsa bir önceki resmi sil ve yeni resmi ekle
    	FileHelper::remove($product->image);
      $product->image = FileHelper::move_f($image, "/upload/products/image", $product->id);
      $product->save();
    }

    $file = $_FILES["file"];
    if ($file["name"] != "") {// varsa bir önceki resmi sil ve yeni resmi ekle
      $product->file = FileHelper::file_update($product->file, $file, "/upload/products/file", $product->id);
      $product->save();
    }

    $_SESSION["info"] = "Ürün güncellendi";
    $this->redirect_to("/admin/products/show/" . $product->id);
  }

  public function destroy() {
    $product = Product::find($_POST["id"]);

    FileHelper::file_remove($product->image);
    FileHelper::file_remove($product->file);

    $product->destroy();
    $_SESSION["info"] = "Ürün silindi";
    return $this->redirect_to("/admin/products");
  }

}
?>