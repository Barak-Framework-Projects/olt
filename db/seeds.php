<?php

//User::create(["first_name" => "first_name", "department_id" => "1"]);


// $producttypes = Producttype::load()->limit(2)->offset(2)->take();
// foreach ($producttypes as $producttype) {
//   echo $producttype->name;
//   echo "<br/>";
// }
// $a = User::load()->order("id")->take();
// print_r($a);

// $a = Producttype::load()->where("category_id", 1)->take();
// $a = Category::load()->where("email", "%olt.com.tr", "like")->take();
// $a = User::unique(["username" => "sgoksel2", "password" => md5("olt_sedat"), "admin" => true]);
// $a = User::load()->where("id", [11, 13], "not in")->or_where("id", [11], "in")->take();
// $a = User::load()->where("id", [12, 13], "not between")->or_where("id", [12, 13], "between")->take();
// $a = User::load()->where("first_name", "Sedat")->or_where("first_name", "Ramazan")->take();
//print_r(Agenda::last(3));
// $producttype = Producttype::find(3);
// if ($producttype->all_of_product)
// 	echo "evet";
// else
// 	echo "hayir";
// $a = Agenda::load()->order("id", "ASC")->limit(3)->select("id")->take();
// print_r($a);
// // print_r($a);
// return;
// exit();
// print_r($a);
// echo "<br/>";
// echo "<br/>";
// echo "<br/>";


if (User::load()->count() == 0) {

  User::create(["first_name" => "Ramazan", "last_name" => "İhsanoğlu", "username" => "rihsanoglu", "password" => "97233e71ad1a600ef532d02edbbf805b", "boss" => true, "admin" => false]);
  User::create(["first_name" => "Sedat",  "last_name" => "Göksel", "username" => "sgoksel", "password" => "97233e71ad1a600ef532d02edbbf805b", "boss" => false, "admin" => true]);

}

//User::new(["first_name" => 2, "phone" => "123", "last_name" => "Demir", "username" => "tdemir", "password" => "123456", "department_id" => 3])->save();

// echo User::exists(1) ? "kayit var" : "kayit yok";

// User::load()->delete_all();
// Department::load()->delete_all();

?>