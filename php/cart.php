<?php
include_once ("build.php");


$quantity = "";
$username = "";


if (isset($_POST["username"]) && !empty($_POST["username"])) {
	$username = $_POST["username"];
}

if (isset($_POST["quantity"]) && !empty($_POST["quantity"])) {
	$quantity = $_POST["quantity"];
}

if (empty($username) || empty($quantity)) {
	echo "One or more fields was not filled out.";
} else {
  $sql = "INSERT INTO CART (username, quantity) VALUES('$username', '$quantity');";
  $conn->exec($sql);
}

echo print_r($_POST);


 ?>
