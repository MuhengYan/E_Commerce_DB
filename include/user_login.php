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
     
     $query = "SELECT cID from customers
         WHERE cID = '".$email."' and password = '".$PIN."'";
     $result = $db->query($query);
     
     $row = $result->fetch_assoc();
     $cID = intval($row['cID']);
     $db->close();

     return $cID;    
}       
?>
