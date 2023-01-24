<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted

        $user_name  = $_POST['user_name'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];

        if(!empty($user_name) && !empty($password) && !empty($name) && !empty($surname) && !empty($email))
        {

            //Save to database
            $user_id = random_num(20);
            $query = "insert into `users` (user_id,username,password,name,surname,email) values ('$user_id','$user_name','$password','$name','$surname','$email')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }
        else{

            echo "Please fill out all of the fields!";

        }

    }

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