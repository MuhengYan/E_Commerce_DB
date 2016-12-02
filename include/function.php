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
     
     $query = "SELECT cID FROM customers
         WHERE cID = '".$email."' AND PIN = '".$PIN."'";
     $result = $db->query($query);
     
     $row = $result->fetch_assoc();
     $cID = intval($row['cID']);
     $db->close();

     return $cID;    
}       

function check_login_manager($storeID, $name){
     // echo $name;
     if (!get_magic_quotes_gpc()) {
        $storeID = addslashes($storeID);
        $name = addslashes($name);
      }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

     if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
     }
     

     $query = "SELECT storeID FROM store
         WHERE storeID = ".$storeID." AND Manager = '".$name."' ";
     $result = $db->query($query);

     // echo $query;
     
     $row = $result->fetch_assoc();
     $storeID = intval($row['storeID']);
     $db->close();

     return $storeID;    
}      


function search_salesperson($storeID, $searchTerm){
    if (!get_magic_quotes_gpc()) {
        $storeID = addslashes($storeID);
        $searchTerm = addslashes($searchTerm);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    
    $query = "SELECT * FROM salespersons WHERE storeAssigned = ".$storeID." AND Name LIKE '%".$searchTerm."%' ";
    // echo $query;
    $result = $db->query($query);
    $num_results = $result->num_rows;
    if ($num_results==0) {
        echo "Your search \"".$searchTerm."\" did not match any person in your Store.";
    } else {
        echo "<p>Number of salespersons found: ".$num_results."</p>";
	echo "<table class='tablesorter' border='0' cellpadding='0' cellspacing='1'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>SalespersonID #</th>";
	echo "<th>Name</th>";
	echo "<th>Address</th>";
	echo "<th>Email</th>";
	echo "<th>Title</th>";
        echo "<th>Salary</th>";
	echo "</tr>"; 
	echo "</thead>"; 
	echo "<tbody>";
	for ($i=0; $i<$num_results; $i++) {
		$row = $result->fetch_assoc();
		echo '<tr>';
		echo '<td>',$row['salespersonID'],'</td>';
		echo '<td>',$row['Name'],'</td>';
		echo '<td>',$row['Address'],'</td>';
		echo '<td>',$row['Email'],'</td>';
		echo '<td>',$row['Title'],'</td>';
		echo '<td>',$row['salary'],'</td>';
		echo '</tr>';
	}	
	echo "</tbody>";
	echo "</table>";
    }
    
    $result->free(); 
    $db->close();
}

function search_product_manager($storeID, $searchTerm){
    

    if (!get_magic_quotes_gpc()) {
        $storeID = addslashes($storeID);
        $searchTerm = addslashes($searchTerm);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }

    
    $query = "SELECT * FROM products WHERE StockStoreID = ".$storeID." AND pName LIKE '%".$searchTerm."%' ";

    // echo $searchTerm;
    // echo $storeID;
    // echo $query;
    $result = $db->query($query);
    $num_results = $result->num_rows;
    if ($num_results==0) {
        echo "Your search \"".$searchTerm."\" did not match any products in your Store.";
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
		echo '</tr>';
	}	
	echo "</tbody>";
	echo "</table>";
    }
    
    $result->free(); 
    $db->close();
}

function add_product($storeID, $productName, $Category, $amount, $price){
    if (!get_magic_quotes_gpc()) {
        $storeID = addslashes($storeID);
        $productName = addslashes($productName);
	$Category = addslashes($Category);
	$amount = addslashes($amount);
	$price = addslashes($price);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }

    $query = "INSERT INTO products(pName,Category,Inventory,Price,StockStoreID) 
	VALUES ('".$productName."', '".$Category."', ".$amount.", ".$price.", ".$storeID.") 
		ON DUPLICATE KEY UPDATE Inventory=(Inventory + ".$amount."), Price = ".$price.", Category = '".$Category."'; ";
    $result = $db->query($query);
    $result->free(); 
    $db->close();
}

function update_price($storeID, $productName, $price){
    if (!get_magic_quotes_gpc()) {
        $storeID = addslashes($storeID);
        $productName = addslashes($productName);
	$price = addslashes($price);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }

    $query0 = "SELECT * FROM products WHERE StockStoreID = ".$storeID." AND pName = '".$productName."' ";
    
    $result0 = $db->query($query0);
    $num_results = $result0->num_rows;
    if ($num_results==0) {
	   echo "No such product found!";
    } else {
	   $query = "UPDATE products SET Price = ".$price." WHERE StockStoreID = ".$storeID." AND pName = '".$productName."'; ";
	   $result = $db->query($query);

    }    
    $result->free(); 
    $db->close();
}

function add_salesperson($storeID, $Name, $Address, $Email, $Title, $salary){
    if (!get_magic_quotes_gpc()) {
        $storeID = addslashes($storeID);
        $Name = addslashes($Name);
	$Address = addslashes($Address);
	$Email = addslashes($Email);
	$Title = addslashes($Title);
	$salary = addslashes($salary);
    }

    @ $db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    $query0 = "SELECT * FROM salespersons WHERE Email = '".$Email."' ";

    // echo "<br>";
    // echo $query0;

    $result0 = $db->query($query0);
    $num_results = $result0->num_rows;

    // echo $num_results;

    if ($num_results>0) {
	   echo "Email exists!";
           echo "<center><a href=\"manager.php\"> Manager Search Page</a></center>";
    } else {
	   $query1 = "INSERT INTO salespersons(Name,Address,Email,Title,storeAssigned,salary) 
			VALUES ('".$Name."','".$Address."','".$Email."','".$Title."',".$storeID.",".$salary.");";

	   $query2 = "UPDATE e_commerce.store SET n_salesperson = n_salesperson + 1 WHERE storeID = ".$storeID.";";
    
    // echo "<br>";
    // echo $query1; 
    // echo "<br>";
    // echo $query2; 

    	$result1 = $db->query($query1);
        $result2 = $db->query($query2);
        
        echo "<center> <h1>Add successfully! </h1></center>";
        echo "<center><a href=\"manager.php\"> Manager Search Page</a></center>";

    }    
    $result1->free(); 
    $result2->free(); 
    $db->close();
}



?>
