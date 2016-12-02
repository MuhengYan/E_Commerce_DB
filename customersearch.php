<!DOCTYPE html>
<html>
<body>

<?php

    // get data from sign_up page

	$name = trim($_GET['u-name']);
    $pin = trim($_GET["pass"]);
	$street =trim($_GET["street"]); 
	$city = trim($_GET["city"]); 
	$state = trim($_GET["state"]); 
	$zip = trim($_GET["zip"]); 

	echo "name:";
	echo $name."<br>";
	echo $pin."<br>"; 
	echo $street."<br>";
	echo $city."<br>";
	echo $state."<br>";
	echo $zip."<br>";

/* schedule
*/
	// if home customer
	$marriage = trim($_GET["   "]); 
	$gender = trim($_GET["   "]); 
	$age = trim($_GET["   "]); 
	$hincome = trim($_GET["   "]); 

	// if business customer
	$category = trim($_GET["   "]); 
	$gross= trim($_GET["   "]); 

   // send to database

	$servername = "localhost";
	$username = "lola";
	$password = "123";
	$dbname = "e_commerce";

	// create connect
	$conn = new mysqli($servername, $username, $password, $dbname);

	// check connect
	if ($conn->connect_error) {
	    die("fail: " . $conn->connect_error);
	}
	echo "<p><font color=\"red\">Connected successfully</font></p>"; 

    // 1. insert data : if home
	$sql = "INSERT INTO e_commerce.b_customers(`Name`, `Street`, `City`, `State`, `Zip`, `M_status`, `Gender`, `Age`, `Income`) 
	VALUES ('$name','$street','$city','$state','$zip','$marriage','$gender','$age','$hincome')";

	// search hcID
	// $sql. = "select MAX(ID) from h_customer"; 
	// echo "<p><font color=\"red\">".$sql."</font></p>";
	// $result = $conn->query($sql);

	$hcid = gethcid();        // 未写

    // insert customer
	$sql. = "INSERT INTO e_commerce.customers(`PIN`, `hcID`) 
	VALUES ('$pin','$hcid')";


	// 2. insert data : if business
	$sql = "INSERT INTO e_commerce.b_customers(`Name`, `Street`, `City`, `State`, `Zip`, `Category`, `Gross`) 
	VALUES ('$name','$street','$city','$state','$zip','$category','$gross')";

	// search bcID
	$bcid = gethbid();        // 未写

    // insert customer
	$sql. = "INSERT INTO e_commerce.customers(`PIN`, `bcID`) 
	VALUES ('$pin','$bcid')";


	if ($conn->query($sql) === TRUE) {
	    echo "insert data successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}



    // insert data: if business


	$sql = "INSERT INTO e_commerce.region(rName, rManager)
	values('NYC', 'Lola')";


	if ($conn->query($sql) === TRUE) {
	    echo "insert data successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?> 



</body>
</html>
