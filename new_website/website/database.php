<?php

$hostname = "localhost";
$dbuser = "id21974280_user";
$dbPassword = "C@rlosmiguel123";
$dbname = "id21974280_carlos";
$conn = mysqli_connect($hostname, $dbuser, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
