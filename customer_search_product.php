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

 	// session_start();

    require_once('include/customer_function.php');

    $product = trim($_GET["u-name"]);  // get product name 
    $category = trim($_GET["category"]);  // get product name 
    $inventory = trim($_GET["buy_inventory"]);  // get product name 
    $min = trim($_GET["p_from"]);  // get product name 
    $max = trim($_GET["p_to"]);  // get product name 
    $order = trim($_GET["order"]);  // get product name 

    search_product($product, $category, $min, $max, $inventory, $order);

    echo "<br>";
    echo "<center><a href=\"customer.php\">Customer Search Page</a></center>";

?>


