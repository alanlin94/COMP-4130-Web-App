<?php
  require_once('PHPTAL-1.3.0/PHPTAL.php');

  $index = new PHPTAL('login.xhtml');
  $index->title = "Björn Sture Store | Login";

  try {
      echo $index->execute();
  }
  catch (Exception $e) {
      echo $e;
  }

    echo $_POST["password"];
    echo "</br>";
    echo md5("password". "113lda9!23");

?>
