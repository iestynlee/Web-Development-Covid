<?php
$con = mysqli_connect("localhost", "ecm1417", "WebDev2021");
if (!$con)
{
	die('Could not connect: ' . mysqli_error());
}

my_select_db("reports", $conn);

$sql = "INSERT INTO Persons (Date, Time)
VALUES
('$_POST["date"]','$_POST["time"]')";

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