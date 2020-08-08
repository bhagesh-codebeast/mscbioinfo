<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$connect){
	die("connection failed: ".mysqli_connect_error());
}
$sql= "LOAD DATA INFILE 'stud_det.csv' INTO TABLE stud_det";

if(mysqli_query($connect,$sql)){
	$last_id = mysqli_insert_id($connect);
	echo "New record inserted with id: ".last_id;
}else{
	echo "error: ".sql."<br>".mysqli_error($connect);
}
mysqli_close($connect);
?>