<?php
  require_once('../PHPTAL-1.3.0/PHPTAL.php');

  $index = new PHPTAL('products.xhtml');
  $index->title = "Björn Sture Dashboard | products";

  try {
      echo $index->execute();
  }
  catch (Exception $e) {
      echo $e;
  }
?>
