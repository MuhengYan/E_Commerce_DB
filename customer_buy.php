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

    require_once('include/customer_function.php');

    $uid = $_SESSION['uid'];

    $product = trim($_GET["proID"]);  // get product name 
    $inventory = trim($_GET["buy_inventory"]);  // get product name 

    buy_product($product, $inventory, $uid);

    echo "<br>";
    echo "<center><a href=\"customer.php\">Customer Search Page</a></center>";

?>


