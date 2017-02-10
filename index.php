<?php
  require_once('PHPTAL-1.3.0/PHPTAL.php');

  $index = new PHPTAL('index.xhtml');
  $index->title = "Björn Sture Store | Home";
  
  try {
      echo $index->execute();
  }
  catch (Exception $e) {
      echo $e;
  }
?>
