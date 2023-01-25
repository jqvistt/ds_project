<?php

    include("includes/signup.inc.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Log In</title>
</head>
<body>

<div id="box">

<form method="post">
    <div id="title">Digishop Employee Sign Up</div>

    <br><br><br>

    <input class="formelement" type="text" name="user_name" placeholder="Username">

    <br>

    <input class="formelement" type="text" name="name" placeholder="Your name">

    <br>

    <input class="formelement" type="text" name="surname" placeholder="Your surname">

    <br>

    <input class="formelement"type="email" name="email" placeholder="Your E-mail adress">   

    <br>

    <input class="formelement" type="password" name="password" placeholder="New password">   

    <br>

    <input class="logout" type="submit" value="Sign up">

    <a href="login.php" class="logout">Log in here!</a>
</form>

</div>
    
</body>
</html>