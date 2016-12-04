<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrator browsing</title>

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
				Admin Dashboard
			</h2><br>
		</div>
	</div>


	<div class="lower-row">
		<div class="col-md-4">
		</div>


		<div class="col-md-4">

			<form role="form" action="admin_delete_product.php" method="get" onSubmit="return chkads()" id="lf_addstu" name="lf_addstu">
				<div class="form-group">
          <h3 class="text-center" style="color:grey;">
            Delete products
          </h3><br>
					<label for="delPro">
						Product name
					</label>
					<input type="text" class="form-control" id="delPro" name="delPro" placeholder="">

          <label for="delSID">
						Store ID
					</label>
					<input type="number" value="1" min="1" max="" class="form-control" id="delSID" name="delSID" placeholder="">

          <label for="delInv">
						Inventory
					</label>
					<input type="number" min="0" max="" class="form-control" id="delInv" name="delInv" placeholder="leave blank to delete all">


				</div>

      <br>

      <div class="row" onSubmit="return chkads()">
      <button type="submit" class="btn btn-danger" style="margin-left:15px;">
        Delete
      </button>

      </div>

    </form>


    <br><br>

    <form role="form" action="admin_delete_customer.php" method="get" onSubmit="return chkads()" id="lf_addstu" name="lf_addstu">

    <h3 class="text-center" style="color:grey;">
      Delete customers
    </h3><br>

    <label for="delCus">
      Customer ID
    </label>
    <input type="" class="form-control" id="delCus" name="delCus">


    <br>

    <button type="submit" class="btn btn-danger" style="margin-left:px;">
      Delete
    </button>

    </form>


    <br><br>
    <form role="form" action="admin_delete_store.php" method="get" onSubmit="return chkads()" id="lf_addstu" name="lf_addstu">

    <h3 class="text-center" style="color:grey;">
      Detete store
    </h3><br>

    <label for="storeID">
      Store ID
    </label>
    <input type="number" value="1" min="1" max="" class="form-control" id="storeID" name="storeID">

    <br>
    <button type="submit" class="btn btn-danger" style="margin-left:px;">
      Delete
    </button><br><br><br><br>

    </form>

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


  </body>
</html>
