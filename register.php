<?php
$con = mysqli_connect("localhost", "ecm1417", "WebDev2021");
if (!$con)
{
	die('Could not connect: ' . mysqli_error());
}

my_select_db("users", $conn);
$salt = "Hello"

$sql = "INSERT INTO Persons (Name, Surname, Username, Password, Salt)
VALUES
('$_POST["name"]','$_POST["surname"]','$_POST["username"]','$_POST["password"]',$salt)";

if (!mysqli_query($conn,$sql))
{
	$last_id = mysqli_insert_id($conn);
	echo "New record created successfully";
	echo "Last inserted ID is: " . $last_id;
}else {
	echo "Error: " .mysqli_error($conn);
}

mysqli_close($con)
?>