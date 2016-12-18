<?php

class UsersController extends AdminController {

  public function index() {
    $this->users = User::all();
  }

  public function create() {}

  public function save() {

    // rastgele bir parolar belirle
    $alphabet = "abcdefghijklmnopqrstuwxyzABC0123456789";
    for ($i = 0; $i < 8; $i++) {
      $random_password[$i] = $alphabet[rand(0, strlen($alphabet) - 1)];
    }
    $random_password = implode("", $random_password);
    $_POST["password"] = md5($random_password);

    $user = User::draft($_POST);
    $user->created_at = date("Y-m-d H:i:s");
    $user->save();

    $image = $_FILES["image"];
    if ($image["name"] != "") {// varsa yeni resmi ekle
      $user->image = FileHelper::move_f($image, "/upload/users", $user->id);
      $user->save();
    } else {
    	$user->image = FileHelper::copy("/app/assets/img/default.png", "/upload/users", $user->id . ".png");
    	$user->save();
    }

    $_SESSION["warning"] = "Güvenliği için bu kullanıcı parolasını güncellemelidir!";
    $_SESSION["success"] = "Kullanıcı adı: " . $user->username . "<br/> Parola: " . $random_password . "<br/>yeni kayıt oluşturuldu";
    $this->redirect_to("/admin/users/show/" . $user->id);
  }

  public function show() {
    if (!$this->user = User::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Personel bulunmamaktadır";
      return $this->redirect_to("/admin/users");
    }
  }

  public function edit() {
    if (!$this->user = User::find($this->id)) {
      $_SESSION["danger"] = "Böyle bir Personel bulunmamaktadır";
      return $this->redirect_to("/admin/users");
    }
  }

  public function update() {
    if ($_POST["password"] != "")
      $_POST["password"] = md5($_POST["password"]);

    $user = User::find($_POST["id"]);
    foreach ($_POST as $key => $value) $user->$key = $value;
    $user->updated_at = date("Y-m-d H:i:s");
    $user->save();

    $image = $_FILES['image'];
    if ($image["name"] != "") {// varsa bir önceki resmi sil ve yeni resmi ekle
    	FileHelper::remove($user->image);
      $user->image = FileHelper::move_f($image, "/upload/users", $user->id);
      $user->save();
    }

    $_SESSION["info"] = "Personel güncellendi";
    $this->redirect_to("/admin/users/show/" . $user->id);
  }

  public function destroy() {
    $user = User::find($_POST["id"]);

    FileHelper::remove($user->image);

    $user->destroy();
    $_SESSION["info"] = "Personel silindi";
    return $this->redirect_to("/admin/users");
  }
}

?>