<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Main page</title>

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
    </div>
  </div>


  <div class="lower-row">
    <div class="col-md-4">
    </div>

    <div class="col-md-4">
      <br>
      <h1 class="text-center">
        Welcome!
      </h1><br>
      <h3 class="text-center" style="color:grey;">
        -- Customer --
      </h3>


      <div class="row" style="margin-top:20px;">
      <a type="submit" class="btn btn-primary btn-lg btn-block" href="sign_up.php" role="button">
        Sign up
      </a>
      </div>

      <div class="row" style="margin-top:20px;">
      <a type="submit" class="btn btn-info btn-lg btn-block" href="login_test.php" role="button">
        Login
      </a>
    </div><br><br>



      <h3 class="text-center" style="color:grey;">
        -- Administrator --
      </h3>


      <div class="row" style="margin-top:20px;">
      <a type="submit" class="btn btn-default btn-lg btn-block" href="admin.php" role="button">
        Go to Admin
      </a>
      </div>


      <br><br><br>
      <h3 class="text-center" style="color:grey;">
        -- Manager --
      </h3>
      <br>

      <form role="form" action="login_check_mgr.php" method="get" onSubmit="return chkads()" id="lf_addstu" name="lf_addstu">

      <div class="form-group">

        <label for="InputStoreId">
          Store ID
        </label>
        <input type="" class="form-control" id="InputStoreId" name="store-ID">

        <label for="InputMname">
          Manager name
        </label>
        <input type="" class="form-control" id="InputMname" name="manager-name">

      </div>

      <div class="row" style="margin-top:20px;">
       <button type="submit" class="btn btn-success">
        Login
      </button>
      </div>

    </form>


    </div>


    <div class="col-md-4">

    </div>

  </div>
</div>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>


  </body>
</html>
