<?php

include_once ("build.php");

$firstname = "";
$lastname = "";
$username = "";
$email = "";
$password = "";

 //if there is something in username and it's not empty, username becomes the value
 if (isset($_POST["firstname"]) && !empty($_POST["firstname"])) {
 	$firstname = strip_tags($_POST["firstname"]);
 }

 if (isset($_POST["lastname"]) && !empty($_POST["lastname"])) {
 	$lastname = strip_tags($_POST["lastname"]);
 }

if (isset($_POST["username"]) && !empty($_POST["username"])) {
	$username = strip_tags($_POST["username"]);
}

if (isset($_POST["email"]) && !empty($_POST["email"])) {
	$email = strip_tags($_POST["email"]);
}

if (isset($_POST["password"]) && !empty($_POST["password"])) {
	$password = strip_tags($_POST["password"]);
}

if (empty($username) || empty($email) || empty($password)) {
	echo "One or more fields was not filled out.";
}
else {
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO USERS (firstname, lastname, username, email, password) VALUES(:fname, :lname, :uname, :email, :pword);";
    $stmt = $conn->prepare($sql);
    $stmt->bindparam(":fname", $firstname);
		$stmt->bindparam(":lname", $lastname);
		$stmt->bindparam(":uname", $username);
    $stmt->bindparam(":email", $email);
    $stmt->bindparam(":pword", $hashed_pass);
		$stmt->execute();
		header("Location: ../login.php");
}

?>
