<!DOCTYPE html>
<html>
<body>

<?php
   	$cid = trim($_GET["u-name"]);
  	$pin = trim($_GET["pass"]);
 

  	echo "name: ";
	echo $name."<br>";
	echo "pw: ";
	echo $pin."<br>"; 

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
	echo "<p><font color=\"red\">Connected";

	// check if customer exist

	$sql = "select Name, from h_customer where Name='$name'";

	echo "<p><font color=\"red\">".$sql."</font></p>";



	// echo $_POST['u-name'];

// 定义变量并默认设置为空值
	// $name = $pin = "";

	// if ($_SERVER["REQUEST_METHOD"] == "POST")
	// {
  		// $name = trim($_GET["u-name"]);
  		// $pin = trim($_GET["pass"]);

		// $name = test_input($_GET["u-name"]);
  // 		$pin = test_input($_GET["pass"]);

	   	// echo 'lolalalla';
	   	// echo $name;
	   	// echo $pin;
	// }

	// function test_input($data)
	// {
	//    $data = trim($data);
	//    $data = stripslashes($data);
	//    $data = htmlspecialchars($data);
	//    return $data;
	// }

	// echo "<h2>您输入的内容是:</h2>";
	// $name = trim($_GET['u-name']);
 //    $pin = trim($_GET["pass"]);
	
	// echo 'lolalalla';
	// echo $name;
	// echo $pin; 

?>


<!-- 
<?php
	echo "<h2>input is:</h2>";
	// $name = trim($_GET['u-name']);
 //    $pin = trim($_GET["pass"]);
	
	echo 'lola';
	echo $name;
	echo $pin; 

?> 
 -->


</body>
</html>
