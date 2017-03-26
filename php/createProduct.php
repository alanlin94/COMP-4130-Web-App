<?php
include_once ("build.php");

$img = "";
$name = "";
$quantity = "";
$price = "";

if (isset($_POST["img"]) && !empty($_POST["img"])) {
	$img = $_POST["img"];
}

if (isset($_POST["name"]) && !empty($_POST["name"])) {
	$name = $_POST["name"];
}

if (isset($_POST["quantity"]) && !empty($_POST["quantity"])) {
	$quantity = $_POST["quantity"];
}

if (isset($_POST["price"]) && !empty($_POST["price"])) {
	$price = $_POST["price"];
}

if (empty($img) || empty($name) || empty($quantity) || empty($price)) {
	//echo "Fill all fields.";
} else {
  $sql = "INSERT INTO PRODUCTS (img, name, quantity, price) VALUES('$img', '$name', '$quantity', '$price');";
  $conn->exec($sql);
}

 ?>
