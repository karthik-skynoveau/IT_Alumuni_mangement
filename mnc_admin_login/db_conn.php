<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "attendance_system_it";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>