<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Customer browsing</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">


  </head>
  <body>


    <div class="container-fluid">

  	<div class="upper-row">
  		<div class="col-md-12">
        <h2 class="text-center">
  				Customer Dashboard
  			</h2><br>
        
        <?php
          session_start();

          // if(isset($_SESSION['uid'])){
          //   echo 123;
          // }

          // echo "hello";
          
          $uid = $_SESSION['uid'];
          // echo $uid;

          echo "<div style=\"text-align:center\"><p><h3>Welcome  user ". $_SESSION['uid']."!</h3></p></div>";

          // echo $_SESSION['uid'];
        ?>

  		</div>
  	</div>


	<div class="lower-row">
    <div class="col-md-4">
    </div>


    <div class="col-md-4">

      <form role="form" action="" method="post" onSubmit="return chkads()" id="lf_addstu" name="lf_addstu">
        <div class="form-group">
          <h3 class="text-center" style="color:grey;">
            Search or buy product
          </h3><br>
          <label for="InputUser">
            Product Name
          </label>
          <input type="" class="form-control" id="InputPname" name="u-name">

        </div>


        <div class="form-group">

          <label for="kind">Product kind</label>
          <select class="form-control" id="kind">
            <option id="k0">ALL</option> <option id="k1">1~10</option> <option id="k2">11~30</option> <option id="k3">31~50</option>
            <option id="k4">51~100</option> <option id="k5">101~200</option> <option id="k6">201~500</option> <option id="k7"> > 500</option>
            <option id="k8">51~100</option> <option id="k9">101~200</option> <option id="k10">201~500</option> <option id="k11"> > 500</option>
          </select>

        </div>


        <div class="form-group">

          <label for="inventory">Inventory</label>
          <select class="form-control" id="inventory">
            <option id="i0">ALL</option> <option id="i1">1~10</option> <option id="i2">11~30</option> <option id="i3">31~50</option>
            <option id="i4">51~100</option> <option id="i5">101~200</option> <option id="i6">201~500</option> <option id="i7"> > 500</option>
          </select>

        </div>


        <div class="form-group">

          <label for="price">Price ($)</label>
          <select class="form-control" id="price">
            <option id="p0">ALL</option> <option id="p1">1~50</option> <option id="p2">51~100</option> <option id="p3">101~500</option>
            <option id="p4">501~1000</option> <option id="p5">1001~2000</option> <option id="p6">2001~3000</option> <option id="p7"> > 3000</option>
          </select>

        </div>

      <br>

      <div class="row" onSubmit="return chkads()">
      <button type="submit" class="btn btn-success" style="margin-left:15px;">
        Search
      </button>

      <button type="submit" class="btn btn-info" style="margin-left:20px;">
        Buy
      </button><br><br><br>

      </div>



    </form>



    <form role="form" action="" method="post" onSubmit="return chkads()" id="lf_addstu" name="lf_addstu">

    <h3 class="text-center" style="color:grey;">
      Search transaction history
    </h3><br>

    <label for="transID">
      Transaction ID
    </label>
    <input type="" class="form-control" id="transID" name="transID">


    <div class="form-group">
      <label for="transdate">Date</label>
      <select class="form-control" id="transdate">
        <option id="t0">ALL</option> <option id="t1">In 7 days</option> <option id="t2">In 14 days</option>
      </select>
    </div>
    <br>

    <button type="submit" class="btn btn-success" style="margin-left:px;">
      Search
    </button>

    </form>

    </div>


    <div class="col-md-4">
      <a type="submit" class="btn btn-default" style="top:700px; left:50px; position:absolute;" role="button" href="main.html">
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
