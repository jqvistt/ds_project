<?php

session_start();

include("connection.inc.php");
include("functions.inc.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    //something was posted (hopefully the checkout button)

    $user_id = $_SESSION['user_id'];
    $name = $user_data['name'];
    $surname = $user_data['surname'];

    $entryDateTime = $_POST['entryDateTime'];
    $exitDateTime = $_POST['exitDateTime'];
    $breakStart = $_POST['breakStart'];
    $breakEnd = $_POST['breakEnd'];
    $breakTime = $_POST['breakTime'];


        //Save to database

        $query = "insert into `time_tracking` (user_id, name, surname, entryDateTime, exitDateTime, breakStart, breakEnd, breakTime) values ('$user_id','$name','$surname','$entryDateTime','$exitDateTime','$breakStart','$breakEnd','$breakTime')";

        if (!mysqli_query($con, $query)) {
            die("Error: " . mysqli_error($con));
        }
    die;

}