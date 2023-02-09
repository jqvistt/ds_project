<?php
session_start();

include("connection.inc.php");
include("functions.inc.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted

    $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //read from database
        $query = "select * from users where username = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);
                //hash the password before checking it
                $password_hash = $user_data['password'];
                if (password_verify($password, $password_hash)) {

                    $_SESSION['uuid'] = $user_data['uuid'];
                    header("Location: index.php");
                    die;
                }
            }
        }

        echo "wrong username or password!";
    } else {
        echo "wrong username or password!";
    }
}