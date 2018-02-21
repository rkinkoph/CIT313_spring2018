<?php
class controller {

  public $load;
  public $user;

//add all magic functions here

  function __construct() {
    $this->load = new load();
    $this->user = new user();
    $this->home();
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

  function home() {
    $data = $this->user->getName();
    $this->load->view("view.php",$data);
    $this->userID = "rkinkoph";
    $this->firstname = "Becca";
    $this->lastname = "Kinkoph";
    $this->email = "rk@iu.edu";
    $this->role = "admin";
  }
}



 ?>
