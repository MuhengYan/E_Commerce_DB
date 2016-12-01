<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

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
			<h2 class="text-center">
				Login
			</h2><br>


			<form role="form" action="login.php" method="post" onSubmit="return chkads()" id="lf_addstu" name="lf_addstu">
				<div class="form-group">

					<label for="InputUser">
						Customer ID
					</label>
					<input type="email" class="form-control" id="InputUser" name="u-name">

				</div>


				<div class="form-group">

					<label for="InputPassword">
						Password
					</label>
					<input type="password" class="form-control" id="InputPassword" name="pass">

				</div>



      <br><br>

      <div class="row" style="left:33px; top:240px; position:absolute;" onSubmit="return chkads()">
      <button type="submit" class="btn btn-success">
        Login
      </button>

      </div>

    </form>

		</div>


		<div class="col-md-4">
      <a type="submit" class="btn btn-default" style="top:240px; left:50px; position:absolute;" role="button" href="main.html">
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
