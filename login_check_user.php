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
<<<<<<< HEAD

require_once('user_login.php');
=======
session_start();
require_once('include/user_login.php');
>>>>>>> 1cd61bfd8a36e631923f134b91a8566f081efa93

$email = trim($_GET["u-email"]);
$password = trim($_GET["pass"]);

echo $email;
echo $password;


// $email = 'John@123.com';
// $password = '123';


$uid = -1;

// echo $uid;

$uid = check_login_user($email, $password);
echo $uid;

if ($uid > 0){
    echo "<center><h1>login successfully!</h1></center>";

    $_SESSION['uid']= $uid;
    echo "<center><a href=\"customer.php\">Manager Home Page</a></center>";

}else {
    echo "<center><h1> Email and password do not match. Please try again.</h1></center>";
    // echo "<center><a href=\"manager_login.php\">Manager Login Page</a></center>";

}


?>
