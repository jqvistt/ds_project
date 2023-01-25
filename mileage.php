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

<body>

    <div id="box" class="vertical-center">

        <h1 id="title">Digishop Mileage Allowance</h1>

        <br>

        <p class="center">Welcome,
            <?php echo $user_data['name'], " ", $user_data['surname'], "!"; ?>
        </p>

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
            <input type="date" name="date_traveled" required><br><br>
            <input type="submit" value="submit" name="submit">
        </form>

        <a class="logout" href="index.php">Go Back</a>

        <a class="logout" href="logout.php">Log out</a>

    </div>

    <script src="js/jsfunctions.js">
    </script>

</body>

</html>