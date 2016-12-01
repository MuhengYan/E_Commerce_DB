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

require_once('include/functions_manager.php');

$email = trim($_GET["u-name"]);
$password = trim($_GET["pass"]);


$uid = -1;
$uid = check_login_manager($email, $password);

if ($uid > 0){
    echo "<center><h1>login successfully!</h1></center>";
    // echo "<center><a href=\"manager_view.html\">Manager Home Page</a></center>";
}else {
    echo "<center><h1> Email and password do not match. Please try again.</h1></center>";
    // echo "<center><a href=\"manager_login.php\">Manager Login Page</a></center>";
    
}


?>

