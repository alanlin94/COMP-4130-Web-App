<?php

include_once ("build.php");

$username = "";
$email = "";
$password = "";

if (isset($_POST["username"]) && !empty($_POST["username"])) {
	$username = $_POST["username"];
}

if (isset($_POST["email"]) && !empty($_POST["email"])) {
	$email = $_POST["email"];
}

if (isset($_POST["password"]) && !empty($_POST["password"])) {
	$password = $_POST["password"];
}

if (empty($username) || empty($email) || empty($password)) {
	echo "One or more fields was not filled out.";
} else {
  $sql = "INSERT INTO USERS (username, email, password) VALUES('$username', '$email', '$password');";
  $conn->exec($sql);
}

?>
