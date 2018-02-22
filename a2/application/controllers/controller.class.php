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

    $this->user->userID = "rkinkoph";
    $this->user->firstname = "Becca";
    $this->user->lastname = "Kinkoph";
    $this->user->email = "rk@iu.edu";
    $this->user->role = "admin";
    $data = $this->user->getName();
    $this->load->view("view.php",$data);
  }
}



 ?>
