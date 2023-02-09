<?php

session_start();

if (isset($_SESSION['uuid'])) {
	unset($_SESSION['uuid']);
}

header("Location: ../login.php");
die;