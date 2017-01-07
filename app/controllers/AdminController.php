<?php
class AdminController extends ApplicationController {

  protected $before_actions = [
  ["require_login", "except" => ["login", "logout", "password_reset"]]
  ];

  public function login() {

    if (isset($_SESSION["admin"]))
      return $this->redirect_to("/admin/index");

    if (isset($_POST["username"]) and isset($_POST["password"])) {

      if ($user = User::unique(
        ["username" => $_POST["username"], "password" => md5($_POST["password"]), "admin" => true]
        ))
      {

        $_SESSION["success"] = "Admin sayfasına hoş geldiniz";
        $_SESSION["full_name"] = $user->full_name();
        $_SESSION["admin"] = $user->id;
        return $this->render("/admin/index");

      } else {

        $_SESSION["danger"] = "Oops! İsminiz veya şifreniz hatalı, belki de bunlardan sadece biri hatalıdır?";

      }
    }

    return $this->render(["layout" => "default"]);
  }

// public function index() {} // OPTIONAL

  public function password_reset() {

    if (isset($code)) {

    } else {

      if ($user = User::unique(["email" => $_POST["email"], "admin" => true])) {

        $alphabet = "abcdefghijklmnopqrstuwxyzABC0123456789";
        for ($i = 0; $i < 8; $i++) {
          $code[$i] = $alphabet[rand(0, strlen($alphabet) - 1)];
        }
        $code = md5(implode("", $code));

        $_header = 'Content-type: text/plain; charset=UTF-8' . "\r\n";
        $_header = $_header . "From: Admin\r\n";
        $_title = "Password Reset";
        $_content = "asdasd";

        if (mail("test@olt.com.tr", "", "", "")) {
          $_SESSION["success"] = "Şifre sıfırlama isteği e-posta adresinize gönderildi";
        } else {
          $_SESSION["danger"] = "E-Posta gönderiminde sorun oluştu!";
        }

      } else {
        $_SESSION["danger"] = "Bu e-posta adresine sahip bir kullanıcı bulunamadı.";
      }
    }
    return $this->redirect_to("/admin/login");
  }

  public function logout() {
    if (isset($_SESSION["admin"]))
      session_destroy();
    return $this->redirect_to("/admin/login");
  }

  public function require_login() {
    if (!isset($_SESSION["admin"])) {
      $_SESSION["warning"] = "Lütfen hesabınıza giriş yapın!";
      return $this->redirect_to("/admin/login");
    }
  }
}
?>