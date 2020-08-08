<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$connect){
	die("connection failed: ".mysqli_connect_error());
}
$sql= "INSERT INTO stud_det(reg_no,full_name,dob,gender,phone_no,email_id,address,course,created,updated)
VALUES('191706003','PERSON3','1997-05-03','M','1234567893','HUMAN1@EMAIL','STREET1ROAD2BUILDING5','CRIM_PSYC',NOW(),NOW())";
if(mysqli_query($connect,$sql)){
	$last_id = mysqli_insert_id($connect);
	echo "New record inserted with id: ".$last_id;
}else{
	echo "error: ".$sql."<br>".mysqli_error($connect);
}
mysqli_close($connect);
?>