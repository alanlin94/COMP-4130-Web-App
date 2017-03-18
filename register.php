<?php
  require_once('PHPTAL-1.3.0/PHPTAL.php');
  require_once('php/users.php');

  $index = new PHPTAL('register.xhtml');
  $index->title = "Björn Sture Store | Register";

  $user = new User();
  $index->notLoggedIn = $user->loggedIn();

  try {
      echo $index->execute();
  }
  catch (Exception $e) {
      echo $e;
  }
?>
