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


			<form role="form" action="login_check_user.php" method="get" onSubmit="return chkads()" id="lf_addstu" name="lf_addstu">
				<div class="form-group">

					<label for="InputEmail">
						Customer e-mail
					</label>
					<input type="e-mail" class="form-control" id="InputEmail" name="u-email">

				</div>


				<div class="form-group">

					<label for="InputPassword">
						Password
					</label>
					<input type="password" class="form-control" id="InputPassword" name="pass">

				</div><br>


        <a type="submit" class="btn btn-success" role="button">
          Login
        </a>

    </form>

		</div>


		<div class="col-md-4">
      <a type="submit" class="btn btn-default" style="top:260px; left:50px; position:absolute;" role="button" href="main.html">
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
