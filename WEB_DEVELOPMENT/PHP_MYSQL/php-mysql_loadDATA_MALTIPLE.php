<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect){
	die("error connecting: ".mysqli_connect_error());
}
echo"connected successfully <br><hr>";

$sql="INSERT INTO stud_det(reg_no,full_name,dob,gender,phone_no,email_id,address,course,created,updated)
VALUES('191706004','PERSON4','1997-05-04','M','1234567894','HUMAN2@EMAIL','STREET1ROAD2BUILDING6','CRIM_PSYC',NOW(),NOW());";
$sql.="INSERT INTO stud_det(reg_no,full_name,dob,gender,phone_no,email_id,address,course,created,updated)
VALUES('191706005','PERSON5','1997-05-05','M','1234567895','HUMAN1@EMAIL','STREET1ROAD2BUILDING7','CRIM_PSYC',NOW(),NOW());";
$sql.="INSERT INTO stud_det(reg_no,full_name,dob,gender,phone_no,email_id,address,course,created,updated)
VALUES('191706006','PERSON6','1997-05-06','M','1234567896','HUMAN2@EMAIL','STREET1ROAD2BUILDING8','CRIM_LAW',NOW(),NOW())";

if(mysqli_multi_query($connect,$sql)){
	$last_id= mysqli_insert_id($connect);
	echo "new record inserted with id: ".$last_id;	
}else{
	echo"for statement ".$sql."<br> found error: ".mysqli_error($connect);
}

mysqli_close($connect);
?>