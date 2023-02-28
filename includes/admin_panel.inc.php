<?php

session_start();

include("connection.inc.php");
include("functions.inc.php");

$user_data = check_login($con);
check_admin($con, $user_data);

$sql = "SELECT * FROM users";
$result = mysqli_query($con, $sql);

mysqli_close($con);