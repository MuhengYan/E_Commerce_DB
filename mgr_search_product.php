<html>
<head>
  <title>Manager Login</title>
          	<style type="text/css">
	body 
	{ 
		padding-top:10px; 
		padding-left:40px; 
		padding-right:40px;
	}
	</style>
</head>
</html>

<?php

 	session_start();


    require_once('include/function.php');

 	$sid = $_SESSION['sid'];

    $product = trim($_GET["p-name"]);  // get product name 

    search_product_manager($sid, $product);

    echo "<br>";
    echo "<br>";
    echo "<center><a href=\"manager.php\">Manager Search Page</a></center>";

?>


