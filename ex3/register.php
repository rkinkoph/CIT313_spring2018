<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<?php


?>

<form action="results.php" name="registerForm" id="registerForm" method="post">

  <table width="500" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td width="169">First Name:</td>
      <td width="321"><label for="fname"></label>
        <input type="text" name="fname" id="fname" required /></td>
    </tr>
    <tr>
      <td>Last Name:</td>
      <td><input type="text" name="lname" id="lname" required /></td>
    </tr>
    <tr>
      <td>Email Address:</td>
      <td><input type="text" name="email" id="email" required /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" id="submit" value="Register" /></td>
    </tr>
  </table>
</form>


</body>
</html>
