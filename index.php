<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Digishop Check-in</title>
</head>
<body>   

    <div id="box" class="vertical-center">
    
    <h1 id="title">Digishop Employee Check-in</h1>

    <br>

    <p class="center">Welcome, <?php echo $user_data['name'], " ", $user_data['surname'], "!";?></p>

    <h1 id="current-time"></h1>

    <br>

    <p class="center" id="notice"><p>

    <div class="options">

    <input class="button" id="checkinbtn" type="submit" value="Check in">
    <input class="button" id="breakbtn" type="submit" value="Break">
    <input class="button" id="checkoutbtn" type="submit" value="Check Out" onclick="">

    </div>

    <br>
    <textarea id="comments" rows="1" cols="50" wrap="physical" name="comments"></textarea>
    <br>
    <input type="file" name="attatchment" id="file" multiple>

    <a class="logout" href="mileage.php">Add mileage allowance</a>

    <a class="logout" href="logout.php">Log out</a>    
    
    </div>
</body>

<script src="js/digitalclock.js">
</script>
<script src="js/jsfunctions.js">
</script>


</html>

