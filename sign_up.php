<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign up</title>

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
        Sign Up
      </h2>


      <form role="form" action="sign_up_check.php" method="get" onSubmit="return chkads()" id="lf_addstu" name="lf_addstu">
        <div class="form-group">

          <label for="InputUser">
            Name
          </label>
          <input type="" class="form-control" id="InputUser" name="u-name">

        </div>


        <div class="form-group">

          <label for="InputPassword">
            Password
          </label>
          <input type="password" class="form-control" id="InputPassword" name="pass">

        </div>


        <div class="form-group">

          <label for="InputAddress">
            Address
          </label>
          <input type="address" class="form-control" id="InputAddress1" placeholder="Street" name="street"><br>
          <input type="address" class="form-control" id="InputAddress1" placeholder="City" name="city">

        </div>


        <div class="row">

        <div class="form-group col-xs-4">
          <label for="state">State</label>
          <select class="form-control" id="state">
            <option id="al">AL</option> <option id="ak">AK</option> <option id="az">AZ</option> <option id="ar">AR</option>
            <option id="al">CA</option> <option id="ak">CO</option> <option id="az">CT</option> <option id="ar">DC</option>
            <option id="al">DE</option> <option id="ak">FL</option> <option id="az">GE</option> <option id="ar">HI</option>
          </select>
        </div>

        <div class="form-group col-xs-4">
          <label for="state">Zip code</label>
          <input type="address" class="form-control" id="zip" placeholder="" name="zip">
        </div>

        </div>

      <br>


      <div class="tabbable row" id="tabs-1" style="margin-left:3px;">

        <label for="ChooseKind">
          Please specify customer kind (Home/Business)
        </label>

        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#panel-home" data-toggle="tab">Home</a>
          </li>
          <li>
            <a href="#panel-biz" data-toggle="tab">Business</a>
          </li>
        </ul>

        <div class="tab-content" style="left:18px; position:absolute;">

          <div class="tab-pane active" id="panel-home">
            <br>
            <div class="row">
            <div class="form-group col-xs-4">
            <label for="marriage">Marriage Status</label>
            <select class="form-control" id="marriage" name="marriage">
              <option id="m0">NA</option> <option id="m1">Married</option> <option id="m2">Single</option> <option id="m3">Divorced</option>
            </select>
            </div>

            <div class="form-group col-xs-4">
              <label for="gender">Gender</label>
              <select class="form-control" id="gender" name ="gender">
                <option id="g0">NA</option> <option id="g1">Female</option> <option id="g2">Male</option>
              </select>
            </div>

            <div class="form-group col-xs-3">
              <label for="age">Age</label>
              <input class="form-control" id="age" name="age">
            </div>
            </div>

            <div class="row form-group col-xs-6">
              <label for="income">Income</label>
              <input class="form-control" id="income" placeholder="e.g. 100,000" name="home_in">
            </div>

          </div>

          <div class="tab-pane" id="panel-biz">
            <br>
            <div class="row">
            <div class="form-group col-xs-4">
            <label for="biz-cat">Business Category</label>
            <select class="form-control" id="biz-cat" name="biz-cat">
              <option id="b0">NA</option> <option id="b1">Beauty</option> <option id="b2">Computers</option> <option id="b3">Entertainment</option>
            </select>
            </div>

            <div class="form-group col-xs-6">
              <label for="biz-inc">Company gross anual income</label>
              <input class="form-control" id="biz-inc" placeholder="e.g. 100,000" name="biz_in">
            </div>
            </div>
          </div>
        </div>

      </div>

      <br><br>

      <div class="row" style="left:33px; top:680px; position:absolute;" onSubmit="return chkads()">
      <button type="submit" class="btn btn-success">
        Submit
      </button>

      </div>

    </form>

    </div>


    <div class="col-md-4">
      <a type="submit" class="btn btn-default" style="top:680px; left:50px; position:absolute;" role="button" href="main.html">
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
