<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function myLoad($class) {
  include_once('classes/'.strtolower($class).'.class.php');
}
spl_autoload_register('myLoad');

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];

$registered_user = new registered_user('Regular User', 'user1');

$registered_user->first_name = $firstname;
$registered_user->last_name = $lastname;
$registered_user->email_address = $email;

if(is_object($registered_user)) {
  echo "You are now a registered user.";
  echo "<hr/>";
  echo "<br/>The registered user's first name is: " .$registered_user->first_name. "<br/>The registered user's last name is: " .$registered_user->last_name. "<br/>The registered user's email is: " .$registered_user->email_address;
  
}
else {
  echo "You are not a registered user.";
}


?>

</body>
</html>
