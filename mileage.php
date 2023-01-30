<?php

include("includes/mileage.inc.php")

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Digishop Mileage Allowance</title>
</head>

<body onload="document.body.style.opacity='1'">
    <img class="logo" src="CICO.png" alt="">

    <h1 id="title">Digishop Mileage Allowance</h1>
    <div class="centerbox">

        <p class="center">Welcome,
            <?php echo $user_data['name'], " ", $user_data['surname'], "!"; ?>
        </p>

        <br>

        <p class="center" id="notice">
        <p>

        <form class="form" method="post">
            <label for="start_location">Starting Location:</label>
            <input type="text" name="start_location" required><br><br>
            <label for="end_location">Ending Location:</label>
            <input type="text" name="end_location" required><br><br>
            <label for="km_traveled">Km Traveled:</label>
            <input type="number" name="km_traveled" required><br><br>
            <label for="date_traveled">Date Traveled:</label>
            <input type="date" name="date_traveled" required><br>
            <input class="button" type="submit" value="submit" name="submit">
        </form>

        <br>
        <a class="button" href="index.php">Go Back</a>

        <a class="button" href="includes/logout.inc.php">Log out</a>

    </div>

    <div class="footer">
        <a href="https://linktr.ee/trypzo">&#169; Joakim Lönnqvist 2023</a>
        <a href="mailto: joakim.is.lonnqvist@gmail.com">joakim.is.lonnqvist@gmail.com</a>
        <a href="tel: +358 40 654 0459">+358 40 654 0459</a>
    </div>

</body>

</html>