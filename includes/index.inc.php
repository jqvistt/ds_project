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

  if (!$breakStart or !$breakEnd or !$breakTime) {

    $breakStart = "empty";
    $breakEnd = "empty";
    $breakTime = "empty";

  }

  /* File upload related tasks */

  $file = $_FILES['file'];
  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  $fileSize = $file['size'];
  $fileError = $file['error'];
  $fileType = $file['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 1000000) {
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = 'uploads/' . $fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        echo "Upload successful";
      } else {
        echo "File is too big";
      }
    } else {
      echo "There was an error uploading your file";
    }
  } else {
    echo "File type not allowed";
  }

  //Save to database

  $query = "insert into `time_tracking` (user_id, name, surname, entryDateTime, exitDateTime, breakStart, breakEnd, breakTime, comments) values 
                                    ('$user_id','$name','$surname','$entryDateTime','$exitDateTime','$breakStart','$breakEnd','$breakTime','$comments')";


  if (!mysqli_query($con, $query)) {
    die("Error: " . mysqli_error($con));
  }
  die;

}