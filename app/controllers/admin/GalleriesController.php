<?php

class GalleriesController extends AdminController {

  public function index() {
    $this->galleries = Gallery::all();
  }

  // public function create() {}

  public function save() {
    $gallery = Gallery::draft($_POST);
    $gallery->created_at = date("Y-m-d H:i:s");
    $gallery->save();

    $image = $_FILES["image"];
    if ($image["name"] != "") {// varsa yeni resmi ekle
      $gallery->image = FileHelper::move_f($image, "/upload/galleries", $gallery->id);
      $gallery->save();
    } else {
      $gallery->image = FileHelper::copy("/app/assets/img/default.png", "/upload/galleries", $gallery->id . ".png");
      $gallery->save();
    }

    $_SESSION["success"] = "Yeni Galleri eklendi";
    $this->redirect_to("/admin/galleries/show/" . $gallery->id);
  }

  public function show() {
    if (!$this->gallery = Gallery::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Galleri bulunmamaktadır";
      return $this->redirect_to("/admin/galleries");
    }
  }

  public function edit() {
    if (!$this->gallery = Gallery::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Galleri bulunmamaktadır";
      return $this->redirect_to("/admin/galleries");
    }
  }

  public function update() {
    $gallery = Gallery::find($_POST["id"]);
    foreach ($_POST as $key => $value) $gallery->$key = $value;
    $gallery->updated_at = date("Y-m-d H:i:s");
    $gallery->save();

    $image = $_FILES["image"];
    if ($image["name"] != "") {// varsa bir önceki resmi sil ve yeni resmi ekle
      FileHelper::remove($gallery->image);
      $gallery->image = FileHelper::move_f($image, "/upload/galleries", $gallery->id);
      $gallery->save();
    }

    $_SESSION["info"] = "Galleri güncellendi";
    $this->redirect_to("/admin/galleries/show/" . $gallery->id);
  }

  public function destroy() {
    $gallery = Gallery::find($_POST["id"]);

    FileHelper::remove($gallery->image);

    $gallery->destroy();
    $_SESSION["info"] = "Galleri silindi";
    return $this->redirect_to("/admin/galleries");
  }

}
?>