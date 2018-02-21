<?php
class user extends model {

  public function __construct() {
    parent::__construct();

  }
  public function __set($name, $value) {
    $this->$name = $value;
    return;
  }
  public function __get($name) {
    return $this->$name;
  }
  public function __destruct() {

  }

  public function getName() {
    $this->userID = "$userID";
    $this->firstname = "$firstname";
    $this->lastname = "$lastname";
    $this->email = "$email";
    $this->role = "$role";
  }
}


 ?>
