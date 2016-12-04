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

    $name = trim($_GET["s_name"]);  

    $address = trim($_GET["s_add"]); 
    $email = trim($_GET["s_email"]); 
    $title = trim($_GET["s_title"]); 
    $store = trim($_GET["s_store"]);
    $salary = trim($_GET["s_salary"]); 
    
    add_salesperson($store, $name, $address, $email, $title, $salary);
?>


