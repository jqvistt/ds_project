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
    <title>Digishop CICO Sign-Up</title>
</head>

<body onload="document.body.style.opacity='1'">

    <h1 class="title">Digishop CICO Sign-up</h1>

    <img src="CICO.png" alt="" width="100px" height="100px">

    <form method="post">

        <br><br>

        <input class="formelement" type="text" name="user_name" placeholder="Username" required>

        <br><br>

        <input class="formelement" type="text" name="name" placeholder="Your name" required>

        <br><br>

        <input class="formelement" type="text" name="surname" placeholder="Your surname" required>

        <br><br>

        <input class="formelement" type="email" name="email" placeholder="Your E-mail adress" required>

        <br><br>

        <input class="formelement" type="password" name="password" placeholder="New password" required>

        <br><br>

        <input class="formelement" type="password" name="repassword" placeholder="Repeat password" required>

        <br><br>

        <input class="formelement" type="text" name="authkey" placeholder="Authentication key" required>

        <br><br>


        <input class="button" type="submit" value="Sign up">

        <br><br><br>

        <a href="login.php" class="button">Log in here!</a>
    </form>

    <div class="footer">
        <a href="https://linktr.ee/trypzo">&#169; Joakim Lönnqvist 2023</a>
        <a href="mailto: joakim.is.lonnqvist@gmail.com">joakim.is.lonnqvist@gmail.com</a>
        <a href="tel: +358 40 654 0459">+358 40 654 0459</a>
    </div>

</body>

</html>