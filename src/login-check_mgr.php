html>
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


require_once('    ');

$storeid = trim($_GET["u-name"]);  // get store id 
$mgrname = trim($_GET["   "]);     // gett mgr name

echo $email;
echo $password;


// $email = 'John@123.com';
// $password = '123';


$uid = -1;

// echo $uid;

$uid = check_login_manager($storeid, $name);    // check function , if return to store ID
echo $uid;

if ($uid > 0){
    echo "<center><h1>login successfully!</h1></center>";
    // echo $uid;

    $_SESSION['uid']= $uid;
     echo "sessionUID",$_SESSION['uid'];

     
// check link to manager.php!!!
    echo "<center><a href=\"customer.php\"> Home Page</a></center>";
}else {
    echo "<center><h1> Store ID and Manager name do not match. Please try again.</h1></center>";
    // echo "<center><a href=\"manager_login.php\">Manager Login Page</a></center>";
    
}


?>

