<?php

include("includes/login.inc.php")

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

	<div id="box" class="textboxes">

		<form method="post">
			<div id="title">Digishop Employee Log In</div>

			<br><br><br>

			<input type="text" class="hcenter" name="user_name" placeholder="Username" required>

			<br>

			<input type="password" class="hcenter" name="password" placeholder="Password" required>

			<br>

			<input class="logout" type="submit" value="Log in">

			<a href="signup.php" class="logout">Sign up here!</a>
		</form>

	</div>

</body>

</html>