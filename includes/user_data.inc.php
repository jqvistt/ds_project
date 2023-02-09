<?php

session_start();

include("connection.inc.php");
include("functions.inc.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $uuid = $_SESSION['uuid'];

    $sql = "SELECT * FROM user_data WHERE uuid = '$uuid'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    // Return the data as a JSON object
    echo json_encode($row);

}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //Data is posted

    $uuid = $user_data['uuid'];

    $isActive = $_POST['isActive'];
    $onBreak = $_POST['onBreak'];
    $entryDateTime = $_POST['entryDateTime'];
    $exitDateTime = $_POST['exitDateTime'];
    $breakStart = $_POST['breakStart'];
    $breakEnd = $_POST['breakEnd'];
    $breakTime = $_POST['breakTime'];

    //Save to database

    $query = "INSERT INTO user_data (uuid, isActive, onBreak, entryDateTime, exitDateTime, breakStart, breakEnd, breakTime) VALUES 
                                    ('$uuid','$isActive','$onBreak','$entryDateTime','$exitDateTime','$breakStart','$breakEnd','$breakTime')
                                    ON DUPLICATE KEY UPDATE isActive = '$isActive', onBreak = '$onBreak', entryDateTime = '$entryDateTime', exitDateTime = '$exitDateTime', breakStart = '$breakStart', breakEnd = '$breakEnd', breakTime = '$breakTime'";

    if (!mysqli_query($con, $query)) {
        die("Error: " . mysqli_error($con));
    }
    die;

}