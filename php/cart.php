<? php
include_once ("build.php");

$sql = "INSERT INTO products (name, description, price) VALUES('$username', '$email', '$password');";
$conn->exec($sql);



 ?>
