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
  // require_once('include/function.php');
  require_once('include/user_login.php');

  $name = trim($_GET['u-name']);
  $pin = trim($_GET["pass"]);
  $street =trim($_GET["street"]); 
  $city = trim($_GET["city"]); 
  $state = trim($_GET["state"]); 
  $zip = trim($_GET["zip"]); 

  /* schedule
*/
  // if home customer
  $marriage = trim($_GET["marriage"]); 
  $gender = trim($_GET["gender"]); 
  $age = trim($_GET["age"]); 
  $hincome = trim($_GET["home_in"]);

  // // if business customer
  $category = trim($_GET["biz-cat"]); 
  $gross= trim($_GET["biz_in"]); 

   if($category=="NA" and $gross== ""){
      huser_sign_up($name, $pin, $street, $city, $state, $zip, $marriage , $gender, $age, $hincome);
   }else{
      buser_sign_up($name, $pin, $street, $city, $state, $zip, $category, $gross);
   }

   echo "<center><h1>Sign Up Successfully!</h1></center>";
   echo "<center><a href=\"login_test.php\">Login Page</a></center>";
      
?>

