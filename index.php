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

    <title>Digishop Check-in</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>

    <div id="box" class="vertical-center">

        <h1 id="title">Digishop Employee Check-in</h1>

        <br>

        <p class="center">Welcome,
            <?php echo $user_data['name'], " ", $user_data['surname'], "!"; ?>
        </p>

        <h1 id="current-time">00:00:00</h1>


        <p class="center" id="notice">
        <p>

        <div id="message"></div>

        <div class="options">
            <button class="button" id="checkinbtn" name="checkin_submit">Check-in</button>
            <button class="button" id="breakbtn" name="break_submit">Start break</button>
            <button class="button" id="checkoutbtn" name="checkout_submit">Check-out</button>
        </div>

        <br>
        <textarea id="comments" rows="1" cols="50" wrap="physical" name="comments"></textarea>
        <br>
        <input type="file" name="attatchment" id="file" multiple>

        <a class="logout" href="mileage.php">Add mileage allowance</a>

        <a class="logout" href="includes/logout.inc.php">Log out</a>

    </div>
</body>

<script src="js/JS_Main.js"></script>

</html>