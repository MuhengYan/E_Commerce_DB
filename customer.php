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
          $uid = $_SESSION['uid'];

          echo "<div style=\"text-align:center\"><p><h3>Welcome  user ". $_SESSION['uid']."!</h3></p></div>";
        ?>

    </div>
  </div>


  <div class="lower-row">
    <div class="col-md-4">
    </div>


    <div class="col-md-4">

      <form role="form" action="customer_search_product.php" method="get" onSubmit="return from_to()" id="lf_stu" name="lf_stu">
        <div class="form-group">
          <h3 class="text-center" style="color:grey;">
            Search products
          </h3><br>
          <label for="InputUser">
            Product Name
          </label>
          <input type="" class="form-control" id="InputPname" name="u-name" placeholder="leave blank to search all">

        </div>


        <div class="form-group">

          <label for="kind">Product category</label>
          <select class="form-control" id="kind" name="category">
            <option id="k0">ALL</option> <option id="k1">Electric</option> <option id="k2">Book</option> <option id="k3">Cosmetics</option>
            <option id="k4">Food</option> <option id="k5">Clothes</option> <option id="k0">Toy</option>
          </select>

        </div>


        <div class="form-group">

          <label for="inventory">Inventory</label>
          <input type="number" min="0" max="" class="form-control" id="inventory" name="buy_inventory" placeholder="leave blank to search all">
        </div>


        <!-- <div class="form-group">

          <label for="price">Price ($)</label>
          <select class="form-control" id="price">
            <option id="p0">ALL</option> <option id="p1">1~50</option> <option id="p2">51~100</option> <option id="p3">101~500</option>
            <option id="p4">501~1000</option> <option id="p5">1001~2000</option> <option id="p6">2001~3000</option> <option id="p7"> > 3000</option>
          </select>

        </div> -->


        <div class="row">
          <!-- <label for="price"></label> -->
        <div class="form-group col-xs-4">
          <label for="p_from">Price ($) From</label>
          <input type="number" min="0" max="" class="form-control" id="p_from" name="p_from" placeholder="">
        </div>

        <div class="form-group col-xs-4">
          <label for="p_to">To</label>
          <input type="number" min="0" max="" class="form-control" id="p_to" name="p_to" placeholder="">
        </div>

        </div>


        <div class="form-group">

          <label for="price">Order by</label>
          <select class="form-control" id="price" name="order">
            <option id="o0">---</option> <option id="o1">Category</option> <option id="o2">Inventory: low to high</option> <option id="o3">Inventory: high to low</option>
            <option id="o4">Price: low to high</option> <option id="o5">Price: high to low</option>
          </select>

        </div>

      <br>

      <div class="row" onSubmit="return from_to()">
      <button type="submit" class="btn btn-success" style="margin-left:15px;">
        Search
      </button>

      </div>

    </form>


    <br>
    <form role="form" action="customer_buy.php" method="get">

    <h3 class="text-center" style="color:grey;">
      Buy products
    </h3><br>

    <label for="pro_ID">
      Product ID
    </label>
    <input type="" class="form-control" id="pro_ID" name="proID">

    <label for="inventory">
      Inventory
    </label>
    <input type="number" value="1" min="1" max="100" class="form-control" id="inventory" name="buy_inventory">

    <br>

    <button type="submit" class="btn btn-success" style="margin-left:px;">
      Buy
    </button>

    </form>



    <br><br>
    <form role="form" action="customer_search_trans.php" method="get">

    <h3 class="text-center" style="color:grey;">
      Search transaction history
    </h3><br>

    <label for="transID">
      Transaction ID
    </label>
    <input type="" class="form-control" id="transID" name="transID">


    <div class="form-group">
      <label for="transdate">Date</label>
      <select class="form-control" id="transdate" name="date">
        <option id="t0">ALL</option> <option id="t1">In 7 days</option> <option id="t2">In 14 days</option>
      </select>
    </div>
    <br>

    <button type="submit" class="btn btn-success" style="margin-left:px;">
      Search
    </button><br><br><br><br>

    </form>

    </div>


    <div class="col-md-4">
      <a type="submit" class="btn btn-default" style="top:10px; left:10px; position:absolute;" role="button" href="log_out.php">
        Log out
      </a><br><br>

    </div>

    <div class="col-md-4">
      <a type="submit" class="btn btn-default" style="top:10px; left:10px; position:absolute;" role="button" href="main.php">
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

     <script>
    function from_to()
    {
      if (lf_stu.p_from.value > lf_stu.p_to.value)
      {
      alert("From value cannot exceed To value!");
      // lf_stu.p_from.select();
      return false;
      }
    }

    </script>


  </body>
</html>
