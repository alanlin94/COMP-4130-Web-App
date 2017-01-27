<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Björn Sture Store</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/sidebarnav.css"/>

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
                       <a href="#">Cart</a>
                     </li>
                     <li>
                      <a href="login.php">Login</a>
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
          <h1>Login</h1>
          <form class="form-horizontal">
            <fieldset>

            <!-- Username input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="username">Username</label>
              <div class="col-md-4">
              <input id="username" name="username" type="text" placeholder="Username" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="password">Password</label>
              <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="login">Login</label>
              <div class="col-md-4">
                <button id="login" name="login" class="btn btn-primary">Login</button>
              </div>
            </div>

            </fieldset>
            </form>
        </div>
        
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
