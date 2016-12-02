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

// echo $email;
// echo $password;


// $email = 'John@123.com';
// $password = '123';


$uid = -1;

// echo $uid;

$uid = check_login_user($email, $password);
// echo $uid;

// $a = 1
// $query = "SELECT cID from customers
//          WHERE cID = '".$a."' and PIN = ".$a." ";

// echo $query;
if ($uid > 0){
    echo "<center><h1>login successfully!</h1></center>";
    // echo $uid;

    $_SESSION['uid']= $uid;
     echo "sessionUID",$_SESSION['uid'];

    echo "<center><a href=\"customer.php\">Customer Home Page</a></center>";
}else {
    echo "<center><h1> Email and password do not match. Please try again.</h1></center>";
    echo "<center><a href=\"login_test.php\">Login Page</a></center>";
    
}


?>

