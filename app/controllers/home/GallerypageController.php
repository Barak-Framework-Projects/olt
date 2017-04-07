<?php

class GallerypageController extends HomeController {


  public function index() {
    $this->galleries = Gallery::load()->order("id")->take();
  }

}

?>