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


    // require_once('include/function.php');

    $uid = $_SESSION['uid'];

    $product = trim($_GET["proID"]);  // get product name 
    $inventory = trim($_GET["buy_inventory"]);  // get product name 



    // echo $product;
    echo '<br />';
    echo $product;  // get product name 
    echo '<br />';
    echo $inventory;  // get product name
    echo '<br />';
    echo "uid:";
    echo $uid;  
    // echo '<br />'; 
    // echo $min;  // get product name 
    // echo '<br />';
    // echo $max;  // get product name 
    // echo '<br />';
    // echo $order;  // get


    // echo $sid;

    // search_product_manager($sid, $product);   // check function !

    // echo <br>;
    echo "<center><a href=\"customer.php\">Customer Search Page</a></center>";

?>


