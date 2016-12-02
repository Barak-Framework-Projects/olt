<?php

class PartnersController extends AdminController {

  public function index() {
    $this->partners = Partner::all();
  }

  // public function create() {}

  public function save() {
    $partner = Partner::draft($_POST);
    $partner->created_at = date("Y-m-d H:i:s");
    $partner->save();

    $image = $_FILES["image"];
    if ($image["name"] != "") {// varsa yeni resmi ekle
      $partner->image = ImageHelper::file_upload($image, "/upload/partners", $partner->id);
      $partner->save();
    }

    $_SESSION["success"] = "Yeni Partner eklendi";
    $this->redirect_to("/admin/partners/show/" . $partner->id);
  }

  public function show() {
    if (!$this->partner = Partner::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Partner bulunmamaktadır";
      return $this->redirect_to("/admin/partners");
    }
  }

  public function edit() {
    if (!$this->partner = Partner::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Partner bulunmamaktadır";
      return $this->redirect_to("/admin/partners");
    }
  }

  public function update() {
    $partner = Partner::find($_POST["id"]);
    foreach ($_POST as $key => $value) $partner->$key = $value;
    $partner->updated_at = date("Y-m-d H:i:s");
    $partner->save();

    $image = $_FILES["image"];
    if ($image["name"] != "") {// varsa bir önceki resmi sil ve yeni resmi ekle
      $partner->image = ImageHelper::file_update($partner->image, $image, "/upload/partners", $partner->id);
      $partner->save();
    }

    $_SESSION["info"] = "Partner güncellendi";
    $this->redirect_to("/admin/partners/show/" . $partner->id);
  }

  public function destroy() {
    $partner = Partner::find($_POST["id"]);

    ImageHelper::file_remove($partner->image);

    $partner->destroy();
    $_SESSION["info"] = "Partner silindi";
    return $this->redirect_to("/admin/partners");
  }

}
?>