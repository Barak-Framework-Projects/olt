<?php

if (User::load()->count() == 0) {

  User::create(["first_name" => "Ramazan", "last_name" => "İhsanoğlu", "username" => "rihsanoglu", "password" => "97233e71ad1a600ef532d02edbbf805b", "boss" => true, "admin" => false]);
  User::create(["first_name" => "Sedat",  "last_name" => "Göksel", "username" => "sgoksel", "password" => "97233e71ad1a600ef532d02edbbf805b", "boss" => false, "admin" => true]);

}

if (Setting::load()->count() == 0 ) {
  $settings = [

  // site configuration
  "site_title",
  "site_short_title",
  "site_keywords",
  "site_description",
  "site_url",
  "site_about",
  "site_email",
  "site_email_password",
  "site_address_maps",
  "site_address",
  "site_phone",
  "site_fax",
  "site_googleanalyticsid",
  "site_googlerecaptchasitekey",
  "site_googlerecaptchasecretkey",

  // image configuration
  "image_icon",
  "image_emblem",
  "image_logo_normal",
  "image_logo_side",
  "image_footer",

  // social configuration
  "social_facebook",
  "social_instagram",
  "social_twitter",
  "social_linkedin",
  "social_googleplus",
  ];
  asort($settings);
  foreach ($settings as $setting) {
    Setting::create(["name" => $setting]);
  }
}

?>
