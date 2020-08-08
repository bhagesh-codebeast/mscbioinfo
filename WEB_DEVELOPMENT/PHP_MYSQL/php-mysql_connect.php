<?php
$servername = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password);
if(!$connect){
	die("connection failed re macha: ".mysqli_connect_error());
}
echo "connected successfully";
mysqli_close($connect);
?>