<? php

$username = "";
$password = "";

if (isset($_POST["username"]) && !empty($_POST["username"])) {
	$username = $_POST["username"];
}

if (isset($_POST["password"]) && !empty($_POST["password"])) {
	$password = $_POST["password"];
}

if (empty($username) || empty($password)) {
	echo "One or more fields was not filled out.";
} else {

}

?>
