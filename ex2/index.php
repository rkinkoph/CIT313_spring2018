<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once('classes/user.class.php');
include_once('classes/admin.class.php');
include_once('classes/registered_user.class.php');

$admin = new admin('Administrator','rkinkoph');
$registered_user = new registered_user('Regular User', 'lskywalker');

$admin->first_name = 'Becca';
$admin->last_name = 'Kinkoph';
$admin->email_address = 'admin.email@blah.com';

$registered_user->first_name = 'Luke';
$registered_user->last_name = 'Skywalker';
$registered_user->email_address = 'regular@jedi.com';

echo "<br/>User Level: " .$admin->user_level. "<br/>User ID: " .$admin->user_id. "<br/>User Type: " .$admin->user_type. "<br/>First Name: " .$admin->first_name. "<br/>Last Name: " .$admin->last_name. "<br/>Email Address: " .$admin->email_address. "<br/><br/>";

echo "User Level: " .$registered_user->user_level. "<br/>User ID: " .$registered_user->user_id. "<br/>User Type: " .$registered_user->user_type. "<br/>First Name: " .$registered_user->first_name. "<br/>Last Name: " .$registered_user->last_name. "<br/>Email Address: " .$registered_user->email_address;

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
</head>
<body>


</body>
</html>
