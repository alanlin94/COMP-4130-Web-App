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
      <div class='row'>
          <div class='col-md-4'></div>
          <div class='col-md-4'>
            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
            <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
              <div class='form-row'>
                <div class='col-xs-12 form-group required'>
                  <label class='control-label'>Name on Card</label>
                  <input class='form-control' size='4' type='text'>
                </div>
              </div>
              <div class='form-row'>
                <div class='col-xs-12 form-group card required'>
                  <label class='control-label'>Card Number</label>
                  <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                </div>
              </div>
              <div class='form-row'>
                <div class='col-xs-4 form-group cvc required'>
                  <label class='control-label'>CVC</label>
                  <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                </div>
                <div class='col-xs-4 form-group expiration required'>
                  <label class='control-label'>Expiration</label>
                  <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                </div>
                <div class='col-xs-4 form-group expiration required'>
                  <label class='control-label'> </label>
                  <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                </div>
              </div>
              <div class='form-row'>
                <div class='col-md-12'>
                  <div class='form-control total btn btn-info'>
                    Total:
                    <span class='amount'>$300</span>
                  </div>
                </div>
              </div>
              <div class='form-row'>
                <div class='col-md-12 form-group'>
                  <button class='form-control btn btn-primary submit-button' type='submit'>Pay »</button>
                </div>
              </div>
              <div class='form-row'>
                <div class='col-md-12 error form-group hide'>
                  <div class='alert-danger alert'>
                    Please correct the errors and try again.
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class='col-md-4'></div>
      </div>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
