<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manager aggregation browsing</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">


  </head>
  <body>

    <div class="container-fluid">

    <div class="row">
		  <div class="col-md-12">
        <h2 class="text-center">
  				Manager Aggregation
  			</h2>

           <?php
          session_start();

          $uid = $_SESSION['sid'];

          echo "<div style=\"text-align:center\"><p><h3>Welcome Manager to Store ". $_SESSION['sid']."!</h3></p></div>";

        ?>

		  </div>
    </div>


    <div class="row">



		<div class="col-md-6" style="padding-left:100px; padding-right:100px;" onSubmit="return check()">

      <!-- <h4 class="text-center" style="color:grey;">
				Please select one or more options below.
			</h4><br> -->

        <form role="form" action="agg_general.php" method="get" onSubmit="return check()" id="lf_addstu2" name="lf_addstu2">
          <h3 class="text-center" style="color:grey;">
    				General aggregation
    			</h3><br>

          <label for="cus_kind">Customer category</label>
          <select class="form-control" id="cus_kind" name="cus_kind">
            <option id="k1">ALL</option> <option id="k2">home</option> <option id="k3">business</option>
          </select>

          <label for="time">Time range</label>
          <select class="form-control" id="time" name="time">
            <option id="k1">ALL</option> <option id="k2">Last 7 days</option> <option id="k3">Last 14 Days</option>
            <option id="k4">Last 30 days</option>
          </select>

          <label for="amount">Top</label>
          <select class="form-control" id="amount" name="amount">
            <option id="k1">ALL</option> <option id="k2">Top 5</option> <option id="k3">Top 10</option>
          </select>

          <label for="order_by">Order by</label>
          <select class="form-control" id="order_by" name="order_by">
            <option id="k2">profit</option> <option id="k3">quantity</option>
          </select>

          <label for="agg_by">Aggregation by</label>
          <select class="form-control" id="agg_by" name="agg_by">
            <option id="k1">products.pName</option> <option id="k2">products.Category</option> <option id="k3">transactions.customerID</option>
            <option id="k4">store.Address</option> <option id="k5">region.rName</option>
          </select>


          <!-- <label for="pro_kind">Product category</label>
          <select class="form-control" id="pro_kind" name="pro_kind">
            <option id="k1">Electric</option> <option id="k2">Toy</option> <option id="k3">Book</option>
            <option id="k4">Cosmetics</option> <option id="k5">Food</option> <option id="k6">Clothes</option>
          </select> -->

          <br>
          <button type="submit" class="btn btn-success">
            Search
          </button>
        </form>

        <br><br>



      <br><br>


		</div>


		<div class="col-md-6" style="padding-left:100px; padding-right:100px;" onSubmit="return check()">
      <a type="submit" class="btn btn-default" style="top:0px; left:100px; position:absolute;" role="button" href="log_out.php">
        Log out
      </a>

      <a type="submit" class="btn btn-default" style="top:50px; left:100px; position:absolute;" role="button" href="main.php">
        Back to home
      </a><br><br>

		</div>


    </div>


</div>




  <!-- <script type="text/javascript" src="yourPath/jquery-1.10.2.min.js"></script> -->
  <!-- <script type="text/javascript" src="js/bootstrap-select.js"></script> -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>


  </body>
</html>
