<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Björn Sture Art Store</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/sidebarnav.css"/>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- SIDEBAR NAV -->
    <div class="nav-side-menu">
        <div class="brand"><a href="../index.php"><img src="../img/logo.svg" alt=""></a></div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                      <a href="home.php">Home</a>
                    </li>
                    <li class="active">
                      <a href="products.php">Products</a>
                    </li>
                     <li>
                      <a href="#">Profile</a>
                    </li>
                    <li>
                     <a href="../index.php">Logout</a>
                   </li>
                </ul>
         </div>
    </div>
    <!-- SIDEBAR NAV END-->

    <!-- CONTENT -->
    <div class="content">
      <div class="container-fluid">
          <h1>Admin Dashboard<br><small>Welcome guy <!-- PHP SESSION HERE --></small></h1>
          <div class="row">

            <h3>Products</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec metus in nunc congue suscipit.</p>
            <div class="col-sm-12">
                <div id="productform" class="first">
                    <div class="form-group">
                        <input type="text" class="form-control" name="ptitle" id="ptitle" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="price" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <input type="number" min="1" max="99" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                    </div>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Product Description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="image" name="image" aria-describedby="fileHelp">
                        <small id="info" class="form-text text-muted">Select the featured image you want for your product.</small>
                        <div id="upload-demo"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn">Create Product</button>
                    </div>
                  </div>
          </div>

          <div class="col-sm-12">
            <h4>Existing products</h4>
              <table class="table table-responsive table-hover table-striped">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Created</th>
                      </tr>
                  </thead>
                  <tbody id="viewproduct"> <!-- where view comes in -->
                  </tbody>
              </table>
          </div>

      </div>
    </div>
      <!-- CONTENT END -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>