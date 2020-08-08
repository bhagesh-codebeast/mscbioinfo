<?php
$servername = "localhost";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password);
if(!$connect){
	die("connection failed re macha: ".mysqli_connect_error());
}
echo "connected successfully <br>";

//create database

$sql = "CREATE DATABASE test_data";
if(mysqli_query($connect,$sql)){
	echo "DB created successfully";
}else{
	echo "Error: ".mysqli_error($connect);
}

mysqli_close($connect);
?>