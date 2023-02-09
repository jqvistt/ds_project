<?php

function check_login($con)
{

    if (isset($_SESSION['uuid'])) {

        $uuid = $_SESSION['uuid'];
        $query = "select * from users where uuid = '$uuid' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;

        }

    }

    // redirect to login page if not logged in

    header("Location: ../login.php");
    die;

}
;

function check_admin($con, $user_data)
{
    if ($user_data['is_admin'] == 1) {
        return true;
    } else {
        header("Location: ../index.php");
        die;
    }
}
;

/* function random_num($length = 5)
{
    $text = "";
    for ($i = 0; $i < 9; $i++) {
        $text .= rand(0, 9);
    }

    return $text;
} */

function generate_uuid()
{
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}
;