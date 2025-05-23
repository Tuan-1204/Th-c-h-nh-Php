<?php
// Hàm mysqli_connect() được sử dụng để kết nối đến php & cơ sở dữ liệu MySQL
// Hàm mysli_query() được sử dụng để thực hiện các truy vấn SQL
$server="localhost";
$username="root";
$password="";
$database="wphp";
$conn=mysqli_connect($server,$username,$password,$database);
mysqli_query($conn,"SET NAMES 'utf8'");
?>