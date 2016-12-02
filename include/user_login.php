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
         WHERE email = '".$email."' and PIN = '".$PIN."'";


     $result = $db->query($query);

     $row = $result->fetch_assoc();
     $cID = intval($row['cID']);
     $db->close();

     return $cID;    
}       


function huser_sign_up($name, $pin, $street, $city, $state, $zip, $ms, $gender, $age, $income){
    if (!get_magic_quotes_gpc()) {
        $name = addslashes($name);
        $pin = addslashes($pin);
	$street = addslashes($street);
	$city = addslashes($city);
	$state = addslashes($state);
	$zip = addslashes($zip);
	$ms = addslashes($ms);
	$gender = addslashes($gender);
	$age = addslashes($age);
	$income = addslashes($income);
      }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

     if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
     }

    $query0 = "INSERT INTO h_customers(Name, Street, City, State, Zip, M_status, Gender, Age, Income) VALUES('".$name."','".$street."','".$city."', '".$state."', '".$zip."', '".$ms."', '".$gender."', ".$age.", ".$income.") ";
    $result0 = $db->query($query0);
    
    $query1 = "SELECT ID FROM h_customers ORDER BY ID DESC LIMIT 1;";
    $result1 = $db->query($query1);
    $row = $result1->fetch_assoc();
    $ID = intval($row['ID']);

    $query2 = "INSERT INTO customers(PIN, hcID) VALUES('".$pin."', ".$ID."); ";
    $result2 = $db->query($query2);

    $db->close();
}


function buser_sign_up($name, $pin, $street, $city, $state, $zip, $bc, $gross){
    if (!get_magic_quotes_gpc()) {
        $name = addslashes($name);
        $pin = addslashes($pin);
	$street = addslashes($street);
	$city = addslashes($city);
	$state = addslashes($state);
	$zip = addslashes($zip);
	$bc = addslashes($bc);
	$gross = addslashes($gross);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

     if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
     }

    $query0 = "INSERT INTO b_customers(Name, Street, City, State, Zip, Category, Gross) VALUES('".$name."','".$street."','".$city."', '".$state."', '".$zip."', '".$bc."', ".$gross.") ";
    $result0 = $db->query($query0);
    
    $query1 = "SELECT ID FROM b_customers ORDER BY ID DESC LIMIT 1;";
    $result1 = $db->query($query1);
    $row = $result1->fetch_assoc();
    $ID = intval($row['ID']);

    $query2 = "INSERT INTO customers(PIN, bcID) VALUES('".$pin."', ".$ID."); ";
    $result2 = $db->query($query2);

    $db->close();
}
?>
