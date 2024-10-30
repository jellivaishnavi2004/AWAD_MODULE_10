<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "test";
$con = new mysqli($server, $user, $password, $db);
if ($con->connect_error)
die("Connection Failure !");
?>

