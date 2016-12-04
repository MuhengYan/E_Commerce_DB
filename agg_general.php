<html>
<head>
  <title>Manager Aggregation</title>
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


    require_once('include/aggregation.php');
    // require_once('include/customer_function.php');

    // $uid = $_SESSION['uid'];

    $category = trim($_GET["cus_kind"]);  // get product name 
    $date = trim($_GET["time"]);  // get product name 
    $top = trim($_GET["amount"]);  // get product name 
    $order = trim($_GET["order_by"]); 
    $aggregation = trim($_GET["agg_by"]); 



    // echo $product;
    echo '<br />';
    echo $category;  // get product name 
    echo '<br />';
    echo $date;  // get product name
    echo '<br />';
    echo $top;  // get product name 
    echo '<br />';
    echo $order;  // get product 
    echo '<br />';
    echo $aggregation;  // get product 

    echo "uid:";
    echo $uid;  

   
    if($date=="ALL"){
       $date=0; 
    }else if($date=="Last 7 days"){
        $date=7; 
    }else if($date=="Last 14 days"){
         $date=14; 
    }else if($date=="Last 30 days"){
         $date=30; 
    }


    if($top=="Top 5"){
       $top = 5; 
    }else if($top=="Top 10"){
        $top = 10; 
    }else{
        $top = 0; 
    }

  echo "<center><a href=\"manager_agg.php\">Manager Aggregation</a></center>";
    echo "<br>";
    // echo $sid;
    // aggregation_general($cCategory, $time, $top, $order, $group);
    aggregation_general($$category, $date, $top, $order, $aggregation);

    // search_product_manager($sid, $product);   // check function !
    // buy_product($product, $inventory, $uid);

    // echo <br>;
    // echo "<center><a href=\"manager_agg.php\">Manager Aggregation</a></center>";

?>


