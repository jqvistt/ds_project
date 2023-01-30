<?php

session_start();

include("connection.inc.php");
include("functions.inc.php");

$user_data = check_login($con);

$user_id = $_SESSION['user_id'];

// Check if the user is an admin
$queryadmin = "SELECT is_admin FROM users WHERE user_id = '$user_id'";
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
    $comments = $_POST['comments']; // gets the value for the variable "comments"
    $file = $_FILES['files']; // gets the uploaded file

    // Check if a file was uploaded
    if (!empty($file['name'])) {
        // Process the uploaded file

        // Get the file extension
        $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);

        // Generate a new file name for the uploaded file
        $new_file_name = uniqid() . '.' . $file_extension;

        // Set the upload directory
        $upload_dir = './uploads/';

        // Move the uploaded file to the upload directory
        if (move_uploaded_file($file['tmp_name'], $upload_dir . $new_file_name)) {
            // File was successfully uploaded
        }
    }

    //Save to database

    $query = "insert into `time_tracking` (user_id, name, surname, entryDateTime, exitDateTime, breakStart, breakEnd, breakTime, comments, files) values 
                                    ('$user_id','$name','$surname','$entryDateTime','$exitDateTime','$breakStart','$breakEnd','$breakTime','$comments','$new_file_name')";


    if (!mysqli_query($con, $query)) {
        die("Error: " . mysqli_error($con));
    }
    die;

}