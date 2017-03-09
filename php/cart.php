<?php
include_once ("build.php");

$quantity = "";
$name = "";

if (isset($_POST["name"]) && !empty($_POST["name"])) {
	$name = $_POST["name"];
}

if (isset($_POST["quantity"]) && !empty($_POST["quantity"])) {
	$quantity = $_POST["quantity"];
}

if (empty($name) || empty($quantity)) {
	echo "One or more fields was not filled out.";
} else {
  $sql = "INSERT INTO CART (name, quantity) VALUES('$name', '$quantity');";
  $conn->exec($sql);
}

echo print_r($_POST);

 ?>
