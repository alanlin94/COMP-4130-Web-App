<?php

include_once ("../php/createProduct.php");

$sql = 'SELECT * FROM USERS';
$q = $conn->prepare($sql);
$q->execute();
$result = $q->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head metal:define-macro="head">
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

    <div class="nav-side-menu" metal:define-macro="sidenav">
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
                   <a href="../index.php">
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
        <?php
          foreach( $result as $row ) {
              echo '
              <tr id="adminInfo">
                <td>
                  <p>' . $row['firstname'] . ' <p/>
                </td>
                <td>
                   <p>' . $row['lastname'] . ' <p/>
                </td>
                <td>
                   <p>' . $row['username'] . ' <p/>
                </td>
                <td>
                  <p>' . $row['email'] . ' <p/>
                </td>
                <td>
                  <p>' . $row['password'] . ' <p/>
                </td>

              </tr>';
          }
        ?>
      </div>
    </div>
      <!-- CONTENT END -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
