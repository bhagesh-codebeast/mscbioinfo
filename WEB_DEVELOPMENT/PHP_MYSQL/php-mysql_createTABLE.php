<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";

$connect = mysqli_connect($servername, $username, $password, $dbname);
if(!$connect){
	die("connection failed : ".mysqli_connect_error());
}
$sql1="DROP TABLE stud_det";
if(mysqli_query($connect, $sql1)){
	echo"table STUD_DET dropped successfully <br>";
}else{
	echo"error: ".mysqli_error($connect);
}

$sql="CREATE TABLE stud_det(
reg_no INT(9) NOT NULL PRIMARY KEY,
full_name VARCHAR(15) NOT NULL,
dob DATE NOT NULL,
gender VARCHAR(1) NOT NULL,
phone_no INT(10) NOT NULL,
email_id VARCHAR(20) NOT NULL,
address VARCHAR(60) NOT NULL,
course VARCHAR(10) NOT NULL,
created DATETIME DEFAULT CURRENT_TIMESTAMP,
updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($connect, $sql)){
	echo"table STUD_DET created successfully <br>";
}else{
	echo"error: ".mysqli_error($connect);
}

mysqli_close($connect);
?>