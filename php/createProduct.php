<?php
include_once ("build.php");

$name = "";
$price = "";
$quantity = "";

if (isset($_POST["name"]) && !empty($_POST["name"])) {
	$name = $_POST["name"];
}

if (isset($_POST["price"]) && !empty($_POST["price"])) {
	$price = $_POST["price"];
}

if (isset($_POST["quantity"]) && !empty($_POST["quantity"])) {
	$quantity = $_POST["quantity"];
}

if (empty($name) || empty($quantity) || empty($price)) {
	echo "One or more fields was not filled out.";
} else {
  $sql = "INSERT INTO PRODUCTS (name, price, quantity) VALUES('$name', '$price', '$quantity');";
  $conn->exec($sql);
}

echo print_r($_POST);

 ?>