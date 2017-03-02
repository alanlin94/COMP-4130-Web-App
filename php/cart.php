<? php
include_once ("build.php");

$sql = "INSERT INTO CARTPRODUCT (name, quantity) VALUES('$name', '$quantity');";
$conn->exec($sql);



 ?>
