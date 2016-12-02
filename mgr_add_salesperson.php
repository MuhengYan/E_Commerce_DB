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

    $name = trim($_GET["s_name"]);  // get product name 

    $address = trim($_GET["s_add"]); 
    $email = trim($_GET["s_email"]); 
    $title = trim($_GET["s_title"]); 
    // $salary = trim($_GET["s_salary"]); 
    $store = trim($_GET["s_store"]);
    $salary = trim($_GET["s_salary"]); 
    // $salary = trim($_GET["pro_price"]); 
        // $mgrname = trim($_GET["   "]);     // get mgr name

    // echo "<center> <h1>Add successfully! </h1></center>";
    // echo "<center><a href=\"manager.php\">Manager Search Page</a></center>";
    
    // echo "sid:";
    // echo $sid;
    // echo "<br>";
    // echo "name:";
    // echo $name;
    // echo "<br>";
    // echo "address:";
    // echo $address;
    // echo "<br>";
    // echo "email: ";
    // echo $email;
    // echo "<br>";
    // echo "title:";
    // echo $title;
    // echo "<br>";
    // echo "salary:";
    // echo $salary;
    // echo "<br>";
    // echo "store:";
    // echo $store;
    // echo "<br>";

    // echo "<center> <h1>Add successfully! </h1></center>";
    // echo "<center><a href=\"manager.php\">Manager Search Page</a></center>";
    
    add_salesperson($store, $name, $address, $email, $title, $salary);
   // add_salesperson($storeID, $Name, $Address, $Email, $Title, $salary){

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


    // add_product($sid, $name, $kind, $inventory, $price);
    


    // search_product_manager($sid, $product);

    // echo <br>;
   
    

?>


