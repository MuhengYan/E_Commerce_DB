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

  $storeid = trim($_GET["store-ID"]);  // get store id 
  $mgrname = trim($_GET["manager-name"]);     // gett mgr name

  // echo $storeid;
  // echo $mgrname;


// $email = 'John@123.com';
// $password = '123';


$sid = -1;

// echo $uid;

//echo $storeid;
//echo $mgrname;

$sid = check_login_manager($storeid, $mgrname);    // check function , if return to store ID
// echo " \n sid:";
// echo $sid;

if ($sid > 0){
    echo "<center><h1>login successfully!</h1></center>";
    // echo $uid;

    $_SESSION['sid']= $sid;
     echo "sessionSID",$_SESSION['sid'];


// check link to manager.php!!!
    echo "<center><a href=\"manager.php\"> Manager Page</a></center>";
}else {
    echo "<center><h1> Store ID and Manager name do not match. Please try again.</h1></center>";
    echo "<center><a href=\"main.php\">Main Page</a></center>";
    
}


?>

