<?php

session_start();

include("includes/connection.inc.php");
include("includes/functions.inc.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted

    $user_id = $_SESSION['user_id'];
    $name = $user_data['name'];
    $surname = $user_data['surname'];
    $starting_location = $_POST['start_location'];
    $ending_location = $_POST['end_location'];
    $km_traveled = $_POST['km_traveled'];
    $date_traveled = $_POST['date_traveled'];




    if (!empty($starting_location) && !empty($ending_location) && !empty($km_traveled) && !empty($date_traveled)) {

        //Save to database

        $query = "insert into `mileage_allowance` (user_id, name, surname, starting_location, ending_location, km_traveled, date_traveled) values ('$user_id','$name','$surname','$starting_location','$ending_location','$km_traveled','$date_traveled')";

        if (!mysqli_query($con, $query)) {
            die("Error: " . mysqli_error($con));
        }

        header("Location: ./index.php");
        die;

    } else {

        echo "Please fill out all of the fields!";

    }

}