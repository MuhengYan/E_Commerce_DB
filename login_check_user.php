<html>
<head>
  <title>User Login</title>
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
  require_once('include/user_login.php');

  $email = trim($_GET["u-name"]);
  $password = trim($_GET["pass"]);
  $uid = -1;

  $uid = check_login_user($email, $password);

  if ($uid > 0){
      echo "<center><h1>login successfully!</h1></center>";

      $_SESSION['uid']= $uid;

      echo "<center><a href=\"customer.php\">Customer Home Page</a></center>";
  }else {
      echo "<center><h1> Email and password do not match. Please try again.</h1></center>";
      echo "<center><a href=\"login_test.php\">Login Page</a></center>";
      
  }


?>

