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


    require_once('include/delete.php');

 	// $uid = $_SESSION['uid'];    

    $customer = trim($_GET["delCus"]);  // get product name 
   // get product name 
    // $min = trim($_GET["p_from"]);  // get product name 
    // $max = trim($_GET["p_to"]);  // get product name 
    // $order = trim($_GET["order"]);  // get product name 


    // echo $product;
    // echo '<br />';
    // echo $customer;  // get product name 
    // echo '<br />';
    // echo $storeid;  // get product name 
    // echo '<br />';
    // echo "uid:";
    // echo $uid;  
    // echo '<br />';
    // echo $inventory;  // get product name
    // echo '<br />'; 
    // echo $min;  // get product name 
    // echo '<br />';
    // echo $max;  // get product name 
    // echo '<br />';
    // echo $order;  // get


    // echo $sid;

    // search_product_manager($sid, $product);   // check function !
    delete_user($customer);

    echo "<br>";
    echo "<center><h1>Delete successfully!</h1></center>";
    echo "<center><a href=\"admin.php\">Admin Dashboard</a></center>";

?>


