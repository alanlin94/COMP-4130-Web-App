<?php

$username = "";
$password = "";

if (isset($_POST["username"]) && !empty($_POST["username"])) {
	$username = $_POST["username"];
}

if (isset($_POST["password"]) && !empty($_POST["password"])) {
	$password = $_POST["password"];
}

if (empty($username) || empty($password)) {
	echo "Fill all fields.";
} else {
	include_once('users.php');
	$user = new user();

	if($user->login($username, $password) === true){
		header("Location: ../dashboard/home.php");
	}
}

?>
