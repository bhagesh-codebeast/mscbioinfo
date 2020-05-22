<?php

function visitors($record){
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mydb";
    $table = "visit";
    # create table visit
    # id = int, autoincriment, primary key
    # access_page = varchar, unique key
    # access_counter = int
    # access_page = timestamp, current_timestamp(), on update current_timestamp()

    $count_page = "access_page"; #column where website name is stored
    $count_field = "access_counter"; #number of visits

    #connect to database;
    $connect = mysqli_connect($host, $user, $password, $dbname) or die("host/db not accessible");

    #insert records into the page i.e. website name and the number of visits, and on update incriment by 1
    $sql = "INSERT INTO ".$table."(".$count_page.",".$count_field.") VALUES ('".$record."',1) ON DUPLICATE KEY UPDATE ".$count_field."=".$count_field."+1";

    mysqli_query($connect,$sql) or die("Error updating visitors".mysqli_error($connect));

    #to display the number of visits compare the page name with index and fetch only that record
$sql = "SELECT ".$count_field." FROM ".$table." where ".$count_page."='".$record."'";
$result = mysqli_query($connect, $sql) or die("SQL request failed");

$row = mysqli_fetch_assoc($result);
$x = $row[$count_field];

mysqli_close($connect);
return $x;

}


?>