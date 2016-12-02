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

    $product = trim($_GET["p-name"]);  // get product name 
    // $mgrname = trim($_GET["   "]);     // get mgr name

    echo $product;
    echo $sid;

    search_product_manager($sid, $product);

    // echo <br>;
    echo "<center><a href=\"manager.php\">Manager Search Page</a></center>";
    // echo "aa";
    // echo $aa;

    // echo $password;


    // $email = 'John@123.com';
    // $password = '123';


//     $uid = -1;

//     // echo $uid;

//     $result = check_login_manager($mgrname, $productname);    // check function!!!

//     echo "<center><a href=\"manager.php\"> Home Page</a></center>";
// //////////////////////////////////////////////////////
	
// 	$productID = trim($_GET["u-name"]);  // get s
// 	// $mgrname = trim($_GET["   "]);     // gett mgr name


// 	$uid = -1;

// // echo $uid;

// 	$uid = search_product_manager($storeid, $name);    // check function , if return to store ID
// 	echo $uid;

// 	if ($uid > 0){
// 	    echo "<center><h1>login successfully!</h1></center>";
// 	    // echo $uid;

// 	    $_SESSION['uid']= $uid;
// 	     echo "sessionUID",$_SESSION['uid'];


// 	// check link to manager.php!!!
	     
// 	    echo "<center><a href=\"customer.php\"> Home Page</a></center>";
// 	}else {
// 	    echo "<center><h1> Store ID and Manager name do not match. Please try again.</h1></center>";
// 	    // echo "<center><a href=\"manager_login.php\">Manager Login Page</a></center>";
	    
// 	}

?>


