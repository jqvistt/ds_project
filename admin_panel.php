<?php

include("includes/admin_panel.inc.php")

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/admin_style.css" rel="stylesheet" type="text/css" />
  <title>Digishop CICO Admin Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body onload="document.body.style.opacity='1'">

  <div class="container">



    <aside class="sidebar">
      <img class="logo" src="cico.png" alt="">
      <nav>
        <h1>CICO</h1>
        <ul>
          <li><a href="#" id="dashboard">&#127899; Dashboard</a></li>
          <li><a href="#" id="users">&#x270E; Users</a></li>
          <li><a href="#" id="mileages">&#x1F6E7; Mileages</a></li>
          <li><a href="#" id="reports">&#9888; Reports</a></li>
          <li><a href="#" id="settings">&#9881; Settings</a></li>

            <li><a href="index.php">&#x21b6; Go Back</a></li>
            <br><br>
            <li><a href="includes/logout.inc.php">Log Out</a></li>

        </ul>
        <button id="menu-icon">&blacktriangleright;</button>
      </nav>
    </aside>

    <main class="main-content">
      <h1>Welcome to the Digishop CICO Admin Dashboard</h1>
      <p>This is your dashboard where you can manage your website's content and users.</p>

      <div id="container1">Information will be displayed here</div>

    </main>
  </div>

</body>

<script src="js/JS_admin_panel.js"></script>

</html>