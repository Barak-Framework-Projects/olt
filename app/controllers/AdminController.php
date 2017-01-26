<?php
class AdminController extends ApplicationController {

  protected $before_actions = [
  ["require_login", "except" => ["login", "logout", "password_reset"]]
  ];

  public function login() {

    if (isset($_SESSION["admin"]))
      return $this->redirect_to("/admin/index");

    if (isset($_POST["username"]) and isset($_POST["password"])) { // post action?

      $google_recaptchakey = Setting::unique(["name" => "site_googlerecaptchasecretkey"])->value;
      $captcha = $_POST['g-recaptcha-response'];
      $control = CaptchaHelper::google_parser("https://www.google.com/recaptcha/api/siteverify?secret=" . $google_recaptchakey . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
      $control = json_decode($control);

      if ($control->success == true) {

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
      } else {
        $_SESSION["info"] = "Robot olmadığınızı kanıtlamak için aşağıdaki kutucuğa tıklayın.";
      }
    }

    return $this->render(["layout" => "default"]);
  }

  // public function index() {} // OPTIONAL

  public function password_reset() {

    if (array_key_exists("code", $this->_params)) {
      // get password reset panel
      if ($activation = Activation::unique(["code" => $this->code])) {

        $this->activation = $activation;
        return $this->render(["layout" => "default", "template" => "/admin/password_reset"]);

      }
    } elseif (isset($_POST["activation_code"])) {
      // save new password
      if ($_POST["password"] === $_POST["password_confirmation"]) {

        $activation = Activation::unique(["code" => $_POST["activation_code"]]);
        $user = $activation->user;
        $user->password = md5($_POST["password"]);
        $user->save();

        // activation code delete!
        $activation->destroy();

        $_SESSION["info"] = "Yeni şifre başarıyla ayarlandı";
        return $this->redirect_to("/admin/login");
      } else {

        // not password does not match password confirmation
        $_SESSION["danger"] = "Şifre, şifre onayıyla eşleşmiyor!";
        return $this->redirect_to("/admin/password_reset/" . $_POST["activation_code"]);

      }
    } else {

      // email adresine sahip bir admin var mı ?
      if ($user = User::unique(["email" => $_POST["email"], "admin" => true])) {

        // önceden böyle bir code yoksa ekle
        do {
          $code = md5(PasswordHelper::generate(16));
        } while (Activation::unique(["code" => $code]));

        // yeni aktivasyon anahtarı oluştur
        Activation::create(["user_id" => $user->id, "code" => $code, "created_at" => date("Y-m-d H:i:s")]);

        // site bilgileri
        $_site_url = Setting::unique(["name" => "site_url"])->value;
        $_site_email = Setting::unique(["name" => "site_email"])->value;
        $_site_email_password = Setting::unique(["name" => "site_email_password"])->value;

        // mail'e başla
        $mail = new Mail("mail." . $_site_url, 25);

        // nerden ?
        $mail->Username = $_site_email;
        $mail->Password = $_site_email_password;
        $mail->SetFrom($_site_email, 'Admin');

        // nereye ?
        $mail->AddAddress($user->email, $user->full_name());

        // ne ?
        $mail->Subject = '[Admin] Please reset your password';
        $mail->Body = "
        Sistem şifrenizi kaybettiğinizi duyduk. Üzgünüm!<br/><br/>
        Endişelenme! Parolanızı sıfırlamak için 1 saat içinde aşağıdaki bağlantıyı kullanabilirsiniz:<br/><br/>
        <a href='http://$_site_url/admin/password_reset/$code'>http://$_site_url/admin/password_reset/$code</a>
        ";

        if ($mail->Send()) {
          $_SESSION["success"] = "Şifre sıfırlama isteği E-posta adresinize gönderildi";
        } else {
          $_SESSION["danger"] = "E-Posta gönderiminde sorun oluştu!";
        }

      } else {
        $_SESSION["danger"] = "Bu E-posta adresine sahip bir kullanıcı bulunamadı.";
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