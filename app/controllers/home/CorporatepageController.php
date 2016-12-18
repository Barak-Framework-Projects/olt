<?php

class CorporatepageController extends HomeController {

  public function gallery() {
    $this->galleries = Gallery::all();
  }

}

?>