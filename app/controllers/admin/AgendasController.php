<?php

class AgendasController extends AdminController {

  public function index() {
    $this->agendas = Agenda::all();
  }

  // public function create() {}

  public function save() {
    $agenda = Agenda::draft($_POST);
    $agenda->created_at = date("Y-m-d H:i:s");
    $agenda->save();

    // yeni resim varsa ekle
    $images = (isset($_FILES["images"])) ? $_FILES["images"] : $files = null;

    if (!is_null($images)) {
      $imagenames = $images["name"];
      $tmpnames = $images["tmp_name"];

      for ($i = 0; $i < count($imagenames); $i++) {

        $image = ["name" => $imagenames[$i], "tmp_name" => $tmpnames[$i], "size" => $sizes[$i]];
        if ($image["name"] != "") {
          $agendaimage = Agendaimage::draft();
          $agendaimage->agenda_id = $agenda->id;
          $agendaimage->save();

          $agendaimage->image = FileHelper::move_f($image, "/upload/agendas/" . $agenda->id, $agendaimage->id);
          $agendaimage->save();
        }
      }
    } else {
      $agendaimage = Agendaimage::draft();
      $agendaimage->agenda_id = $agenda->id;
      $agendaimage->save();
      $agendaimage->image = FileHelper::copy("/app/assets/img/default.png", "/upload/agendas/" . $agenda->id, $agendaimage->id . ".png");
      $agendaimage->save();
    }

    $_SESSION["success"] = "Yeni Haber eklendi";
    $this->redirect_to("/admin/agendas/show/" . $agenda->id);
  }

  public function show() {
    if (!$this->agenda = Agenda::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Haber bulunmamaktadır";
      return $this->redirect_to("/admin/agendas");
    }
    $this->agendaimages = $this->agenda->all_of_agendaimage;
  }

  public function edit() {
    if (!$this->agenda = Agenda::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Haber bulunmamaktadır";
      return $this->redirect_to("/admin/agendas");
    }
    $this->agendaimages = $this->agenda->all_of_agendaimage;

  }

  public function update() {
    $agenda = Agenda::find($_POST["id"]);
    foreach ($_POST as $key => $value) $agenda->$key = $value;
    $agenda->updated_at = date("Y-m-d H:i:s");
    $agenda->save();

    $agendaimages = $agenda->all_of_agendaimage;

    if ($agendaimages) { // haber mevcut resimleri var ise
      foreach ($agendaimages as $agendaimage) {
        $agendaimage_id = $agendaimage->id;
        $image = $_FILES[$agendaimage_id];

        if ($image["name"] != "") {// varsa bir önceki resmi sil ve yeni resmi ekle
          FileHelper::remove($agendaimage->image);
          $agendaimage->image = FileHelper::move_f($image, "/upload/agendas/" . $agenda->id, $agendaimage->id);
          $agendaimage->save();
        }
      }
    }

    // yeni resim ekleme isteği varsa ekle
    $images = (isset($_FILES["images"])) ? $_FILES["images"] : $files = null;
    if (!is_null($images)) {
      $imagenames = $images["name"];
      $tmpnames = $images["tmp_name"];
      $sizes = $images["size"];

      for ($i = 0; $i < count($imagenames); $i++) {

        $image = ["name" => $imagenames[$i], "tmp_name" => $tmpnames[$i], "size" => $sizes[$i]];

        if ($image["name"] != "") {

          $agendaimage = Agendaimage::draft();
          $agendaimage->agenda_id = $agenda->id;
          $agendaimage->save();

          $agendaimage->image = FileHelper::move_f($image, "/upload/agendas/" . $agenda->id, $agendaimage->id);
          $agendaimage->save();
        }
      }
    }

    $_SESSION["info"] = "Haber güncellendi";
    $this->redirect_to("/admin/agendas/show/" . $agenda->id);
  }

  public function destroy() {
    $agenda = Agenda::find($_POST["id"]);

    $agendaimages = $agenda->all_of_agendaimage;
    if ($agendaimages) {
      foreach ($agendaimages as $agendaimage) {
        FileHelper::remove($agendaimage->image);
        $agendaimage->destroy();
      }
    }

    $agenda->destroy();
    $_SESSION["info"] = "Haber silindi";
    return $this->redirect_to("/admin/agendas");
  }

}
?>