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

    <div class="container">
    	<div class="row">
    		<div class="col-xs-8">
    			<div class="panel panel-info">
    				<div class="panel-heading">
    					<div class="panel-title">
    						<div class="row">
    							<div class="col-xs-6">
    								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
    							</div>
    							<div class="col-xs-6">
    								<button type="button" class="btn btn-primary btn-sm btn-block">
    									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping
    								</button>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="panel-body">
    					<div class="row">
    						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
    						</div>
    						<div class="col-xs-4">
    							<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
    						</div>
    						<div class="col-xs-6">
    							<div class="col-xs-6 text-right">
    								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
    							</div>
    							<div class="col-xs-4">
    								<input type="text" class="form-control input-sm" value="1">
    							</div>
    							<div class="col-xs-2">
    								<button type="button" class="btn btn-link btn-xs">
    									<span class="glyphicon glyphicon-trash"> </span>
    								</button>
    							</div>
    						</div>
    					</div>
    					<hr>
    					<div class="row">
    						<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
    						</div>
    						<div class="col-xs-4">
    							<h4 class="product-name"><strong>Product name</strong></h4><h4><small>Product description</small></h4>
    						</div>
    						<div class="col-xs-6">
    							<div class="col-xs-6 text-right">
    								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
    							</div>
    							<div class="col-xs-4">
    								<input type="text" class="form-control input-sm" value="1">
    							</div>
    							<div class="col-xs-2">
    								<button type="button" class="btn btn-link btn-xs">
    									<span class="glyphicon glyphicon-trash"> </span>
    								</button>
    							</div>
    						</div>
    					</div>
    					<hr>
    					<div class="row">
    						<div class="text-center">
    							<div class="col-xs-9">
    								<h6 class="text-right">Added items?</h6>
    							</div>
    							<div class="col-xs-3">
    								<button type="button" class="btn btn-default btn-sm btn-block">
    									Update cart
    								</button>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="panel-footer">
    					<div class="row text-center">
    						<div class="col-xs-9">
    							<h4 class="text-right">Total <strong>$50.00</strong></h4>
    						</div>
    						<div class="col-xs-3">
    							<button type="button" class="btn btn-success btn-block">
    								Checkout
    							</button>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
