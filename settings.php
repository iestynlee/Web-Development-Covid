<?php
	$cookie_weeks = $_POST["weeks"];
	$cookie_distance = $_POST["distance"];
	$exp = 60 * 60 * 30;
	$path = "/";
	setcookie(
		$cookie_weeks,
		$cookie_distance,
		time() + $exp,
	$path);
?>