<!DOCTYPE html>
<html>
<head>
  <title>My First Model View Controller</title>
</head>
  <body>
    <h1>Hello From My View!</h1>
      <?php

      echo "<ul>";
      echo "<li>User ID: " .$user->userID."</li>";
      echo "<li>First Name: ".$user->firstname."</li>";
      echo "<li>Last Name: " .$user->lastname."</li>";
      echo "<li>Email Address: " .$user->email."</li>";
      echo "<li>Role: ".$user->role."</li>";
      echo "</ul>";


      ?>

  </body>
</html>
