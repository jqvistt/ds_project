<?php
session_start();

include("includes/connection.inc.php");
include("includes/functions.inc.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $isActive = 'false';
    $onBreak = 'false';
    $entryDateTime = '';
    $exitDateTime = '';
    $breakStart = '';
    $breakEnd = '';
    $breakTime = '';

    if (!empty($user_name) && !empty($password) && !empty($name) && !empty($surname) && !empty($email)) {

        //Save to database
        $user_id = random_num(20);
        $query = "insert into `users` (user_id,username,password,name,surname,email) values ('$user_id','$user_name','$password','$name','$surname','$email')";

        if(mysqli_query($con, $query)){
           $query2 = "INSERT INTO `user_data` (user_id, isActive, onBreak, entryDateTime, exitDateTime, breakStart, breakEnd, breakTime) VALUES 
                                    ('$user_id','$isActive','$onBreak','$entryDateTime','$exitDateTime','$breakStart','$breakEnd','$breakTime')
                                    ON DUPLICATE KEY UPDATE isActive = '$isActive', onBreak = '$onBreak', entryDateTime = '$entryDateTime', exitDateTime = '$exitDateTime', breakStart = '$breakStart', breakEnd = '$breakEnd', breakTime = '$breakTime'";
        }

        if(mysqli_query($con, $query2)){
            header("Location: login.php");
            die;
        }else{
            die("Error: " . mysqli_error($con));
        }

    } else {

        echo "Please fill out all of the fields!";

    }

}