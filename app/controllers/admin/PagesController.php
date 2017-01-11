<?php

class pagesController extends AdminController {

  public function index() {
    $this->parent_pages = Page::load()->where("page_id", NULL)->take();
  }

  public function create() {
    $this->parent_pages = Page::load()->where("page_id", NULL)->take();
  }

  public function save() {
    if ($_POST["page_id"] == "") $_POST["page_id"] = NULL;

    $page = Page::draft($_POST);
    $page->created_at = date("Y-m-d H:i:s");
    $page->save();

    $_SESSION["success"] = "Yeni Sayfa eklendi";
    $this->redirect_to("/admin/pages/show/" . $page->id);
  }

  public function show() {
    if (!$this->page = Page::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Sayfa bulunmamaktadır";
      return $this->redirect_to("/admin/pages");
    }
  }

  public function edit() {
    if (!$this->page = Page::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Sayfa bulunmamaktadır";
      return $this->redirect_to("/admin/pages");
    }
    //$this->pages = Page::load()->where("id", $this->id, "!=")->take();
    $this->parent_pages = Page::load()->where("page_id", NULL)->take();

  }

  public function update() {
    if ($_POST["page_id"] == "") $_POST["page_id"] = NULL;

    $page = Page::find($_POST["id"]);
    foreach ($_POST as $key => $value) $page->$key = $value;
    $page->updated_at = date("Y-m-d H:i:s");
    $page->save();

    $_SESSION["info"] = "Sayfa güncellendi";
    $this->redirect_to("/admin/pages/show/" . $page->id);
  }

  public function destroy() {
    $page = Page::find($_POST["id"]);
    if ($page->all_of_page) {
      $_SESSION["danger"] = "Silmek İstediğiniz sayfanın alt sayfaları olduğundan dolayı silemezsiniz!";
      $this->redirect_to("/admin/pages/show/" . $page->id);
    } else {
      $page->destroy();
      $_SESSION["info"] = "Sayfa silindi";
      return $this->redirect_to("/admin/pages");
    }
  }

}
?>