<?
require_once('include/config.php');

function delete_inventory($product, $sID, $amount){
    if (!get_magic_quotes_gpc()) {
	$product = addslashes($product);
        $sID = addslashes($sID);
	$amount = addslashes($amount);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    $query0 = "SELECT Inventory from products WHERE pName = '".$product."' AND StockStoreID = ".$sID." ;";

    $result = $db->query($query0);

    $row = $result->fetch_assoc();
    $inventory = intval($row['Inventory']);
    if ($amount == 0 || ($inventory - $amount) < 0){
	$query = "DELETE FROM products WHERE pName = '".$product."' AND StockStoreID = ".$sID."; ";    
    } else {
        $query = "UPDATE products SET Inventory = Inventory - ".$amount." WHERE pName = '".$product."' AND StockStoreID = ".$sID."; ";
    }
    
    $result = $db->query($query);
    $db->close();
}


function delete_user($cID){
    if (!get_magic_quotes_gpc()) {
        $cID = addslashes($cID);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    $query = "DELETE FROM customers WHERE cID = ".$cID." ; ";


    $result = $db->query($query);
    $db->close();


}


function delete_store($sID){
    if (!get_magic_quotes_gpc()) {
        $sID = addslashes($sID);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    $query = "DELETE FROM store WHERE storeID = ".$sID." ; ";


    $result = $db->query($query);
    $db->close();

}


?>
