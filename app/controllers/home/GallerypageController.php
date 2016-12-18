<?php

class GallerypageController extends HomeController {


  public function index() {
    $this->galleries = Gallery::all();
  }

}

?>