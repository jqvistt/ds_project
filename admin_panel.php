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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body onload="document.body.style.opacity='1'">

    <h1 id="title">Digishop CICO Admin Panel</h1>

    <div class="centerbox" style="">



        <br>

        <p class="center">Welcome,
            <?php echo $user_data['name'], " ", $user_data['surname'], "!"; ?>
        </p>


        <p>This is the Digishop CICO Admin panel. Here you can view entries, and sort them to your liking.</p>

        <nav class="navbar">
            <ul class="items">

                <li><a id="nav_users">Users</a></li>
                <li><a id="nav_tables">Tables</a></li>
                <li><a id="nav_console">Console</a></li>
                <li><a id="nav_phpMyAdmin">phpMyAdmin</a></li>

            </ul>
        </nav>

        <button id="showData">Show User Data</button>


        <? if (mysqli_num_rows($result) > 0) {
            echo
                "<table><tr>

  <th>id</th>
  <th>UserID</th>
  <th>Name</th>
  <th>Surname</th>
  <th>E-Mail</th>
  <th>Date Registered</th>
  <th>Is Admin</th>
  
  </tr>";

            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo
                    "<tr>

    <td>" . $row["id"] . "</td>
    <td>" . $row["user_id"] . "</td>
    <td>" . $row["name"] . "</td>
    <td>" . $row["surname"] . "</td>
    <td>" . $row["email"] . "</td>
    <td>" . $row["date"] . "</td>
    <td>" . $row["is_admin"] . "</td>

    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }?>

    </div>

    <a class="button" href="index.php">Go Back</a>

    <a class="button" href="includes/logout.inc.php">Log out</a>

    </div>

    <div class="footer">
        <a href="https://linktr.ee/trypzo">&#169; Joakim Lönnqvist 2023</a>
        <a href="mailto: joakim.is.lonnqvist@gmail.com">joakim.is.lonnqvist@gmail.com</a>
        <a href="tel: +358 40 654 0459">+358 40 654 0459</a>
    </div>

</body>

<script src="js/JS_admin_panel.js"></script>

</html>