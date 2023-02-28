<?php

include("../includes/admin_panel.inc.php")

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/admin_style.css" rel="stylesheet" type="text/css" />
  <title>Digishop CICO Admin Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body onload="document.body.style.opacity='1'">

  <div class="container">

    <?php
    include('admin_includes/side-menu.inc.php');
    ?>

    <div class="content"></div>


  </div>

</body>

<script src="../js/JS_admin_panel.js"></script>

</html>