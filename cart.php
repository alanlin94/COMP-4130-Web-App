<?php
  require_once('PHPTAL-1.3.0/PHPTAL.php');
  require_once('php/users.php');

  $index = new PHPTAL('xhtml/cart.xhtml');
  $index->title = "Björn Sture Store | Cart";

  $user = new User();
  $index->notLoggedIn = $user->loggedIn();

  try {
      echo $index->execute();
  }
  catch (Exception $e) {
      echo $e;
  }
?>
