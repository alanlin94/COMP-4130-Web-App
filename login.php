<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Björn Sture Art Store</title>

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

    <!-- SIDEBAR NAV -->
    <div class="nav-side-menu">
        <div class="brand"><a href="index.php"><img src="img/logo.svg" alt=""></a></div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                      <a href="index.php">Work</a>
                    </li>
                     <li>
                      <a href="dashboard/home.php">Profile</a>
                      </li>
                      <li>
                       <a href="#">Cart</a>
                     </li>
                     <li class="active">
                      <a href="login.php">Login</a>
                    </li>
                    <li>
                     <a href="register.php">Register</a>
                   </li>
                </ul>
         </div>
    </div>
    <!-- SIDEBAR NAV END-->

    <!-- CONTENT -->
    <div class="content">
      <div class="container-fluid">

        <!-- Login Form -->
        <div class="row">
          <h1>Login</h1>
          <div class="col-lg-12">
          <form method="post" action="">
              <!-- Username input-->
              <div class="form-group">
                  <label class="control-label" for="username">Username</label>
                  <input id="username" name="username" type="text" placeholder="Username" class="form-control" required="">
              </div>
              <!-- Password input-->
              <div class="form-group">
                  <label class="control-label" for="password">Password</label>
                  <input id="password" name="password" type="password" placeholder="Password" class="form-control" required="">
              </div>
              <!-- Button -->
              <div class="form-group">
                  <button id="login" name="login" class="btn">Login</button>
              </div>
            </form>
            <a href="register.php">Don't have an account?</a>
          </div>
        </div>

      </div>
    </div>
    <!-- CONTENT END-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
