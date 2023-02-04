<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "myRestaurant";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$conn) {
	echo "Connection to DB failed";
}
?>