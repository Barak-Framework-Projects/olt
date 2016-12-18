<?php

class UTF8Helper {

  /* source: http://stackoverflow.com/questions/7128856/strip-out-html-and-special-characters */
  public static function html_to_clear($content) {
    // Strip HTML Tags
    $clear = strip_tags($content);

    // Clean up things like &amp;
    $clear = html_entity_decode($clear);

    // Strip out any url-encoded stuff
    $clear = urldecode($clear);

    // Replace non-AlNum characters with space
    // $clear = preg_replace('/[^A-Za-z0-9]/', ' ', $clear);

    // Replace Multiple spaces with single space
    $clear = preg_replace('/ +/', ' ', $clear);
    // Trim the string of leading/trailing space
    $clear = trim($clear);

    return $clear;
  }

  public static function days($index) {
    $_days = array("Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi", "Pazar");
    return $_days[$index];
  }

  public static function months($index) {
    $_months = array(
      "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran",
      "Temmuz", "Ağustos", "Eylül", "Ekim ", "Kasım ", "Aralık",
      );
    return $_months[$index];
  }

}

?>