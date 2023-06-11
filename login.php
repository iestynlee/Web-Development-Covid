<?php
session_start();
$con = mysqli_connect("localhost", "ecm1417", "WebDev2021");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

my_select_db("users", $con);

$userPass = array();
$userName = array();

$query = mysqli_query("SELECT * FROM users")
$username = $_POST['username'];
$password = $_POST['password'];

while($value=mysql_fetch_array($query)) {
	$userPass = $value['username'];
	$userName = $value['password'];
	if ($username == $userName && $password == $userPass){
		$cookie_name = $username;
		$cookie_value = "Neat";
		$exp = 60 * 60 * 30;
		$path = "/";
		setcookie(
			$cookie_name,
			$cookie_value,
			time() + $exp,
		$path);
		session_start();
		header("Location:home.html");
	}else{
		echo "Error: Wrong Username and Password";
	}
}
?>