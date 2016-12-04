<html>
<head>
  <title>Manager Search</title>
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

    $sperson = trim($_GET["s-name"]);  // get product name 
 
    search_salesperson($sid, $sperson);
    
    echo "<br>";
    echo "<br>";
    echo "<center><a href=\"manager.php\">Manager Search Page</a></center>";
?>


