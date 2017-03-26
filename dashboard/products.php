<?php

include_once ("../php/createProduct.php");

$sql = 'SELECT * FROM PRODUCTS';
$q = $conn->prepare($sql);
$q->execute();
$result = $q->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Björn Sture Dashboard | Home</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/sidebarnav.css" />

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

  <body>

    <div class="nav-side-menu">
       <div class="brand"><a href="../index.php"><img src="../img/logo.svg" alt="" /></a></div>
       <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
           <div class="menu-list">
               <ul id="menu-content" class="menu-content collapse out">
                  <a href="home.php">
                    <li>
                     <span>Home</span>
                   </li>
                   </a>
                   <a href="products.php">
                     <li>
                       <span>Products</span>
                    </li>
                   </a>
                    <a href="profile.php">
                      <li>
                       <span>Profile</span>
                     </li>
                   </a>
                   <a href="../php/logout.php">
                     <li>
                       <span>Logout</span>
                    </li>
                  </a>
              </ul>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">
      <div class="container-fluid">
          <h1>Admin Dashboard<br /><small>Welcome guy <!-- PHP SESSION HERE --></small></h1>
          <div class="row">

            <h3>Products</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec metus in nunc congue suscipit.</p>
            <div class="col-sm-12">
                <div id="productform" class="first productNew">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="price" name="price" placeholder="Price" />
                    </div>
                    <div class="form-group">
                        <input type="number" min="1" max="99" class="form-control" id="quantity" name="quantity" placeholder="Quantity" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="image" name="img" placeholder="Image URL" />
                    </div>
                  </div>
                    <div class="form-group productNew">
                        <button type="submit" class="btn" id="newProductAdmin">Create Product</button>
                    </div>
              </div>
          </div>

          <div class="col-sm-12 productsAdmin">
            <h4>Existing products</h4>
              <table class="table table-responsive table-hover table-striped">
                  <thead>
                      <tr>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Stock</th>
                          <th>Price</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach( $result as $row ) {
                          echo '
                          <tr id="'. $row['product_id'] .'" class="delMe">
                            <td>
                              <img src=" ' . $row['img'] . ' " width="100px" />
                            </td>
                            <td>'
                            . $row['name'] .
                            '</td>
                            <td>'
                            . $row['quantity'] .
                            '</td>
                            <td>
                            $'. $row['price'] .
                            '
                            <button id="'. $row['product_id'] .'"class="deleteBut">DELETE</button>
                            <button id="'. $row['product_id'] .'"class="updateBut">EDIT</button>
                            </td>
                          </tr>';
                      }
                    ?>
                  </tbody>
              </table>
          </div>
          <div class="row" id="editproduct" >

            <h3>Edit</h3>
            <p>Change your items here</p>
            <div class="col-sm-12">
                <div class="first">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nameEdit" id="nameEdit" placeholder="Name" />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="priceEdit" name="priceEdit" placeholder="Price" />
                    </div>
                    <div class="form-group">
                        <input type="number" min="1" max="99" class="form-control" id="quantityEdit" name="quantityEdit" placeholder="Quantity" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="imageEdit" name="imgEdit" placeholder="Image URL" />
                    </div>
                  </div>
                    <div class="form-group">
                        <button type="submit" class="btn" id="newEditAdmin">Edit Product</button>
                    </div>
              </div>
          </div>

      </div>
    </div>
      <!-- CONTENT END -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/adminProduct.js"></script>
    <script src="../js/updateProduct.js"></script>
    <script src="../js/deleteProduct.js"></script>
  </body>
</html>
