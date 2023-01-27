<?php
session_start();

include("includes/connection.inc.php");
include("includes/functions.inc.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted

    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $password_repeat = mysqli_real_escape_string($con, $_POST['repassword']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $surname = mysqli_real_escape_string($con, $_POST['surname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $authkey = 'AC461-E15A5-2AA8C-A441B';
    $authkeyinput = mysqli_real_escape_string($con, $_POST['authkey']);

    $isActive = 'false';
    $onBreak = 'false';
    $entryDateTime = '';
    $exitDateTime = '';
    $breakStart = '';
    $breakEnd = '';
    $breakTime = '';

    // check if any of the fields are empty
    if (!empty($user_name) && !empty($password) && !empty($password_repeat) && !empty($name) && !empty($surname) && !empty($email) && !empty($authkeyinput)) {
        
        if ($authkeyinput != $authkey){
            echo "Authentication Key Incorrect";
        }
        // check if passwords match
        else if ($password != $password_repeat) {
            echo "Passwords do not match, please try again.";
        } else {
            // hash the password
            $password = password_hash($password, PASSWORD_DEFAULT);

            //Save to database
            $user_id = random_num(20);
            $query = "INSERT INTO `users` (user_id,username,password,name,surname,email) VALUES ('$user_id','$user_name','$password','$name','$surname','$email')";

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
        }

    } else {

        echo "Please fill out all of the fields!";

    }

}

// Close the connection
mysqli_close($con);

?>