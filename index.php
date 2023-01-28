<?php

include("includes/index.inc.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <title>Digishop CICO</title>
    <link rel="icon" type="image/ico" href="favicon.ico">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>

    <h1 id="title">Digishop CICO</h1>

    <div class="centerbox">

        <p class="center">Welcome,
            <?php echo $user_data['name'], " ", $user_data['surname'], "!"; ?>
        </p>

        <h1 id="current-time">00:00:00</h1>


        <p class="center" id="notice">
        <p>

        <div id="message"></div>

        <div class="options">
            <button class="action" id="checkinbtn" name="checkin_submit">Check-in</button>
            <button class="action" id="breakbtn" name="break_submit">Start break</button>
            <button class="action" id="checkoutbtn" name="checkout_submit">Check-out</button>
        </div>

        <br>
        <textarea id="comments" rows="1" cols="50" wrap="physical" name="comments"></textarea>
        <input class="files" type="file" name="attatchment" id="file" multiple>

        <br><br>

        <a class="button" href="mileage.php">Add mileage allowance</a>

        <a class="button" href="includes/logout.inc.php">Log out</a>

    </div>

    <div id="admincontainer">

        <!--         if the user is admin, display the button
 -->
        <?php
        if ($row['is_admin'] == 1) {
            echo '<a class="button" href="admin_panel.php" id="admin_panel">Admin Panel</a>';
        }
        ?>

    </div>

    <br><br><br><br>

    <div class="footer">
        <p>&#169; Joakim Lönnqvist 2023 - E-Mail: joakim.is.lonnqvist@gmail.com - Phone: +358 40 654 0459</p>
    </div>
</body>

<script src="js/JS_Main.js"></script>

</html>