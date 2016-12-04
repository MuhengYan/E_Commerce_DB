<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manager browsing</title>

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
  				Manager Dashboard
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

        <form role="form" action="mgr_search_product.php" method="get" onSubmit="return check()" id="lf_addstu2" name="lf_addstu2">
          <h3 class="text-center" style="color:grey;">
    				Search products
    			</h3><br>
					<label for="InputPname">
						Product name
					</label>
					<input type="" class="form-control" id="InputPname" name="p-name">
          <br>
          <button type="submit" class="btn btn-success">
            Search
          </button>
        </form>

        <br><br>


        <form role="form" action="mgr_add_product.php" method="get" onSubmit="return check()" id="lf_addstu2" name="lf_addstu2">
          <h3 class="text-center" style="color:grey;">
    				Add products
    			</h3><br>

          <label for="InputPname">
						Product name
					</label>
					<input type="" class="form-control" id="InputPname" name="pname">

          <label for="pro_kind">Product category</label>
          <select class="form-control" id="pro_kind" name="kind">
            <option id="k1">Electric</option> <option id="k2">Toy</option> <option id="k3">Book</option>
            <option id="k4">Cosmetics</option> <option id="k5">Food</option> <option id="k6">Clothes</option>
          </select>

          <label for="InputInv">
						Inventory
					</label>
          <input type="number" value="1" min="1" max="" class="form-control" id="InputInv" name="in_name" placeholder="">

          <label for="pro_pricee">
						Price
					</label>
          <input type="number" value="0" min="0" max="" class="form-control" id="pro_price" name="pro_price" placeholder="">

          <br>
          <button type="submit" class="btn btn-success" onSubmit="return check()">
            + Add
          </button>
        </form>


      <br><br>


      <form role="form" action="mgr_update_product.php" method="get" onSubmit="return check()" id="lf_addstu2" name="lf_addstu2">

      <h3 class="text-center" style="color:grey;">
        Update products
      </h3><br>

      <label for="InputPname">
        Product name
      </label>
      <input type="" class="form-control" id="InputPname" name="p-name">

      <label for="pro_price">
        Price
      </label>
      <input type="number" value="0" min="0" max="" class="form-control" id="pro_price" name="pro_price" placeholder="">

      <br>
      <button type="submit" class="btn btn-success">
        Update
      </button>
    </form>
    <br><br>
      <!-- <div class="row" style="left:33px; top:500px; position:absolute;" onSubmit="return chkads()">
      <button type="submit" class="btn btn-success">
        Search
      </button>

      </div> -->

		</div>




		<div class="col-md-6" style="padding-left:100px; padding-right:100px;" onSubmit="return check()">


      <form role="form" action="mgr_search_salesperson.php" method="get" onSubmit="return check()" id="lf_addstu2" name="lf_addstu2">
          <h3 class="text-center" style="color:grey;">
    				Search salesperson
    			</h3><br>
					<label for="InputSname">
						Salesperson name
					</label>
					<input type="" class="form-control" id="InputSname" name="s-name">
          <br>
          <button type="submit" class="btn btn-success">
            Search
          </button>
        </form>

        <br><br>

        <form role="form" action="mgr_add_salesperson.php" method="get" onSubmit="return check()" id="lf_addstu2" name="lf_addstu2">
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
        </form>

      <br><br>


      <a type="submit" class="btn btn-success" style="top:700px; left:100px; position:absolute;" role="button" href="manager_agg.php">
        Aggregation page
      </a>
      
      <a type="submit" class="btn btn-default" style="top:750px; left:100px; position:absolute;" role="button" href="log_out.php">
        Log out
      </a>
      <a type="submit" class="btn btn-default" style="top:800px; left:100px; position:absolute;" role="button" href="main.php">
        Back to home
      </a>

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
