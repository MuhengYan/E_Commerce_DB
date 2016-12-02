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

    $name = trim($_GET["pname"]);  // get product name 

    $kind = trim($_GET["kind"]); 
    $inventory = trim($_GET["in_name"]); 
    $price = trim($_GET["pro_price"]); 
    // $mgrname = trim($_GET["   "]);     // get mgr name

    echo "<center> <h1>Add successfully! </h1></center>";
    echo "<center><a href=\"manager.php\">Manager Search Page</a></center>";
    
    echo "sid:";
    echo $sid;
    echo "name:";
    echo $name;
    echo "kind:";
    echo $kind;
    echo "inventory: ";
    echo $inventory;
    echo "price:";
    echo $price;

    // search_product_manager($sid, $product);

    // $name = "toy";  // get product name 

    // $kind = "electric"; 
    // $inventory = 100; 
    // $price = 123; 


    // echo "sid:";
    // echo $sid;
    // echo "name:";
    // echo $name;
    // echo "kind:";
    // echo $kind;
    // echo "inventory: ";
    // echo $inventory;
    // echo "price:";
    // echo $price;


    add_product($sid, $name, $kind, $inventory, $price);
    


    // search_product_manager($sid, $product);

    // echo <br>;
   
    

?>


