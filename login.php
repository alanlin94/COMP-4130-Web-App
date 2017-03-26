<?php
  require_once('PHPTAL-1.3.0/PHPTAL.php');
  require_once('php/users.php');

  $index = new PHPTAL('xhtml/login.xhtml');
  $index->title = "Björn Sture Store | Login";

  $user = new User();
  $index->notLoggedIn = $user->loggedIn();

  try {
      echo $index->execute();
  }
  catch (Exception $e) {
      echo $e;
  }
?>
