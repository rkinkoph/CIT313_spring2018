

  <?php

include("/home/rkinkoph/htdocs/CIT313/SP2018/ex1/_includes/header.inc.php");

  $array = array(
  	"name" => "Becca",
  	"color" => "violet",
  	"movie" => "Empire Strikes Back",
  	"book" => "Lullaby",
  	"website" => "twitter.com",
  );

  echo "<h1>" . $array['name'] . "</h1>";

  echo "<ul>";
  myFunction($array);
  echo "</ul>";

  function myFunction($array) {
  	foreach ($array as $key => $value) {
  		if($key != "name") {
  			echo "<li>" . $value . "</li>";
  		}
  	}
  }

include("/home/rkinkoph/htdocs/CIT313/SP2018/ex1/_includes/footer.inc.php");

 ?>
