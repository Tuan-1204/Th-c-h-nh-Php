<?php
$server = "localhost";
$username = "root";
$password = "";
$database ="wphp";
$conn = mysqli_connect($server, $username, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
?>