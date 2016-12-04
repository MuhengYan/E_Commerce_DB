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

    $transID = trim($_GET["transID"]);  // get product name 
    $date = trim($_GET["date"]);  // get product name 
   
    if($date=="ALL"){
       $date=0; 
    }else if($date=="In 7 days"){
        $date=7; 
    }else{
         $date=14; 
    }
    search_history($transID, $date, $uid);

    echo "<br>";
    echo "<center><a href=\"customer.php\">Customer Search Page</a></center>";

?>


