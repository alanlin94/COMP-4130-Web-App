<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Björn Sture Store</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidebarnav.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="nav-side-menu">
        <div class="brand"><a href="index.php"><img src="img/logo.svg" alt=""></a></div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

            <div class="menu-list">

                <ul id="menu-content" class="menu-content collapse out">
                    <li class="active">
                      <a href="#">Work</a>
                    </li>
                     <li>
                      <a href="#">Profile</a>
                      </li>
                      <li>
                       <a href="cart.php">Cart</a>
                     </li>
                     <li>
                      <a href="#">Login</a>
                    </li>
                    <li>
                     <a href="#">Logout</a>
                   </li>
                </ul>
         </div>
    </div>

    <div class="content">
      <div class="container-fluid">
      	<div class="row">
      		<form class="form-horizontal">
      <fieldset>

      <!-- Form Name -->
      <legend>Form Name</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Company</label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">First Name</label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="John" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Middle Initial</label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="M." class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Last Name</label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="Smith" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Email</label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="example@example.com" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Phone</label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="(555) 555-5555" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Work Phone</label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="(555) 555-5555" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Address</label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput"></label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="Apt, Suite, etc" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Postal Code</label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="Start Typing...." class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">City</label>
        <div class="col-md-12">
        <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">

        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">State</label>
        <div class="col-md-12">
          <select id="selectbasic" name="selectbasic" class="form-control">
            <option value="1">Option one</option>
            <option value="2">Option two</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Country</label>
        <div class="col-md-12">
          <select id="selectbasic" name="selectbasic" class="form-control">
            <option value="1">Option one</option>
            <option value="2">Option two</option>
          </select>
        </div>
      </div>

      </fieldset>
      </form>
      	</div>
        <button type="button" href="cart.php"></button>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
