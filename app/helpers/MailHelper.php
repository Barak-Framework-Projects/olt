<?php

class MailHelper extends PHPMailer {

  public function __construct($host, $port = 25) {
    parent::__construct();

    // set host like 'mail.website.com'
    $this->Host = $host;

    // Enables SMTP debug information (for testing)
    //    1 = errors and messages
    //    2 = messages only
    $this->SMTPDebug = 1;

    // Setting SMTP Protocol
    // telling the class to use SMTP
    $this->isSMTP();

    // Setting Default Port
    // set the SMTP port for the outMail server
    //    use either 25, 587, 2525 or 8025
    $this->Port     = $port;

    // Default Charset
    $this->CharSet  = 'UTF-8';
    $this->Encoding = "base64";

    // Default SMTP Auth
    // Enable SMTP authentication
    $this->SMTPAuth = true;

    // Default HTML Format
    $this->isHTML(true);
  }


  public function __destruct() {
    parent::__destruct();
  }

}

?>
