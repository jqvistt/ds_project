<?php
session_start();

include("includes/connection.inc.php");
include("includes/functions.inc.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['checkin_submit'])) {
        $user_id = $_SESSION['user_id'];
        $action_type = 'check-in';
        $timestamp = date("Y-m-d H:i:s");
        $query = "INSERT INTO time_tracking (user_id, action_type, timestamp) VALUES ('$user_id', '$action_type', '$timestamp')";
        mysqli_query($con, $query);
        if (!mysqli_query($con, $query)) {
            die("Error: " . mysqli_error($con));
        }
        header("Location: ./index.php");
        die;
    }
}