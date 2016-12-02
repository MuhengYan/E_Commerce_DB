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

          // if(isset($_SESSION['uid'])){
          //   echo 123;
          // }

          // echo "hello";

          $uid = $_SESSION['sid'];
          // echo $uid;



          echo "<div style=\"text-align:center\"><p><h3>Welcome Manager to Store ". $_SESSION['sid']."!</h3></p></div>";

          // echo $_SESSION['uid'];
        ?>

		  </div>
    </div>


    <div class="row">



		<div class="col-md-6" style="padding-left:100px; padding-right:100px;" onSubmit="return check()">

      <!-- <h4 class="text-center" style="color:grey;">
				Please select one or more options below.
			</h4><br> -->

        <form role="form" action="mgr_search_product.php" method="get" onSubmit="return check()" id="lf_addstu2" name="lf_addstu2">
          <h3 class="text-center" style="color:grey;">
    				General aggregation
    			</h3><br>

          <label for="cus_kind">Customer category</label>
          <select class="form-control" id="cus_kind" name="cus_kind">
            <option id="k1">ALL</option> <option id="k2">Home</option> <option id="k3">Business</option>
          </select>

          <label for="time">Time range</label>
          <select class="form-control" id="time" name="time">
            <option id="k1">ALL</option> <option id="k2">Last 7 days</option> <option id="k3">Last 14 Days</option>
            <option id="k4">Last 30 days</option>
          </select>

          <label for="amount">Amount</label>
          <select class="form-control" id="amount" name="amount">
            <option id="k1">ALL</option> <option id="k2">Top 5</option> <option id="k3">Top 10</option>
          </select>

          <label for="order_by">Order by</label>
          <select class="form-control" id="order_by" name="order_by">
            <option id="k1">Total</option> <option id="k2">Profit</option> <option id="k3">Quantity</option>
          </select>

          <label for="agg_by">Aggregation by</label>
          <select class="form-control" id="agg_by" name="agg_by">
            <option id="k1">Category</option> <option id="k2">Customer</option> <option id="k3">Store</option>
            <option id="k4">Region</option> <option id="k5">Product</option>
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


      <form role="form" action="mgr_search_salesperson.php" method="get" onSubmit="return check()" id="lf_addstu2" name="lf_addstu2">
          <h3 class="text-center" style="color:grey;">
    				Aggregate customer by product
    			</h3><br>
          <label for="InputPname">
						Product name
					</label>
					<input type="" class="form-control" id="InputPname" name="pro_name">

          <label for="cus_kind">Customer category</label>
          <select class="form-control" id="cus_kind" name="cus_kind">
            <option id="k1">ALL</option> <option id="k2">Home</option> <option id="k3">Business</option>
          </select>

          <label for="time">Time range</label>
          <select class="form-control" id="time" name="time">
            <option id="k1">ALL</option> <option id="k2">Last 7 days</option> <option id="k3">Last 14 Days</option>
            <option id="k4">Last 30 days</option>
          </select>

          <label for="order_by">Order by</label>
          <select class="form-control" id="order_by" name="order_by">
            <option id="k1">Total</option> <option id="k2">Profit</option> <option id="k3">Quantity</option>
          </select>

          <br>
          <button type="submit" class="btn btn-success">
            Search
          </button>
        </form>

        <br><br>

        <!-- <form role="form" action="mgr_add_salesperson.php" method="get" onSubmit="return check()" id="lf_addstu2" name="lf_addstu2">
          <h3 class="text-center" style="color:grey;">
    				Add salesperson
    			</h3><br>
					<label for="InputSname">
						Name
					</label>
					<input type="" class="form-control" id="InputSname" name="s_name">

          <label for="InputAdd">
						Address
					</label>
					<input type="address" class="form-control" id="InputAdd" name="s_add">

          <label for="InputPrice">
						E-mail
					</label>
					<input type="email" class="form-control" id="InputPrice" name="s_email">

          <label for="title">Title</label>
          <select class="form-control" id="title" name="s_title">
            <option id="k0">Salesman</option> <option id="k1">Cashier</option> <option id="k2">Maintainance</option> <option id="k3">Cleaner</option>
          </select>

          <label for="store">Store assigned</label>
          <select class="form-control" id="store" name="s_store">
            <option id="k0">1</option> <option id="k1">2</option> <option id="k2">3</option> <option id="k3">4</option>
            <option id="k4">5</option> <option id="k5">6</option> <option id="k6">7</option> <option id="k7">8</option>
            <option id="k8">9</option> <option id="k9">10</option> <option id="k10">11</option> <option id="k11">12</option>
          </select>

          <label for="InputS_Price">
						Salary
					</label>
          <input type="number" value="0" min="0" max="" class="form-control" id="InputS_Price" name="s_salary" placeholder="">

          <br>
          <button type="submit" class="btn btn-success">
            + Add
          </button>
        </form> -->

      <br><br>


      <a type="submit" class="btn btn-default" style="top:500px; left:100px; position:absolute;" role="button" href="main.php">
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
