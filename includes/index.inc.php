<?php

session_start();

include("connection.inc.php");
include("functions.inc.php");

$user_data = check_login($con);

$uuid = $_SESSION['uuid'];

// Check if the user is an admin
$queryadmin = "SELECT is_admin FROM users WHERE uuid = '$uuid'";
$result = mysqli_query($con, $queryadmin);
$row = mysqli_fetch_assoc($result);


// Checks if something is posted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    //something was posted (hopefully the checkout button)

    //Declaring variables
    $name = $user_data['name']; //gets first name of user
    $surname = $user_data['surname']; // gets surname of user

    $entryDateTime = $_POST['entryDateTime']; // gets the variable entryDateTime
    $exitDateTime = $_POST['exitDateTime']; // gets the variable exitDateTime
    $breakStart = $_POST['breakStart']; //gets the variable breakStart
    $breakEnd = $_POST['breakEnd']; // gets the variable breakEnd
    $breakTime = $_POST['breakTime']; // gets the variable breakTime

    if (array_key_exists('comments', $_POST)) {
        $comments = $_POST['comments']; // gets the value for the variable "comments"
    } else {
        $comments = 'No comments';
    }

        //Save to database

        $query = "insert into `time_tracking` (uuid, name, surname, entryDateTime, exitDateTime, breakStart, breakEnd, breakTime, comments) values 
                                    ('$uuid','$name','$surname','$entryDateTime','$exitDateTime','$breakStart','$breakEnd','$breakTime','$comments')";


        if (!mysqli_query($con, $query)) {
            die("Error: " . mysqli_error($con));
        }
    die;

}


