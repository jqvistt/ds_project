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

	<h1 class="title">Digishop CICO Log In</h1>

	<br><br><br><br>
	<form method="post">


		<input type="text" class="hcenter" name="user_name" placeholder="Username" required>

		<br><br>

		<input type="password" class="hcenter" name="password" placeholder="Password" required>

		<br><br>

		<input class="button" type="submit" value="Log in">

		<br><br><br>

		<a href="signup.php" class="button">Sign up here!</a>
	</form>

	<div class="footer">
		<p>&#169; Joakim Lönnqvist 2023 - E-Mail: joakim.is.lonnqvist@gmail.com - Phone: +358 40 654 0459</p>
	</div>

</body>

</html>