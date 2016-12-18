<?php

class ReferencesController extends AdminController {

  public function index() {
    $this->references = Reference::all();
  }

  // public function create() {}

  public function save() {
    $reference = Reference::draft($_POST);
    $reference->created_at = date("Y-m-d H:i:s");
    $reference->save();

    $image = $_FILES["image"];
    if ($image["name"] != "") {// varsa yeni resmi ekle
      $reference->image = FileHelper::move_f($image, "/upload/references", $reference->id);
      $reference->save();
    } else {
    	$reference->image = FileHelper::copy("/app/assets/img/default.png", "/upload/references", $reference->id . ".png");
    	$reference->save();
    }

    $_SESSION["success"] = "Yeni Referans eklendi";
    $this->redirect_to("/admin/references/show/" . $reference->id);
  }

  public function show() {
    if (!$this->reference = Reference::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Referans bulunmamaktadır";
      return $this->redirect_to("/admin/references");
    }
  }

  public function edit() {
    if (!$this->reference = Reference::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Referans bulunmamaktadır";
      return $this->redirect_to("/admin/references");
    }
  }

  public function update() {
    $reference = Reference::find($_POST["id"]);
    foreach ($_POST as $key => $value) $reference->$key = $value;
    $reference->updated_at = date("Y-m-d H:i:s");
    $reference->save();

    $image = $_FILES["image"];
    if ($image["name"] != "") {// varsa bir önceki resmi sil ve yeni resmi ekle
    	FileHelper::remove($reference->image);
      $reference->image = FileHelper::move_f($image, "/upload/references", $reference->id);
      $reference->save();
    }

    $_SESSION["info"] = "Referans güncellendi";
    $this->redirect_to("/admin/references/show/" . $reference->id);
  }

  public function destroy() {
    $reference = Reference::find($_POST["id"]);

    FileHelper::remove($reference->image);

    $reference->destroy();
    $_SESSION["info"] = "Referans silindi";
    return $this->redirect_to("/admin/references");
  }

}
?>