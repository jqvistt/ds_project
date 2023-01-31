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

    $file = $_FILES['files'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];
    
    // Specify the target directory and file path
    $fileDestination = './uploads/' . $fileName;
    
    // Move the uploaded file to the target directory
    if (move_uploaded_file($fileTmpName, $fileDestination)) {
      echo "File uploaded successfully.";
    } else {
      echo "Error uploading file.";
    }
  

    //Save to database

    $query = "insert into `time_tracking` (user_id, name, surname, entryDateTime, exitDateTime, breakStart, breakEnd, breakTime, comments) values 
                                    ('$user_id','$name','$surname','$entryDateTime','$exitDateTime','$breakStart','$breakEnd','$breakTime','$comments')";


    if (!mysqli_query($con, $query)) {
        die("Error: " . mysqli_error($con));
    }
    die;

}