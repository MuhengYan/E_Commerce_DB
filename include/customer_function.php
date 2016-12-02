<?
require_once('include/config.php');

function search_product($searchTerm, $category, $minprice, $maxprice, $stock, $OrderBy){
    if (!get_magic_quotes_gpc()) {
        $searchTerm = addslashes($searchTerm);
        $minprice = addslashes($minprice);
	$maxprice = addslashes($maxprice);
	$stock = addslashes($stock);
	$OrderBy = addslashes($OrderBy);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    
    $query = "SELECT * FROM products, store WHERE StockStoreID = storeID AND Inventory >= ".$stock." AND pName LIKE '%".$searchTerm."%' AND Price > ".$minprice." AND Price <= ".$maxprice." ORDER BY '".$OrderBy."'";

    $result = $db->query($query);
    $num_results = $result->num_rows;
    if ($num_results==0) {
        echo "Your search \"".$searchTerm."\" did not match any products.";
    } else {
        echo "<p>Number of products found: ".$num_results."</p>";
	echo "<table class='tablesorter' border='0' cellpadding='0' cellspacing='1'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>ProductID #</th>";
	echo "<th>Category</th>";	
	echo "<th>Name</th>";
	echo "<th>Inventory</th>";
	echo "<th>Price</th>";
	echo "<th>Available Store</th>";
	echo "</tr>"; 
	echo "</thead>"; 
	echo "<tbody>";
	for ($i=0; $i<$num_results; $i++) {
		$row = $result->fetch_assoc();
		echo '<tr>';
		echo '<td>',$row['pID'],'</td>';
		echo '<td>',$row['Category'],'</td>';		
		echo '<td>',$row['pName'],'</td>';
		echo '<td>',$row['Inventory'],'</td>';
		echo '<td>',$row['Price'],'</td>';
		echo '<td>',$row['Address'],'</td>';
		echo '</tr>';
	}	
	echo "</tbody>";
	echo "</table>";
    }
    $result->free(); 
    $db->close();
}





function buy_product($pID, $amount, $cID){
    if (!get_magic_quotes_gpc()) {
        $pID = addslashes($pID);
        $amount = addslashes($amount);
	$cID = addslashes($cID);
    }
    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
   
    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }

    $query0 = "SELECT * FROM products WHERE Inventory >= ".$amount." AND pID = ".$pID.";";  
    $result0 = $db->query($query0);
    $row0 = $result0->fetch_assoc();
    $dealPrice = intval($row['Price']);
    $num_results = $result0->num_rows;
    $result0 -> free()

    if ($num_results==0) {
        echo "Your Item \"".$pID."\" is not available with your required amount \"".$amount."\".";
    } else {
	$query1 = "SELECT salespersonID FROM products, salespersons, store 
	WHERE pID = ".$pID." AND StockStoreID = storeID AND storeAssigned = storeID ORDER BY RAND() LIMIT 1;";
	$result1 = $db->query($query1); 
	$row = $result1->fetch_assoc();
	$salespersonID = intval($row['salespersonID']);
	$result1->free();

	$date = gmdate("Y-m-d", strtotime(gmdate("Y-m-d")));

	$query2 = "INSERT INTO transactions(Date,productID,customerID,salespersonID,Quantity,DealPrice) VALUES ('".$date."',".$pID.",".$cID.",".$salespersonID.",".$amount.", ".$dealPrice.");";
	$result2 = $db->query($query2);
	$result2->free();
 
	$query3 = "UPDATE products SET Inventory = Inventory - ".$amount." WHERE pID = ".$pID."; ";
	$result3 = $db->query($query3);
	$result3->free();
    }
    
    $db->close();
}

function search_history($tID, $days, $cID){
    if (!get_magic_quotes_gpc()) {
        $tID = addslashes($tID);
        $days = addslashes($days);
	$cID = addslashes($cID);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
   
    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }

    if ($days == 0){
	$query = "SELECT * FROM transactions, products WHERE pID = productID AND customerID = ".$cID." AND tID = ".$tID."; ";
    } else {
	$date = gmdate("Y-m-d", strtotime('-'".$days."' days'));
	$query = "SELECT * FROM transactions, products WHERE pID = productID AND customerID = ".$cID." AND tID = ".$tID." AND Date > '".$date."'; ";
    }
    
    $result = $db->query($query);
    $num_results = $result->num_rows;
    if ($num_results==0) {
        echo "Your search did not match any results.";
    } else {
        echo "<p>Number of transactions found: ".$num_results."</p>";
	echo "<table class='tablesorter' border='0' cellpadding='0' cellspacing='1'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>TransactionID #</th>";
	echo "<th>Product</th>";	
	echo "<th>Quantity</th>";
	echo "<th>SalespersonID</th>";
	echo "<th>Date</th>";
	echo "</tr>"; 
	echo "</thead>"; 
	echo "<tbody>";
	for ($i=0; $i<$num_results; $i++) {
		$row = $result->fetch_assoc();
		echo '<tr>';
		echo '<td>',$row['tID'],'</td>';
		echo '<td>',$row['pName'],'</td>';		
		echo '<td>',$row['Quantity'],'</td>';
		echo '<td>',$row['salespersonID'],'</td>';
		echo '<td>',$row['DealPrice'],'</td>';
		echo '</tr>';
	}	
	echo "</tbody>";
	echo "</table>";
    }
    
    $result->free(); 
    $db->close();


}

?>
