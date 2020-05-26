<?php

$host ="localhost";
$user ="root";
$pass ="";
$db ="new";

$connect = mysqli_connect($host,$user,$pass,$db);

if (!$connect) {
    die("connection failed".mysqli_connect_error());
}else {


    if(isset($_POST['signup-btn'])){


        if($_POST['user-pass'] == $_POST['user-cpass']){
            $username = $_POST['user-name'];
            $hashed_pass = password_hash($_POST['user-pass'], PASSWORD_DEFAULT);
            $hashed_con_pass = password_hash($_POST['user-cpass'], PASSWORD_DEFAULT);
            $email = $_POST['user-email'];
            $signup_sql = "INSERT INTO users (username,passd,email,to_date)
            VALUES ('$username','$hashed_pass','$email',now())";

            
            if(mysqli_query($connect,$signup_sql)){
                header('Refresh:3; url = index.html');
                echo "hurray";
            }else {
                echo "error: ".mysqli_error($connect);
            }



        }else {
            header('Refresh:3; url = index.html');
            echo "Password did not match<br>";
        }


            
    }elseif(isset($_POST['login-btn'])){

        $loginuser = $_POST['login-name'];
        $hashed_pass = password_hash($_POST['login-pass'], PASSWORD_DEFAULT);

        $login_sql = mysqli_query ($connect,"SELECT * FROM users WHERE username = '". $loginuser."'");

        $count = mysqli_num_rows($login_sql);

        if($count == 0){
            header('Refresh:3; url = index.html');
            echo "you dont seem to be a registered user <br>";
            echo "please signup";
        }else {
            header('Refresh:3; url = index.html');
            echo "hurray2";
        }
        
        
    }else {
        echo "error";
    }
}

    



?>