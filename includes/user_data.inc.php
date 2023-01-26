<?php

session_start();

include("connection.inc.php");
include("functions.inc.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    
    //The variables were requested

    $user_id = $_SESSION['user_id'];


        //Get from database
        $query = "SELECT entryDateTime, exitDateTime, breakStart, breakEnd, breakTime, comments FROM user_data WHERE user_id = '$user_id'";

        if (!mysqli_query($con, $query)) {
            die("Error: " . mysqli_error($con));
        }
    die;

}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    //Data is posted

    $user_id = $_SESSION['user_id'];

    $isActive = $_POST['isActive'];
    $onBreak = $_POST['onBreak'];
    $entryDateTime = $_POST['entryDateTime'];
    $exitDateTime = $_POST['exitDateTime'];
    $breakStart = $_POST['breakStart'];
    $breakEnd = $_POST['breakEnd'];
    $breakTime = $_POST['breakTime'];


        //Save to database

        $query = "INSERT INTO `user_data` (user_id, isActive, onBreak, entryDateTime, exitDateTime, breakStart, breakEnd, breakTime) VALUES 
                                    ('$user_id','$isActive','$onBreak','$entryDateTime','$exitDateTime','$breakStart','$breakEnd','$breakTime')
                                    ON DUPLICATE KEY UPDATE isActive = '$isActive', onBreak = '$onBreak', entryDateTime = '$entryDateTime', exitDateTime = '$exitDateTime', breakStart = '$breakStart', breakEnd = '$breakEnd', breakTime = '$breakTime'";

        if (!mysqli_query($con, $query)) {
            die("Error: " . mysqli_error($con));
        }
    die;

}
