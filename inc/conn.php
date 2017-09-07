<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "makemaihouse";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$conn->query("SET NAMES utf8");
?>