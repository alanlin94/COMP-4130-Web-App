<?php
  require_once('PHPTAL-1.3.0/PHPTAL.php');

  $index = new PHPTAL('payment.xhtml');
  $index->title = "Björn Sture Store | Payment";

  try {
      echo $index->execute();
  }
  catch (Exception $e) {
      echo $e;
  }
?>
