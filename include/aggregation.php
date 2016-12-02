<?
require_once('include/config.php');

function aggregation_general($cCategory, $time, $top, $order, $group){
    //group values: products.pName, products.Category, transactions.customerID, store.Address, region.rName
    //order values: quantity, profit
    if (!get_magic_quotes_gpc()) {
	$email = addslashes($email);
        $PIN = addslashes($PIN);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    

    if ($cCategory == "home"){
	$andClause = "AND customers.hcID > 0";
	if($time == 0){
	    switch($group){
		case 'products.pName':
		$selectClause = "SELECT products.pName as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID ";
		break;

		case 'products.Category':
		$selectClause = "SELECT products.Category as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID ";
		break;

		case 'transactions.customerID':
		$selectClause = "SELECT transactions.customerID as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID ";
		break;
		
		case 'store.Address':
		$selectClause = "SELECT store.Address as tar, ";
		$fromClause = "FROM transactions, products, customers, store
		    	WHERE products.pID = transactions.productID
			AND products.StockStoreID = store.storeID ";
		break;
		
		case 'region.rName':
		$selectClause = "SELECT transactions.customerID as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID
			AND products.StockStoreID = store.storeID 
			AND store.regionLocated = region.rID";
		break;
	    }
	} else {
	    $date = gmdate("Y-m-d", strtotime('-'".$time."' days'));
	    switch($group){
		case 'products.pName':
		$selectClause = "SELECT products.pName as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID 
			AND Date > '".$date."'";
		break;

		case 'products.Category':
		$selectClause = "SELECT products.Category as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID 
			AND Date > '".$date."'";
		break;

		case 'transactions.customerID':
		$selectClause = "SELECT transactions.customerID as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID 
			AND Date > '".$date."'";
		break;
		
		case 'store.Address':
		$selectClause = "SELECT store.Address as tar, ";
		$fromClause = "FROM transactions, products, customers, store
		    	WHERE products.pID = transactions.productID
			AND products.StockStoreID = store.storeID 
			AND Date > '".$date."'";
		break;
		
		case 'region.rName':
		$selectClause = "SELECT transactions.customerID as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID
			AND products.StockStoreID = store.storeID 
			AND store.regionLocated = region.rID
			AND Date > '".$date."'";
		break;
	    }
	}
    } else {
	$andClause = "AND customers.bcID > 0";
	if($time == 0){
	    switch($group){
		case 'products.pName':
		$selectClause = "SELECT products.pName as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID ";
		break;

		case 'products.Category':
		$selectClause = "SELECT products.Category as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID ";
		break;

		case 'transactions.customerID':
		$selectClause = "SELECT transactions.customerID as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID ";
		break;
		
		case 'store.Address':
		$selectClause = "SELECT store.Address as tar, ";
		$fromClause = "FROM transactions, products, customers, store
		    	WHERE products.pID = transactions.productID
			AND products.StockStoreID = store.storeID ";
		break;
		
		case 'region.rName':
		$selectClause = "SELECT transactions.customerID as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID
			AND products.StockStoreID = store.storeID 
			AND store.regionLocated = region.rID";
		break;
	    }
	} else {
	    $date = gmdate("Y-m-d", strtotime('-'".$time."' days'));
	    switch($group){
		case 'products.pName':
		$selectClause = "SELECT products.pName as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID 
			AND Date > '".$date."'";
		break;

		case 'products.Category':
		$selectClause = "SELECT products.Category as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID 
			AND Date > '".$date."'";
		break;

		case 'transactions.customerID':
		$selectClause = "SELECT transactions.customerID as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID 
			AND Date > '".$date."'";
		break;
		
		case 'store.Address':
		$selectClause = "SELECT store.Address as tar, ";
		$fromClause = "FROM transactions, products, customers, store
		    	WHERE products.pID = transactions.productID
			AND products.StockStoreID = store.storeID 
			AND Date > '".$date."'";
		break;
		
		case 'region.rName':
		$selectClause = "SELECT transactions.customerID as tar, ";
		$fromClause = "FROM transactions, products, customers
		    	WHERE products.pID = transactions.productID
			AND products.StockStoreID = store.storeID 
			AND store.regionLocated = region.rID
			AND Date > '".$date."'";
		break;
	    }
	}
    }

    $query = "'".$selectClause."' 
    sum(transactions.Quantity) as quantity,
    sum(transactions.Quantity * transactions.DealPrice) as profit
    '".$fromoClause."'
    AND customers.cID = transactions.customerID
    '".$andClause."'
    GROUP BY '".$group."'
    ORDER BY '".$order."';";

    $result = $db->query($query);
    $num_results = $result->num_rows;
    if ($num_results==0) {
        echo "Your search did not match any results.";
    } else {
        echo "<p>Number of results found: ".$num_results."</p>";
	echo "<table class='tablesorter' border='0' cellpadding='0' cellspacing='1'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Aggregation Field Value #</th>";
	echo "<th>Quantity</th>";	
	echo "<th>Profit</th>";
	echo "</tr>"; 
	echo "</thead>"; 
	echo "<tbody>";
	for ($i=0; $i<$num_results; $i++) {
		$row = $result->fetch_assoc();
		echo '<tr>';
		echo '<td>',$row['tar'],'</td>';
		echo '<td>',$row['quantity'],'</td>';		
		echo '<td>',$row['profit'],'</td>';
		echo '</tr>';
	}	
	echo "</tbody>";
	echo "</table>";
    }
    
    $result->free(); 
    $db->close();
}       

?>
