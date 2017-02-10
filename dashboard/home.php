<?php
  require_once('../PHPTAL-1.3.0/PHPTAL.php');

  $index = new PHPTAL('home.xhtml');
  $index->title = "Björn Sture Dashboard | Home";

  try {
      echo $index->execute();
  }
  catch (Exception $e) {
      echo $e;
  }
?>
