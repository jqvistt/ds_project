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

    if (!empty($user_name) && !empty($password) && !empty($name) && !empty($surname) && !empty($email)) {

        //Save to database
        $user_id = random_num(20);
        $query = "insert into `users` (user_id,username,password,name,surname,email) values ('$user_id','$user_name','$password','$name','$surname','$email')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {

        echo "Please fill out all of the fields!";

    }

}