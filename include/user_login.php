<?
require_once('include/config.php');

function check_login_user($email, $PIN){
      
    
    if (!get_magic_quotes_gpc()) {
        $email = addslashes($email);
        $PIN = addslashes($PIN);
      }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

     if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
     }
     // echo " here!";
     // $a = 1
     // $query = "SELECT cID from customers
     //     WHERE cID = '".$a."' and PIN = ".$a." ";

  
     $query = "SELECT cID from customers
         WHERE email = '".$email."' and PIN = '".$PIN."'";


     $result = $db->query($query);

     echo $query;
     // echo $result;

     $row = $result->fetch_assoc();
     $cID = intval($row['cID']);
     $db->close();

     return $cID;    
}       
?>
