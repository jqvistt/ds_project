<?php

include("includes/admin_panel.inc.php")

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Digishop CICO Admin Panel</title>
</head>

<body>

    <h1 id="title">Digishop CICO Admin Panel</h1>

    <div class="centerbox">



        <br>

        <p class="center">Welcome,
            <?php echo $user_data['name'], " ", $user_data['surname'], "!"; ?>
        </p>

        <br><br><br>

        <p>This is the Digishop CICO Admin panel. Here you can view entries, and sort them to your liking.</p>
        <p>To get started please select one of the options below!</p>

        <br><br><br><br>

        <div class="options">
            <button class="action" id="option1" name="option1">Option 1</button>
            <button class="action" id="option2" name="option2">Option 2</button>
            <button class="action" id="option3" name="option3">Option 3</button>
            <button class="action" id="option4" name="option4">Option 4</button>
            <button class="action" id="option5" name="option5">Option 5</button>
            <button class="action" id="option6" name="option6">Option 6</button>
        </div>

    </div>

    <a class="button" href="index.php">Go Back</a>

    <a class="button" href="includes/logout.inc.php">Log out</a>

    </div>

    <div class="footer">
        <p>&#169; Joakim Lönnqvist 2023 - E-Mail: joakim.is.lonnqvist@gmail.com - Phone: +358 40 654 0459</p>
    </div>

</body>

</html>