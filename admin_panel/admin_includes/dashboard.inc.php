<?php
session_start();

include('../../includes/connection.inc.php');
include('../../includes/functions.inc.php');

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1 id="main-header">Dashboard</h1>

    <p id="active-users-element"><strong>Active Users: </strong><span id="active-users-count"></span></p>

    <div class="table-box">
        <table id="users-table">
            <thead>
                <tr>
                    <th>UUID</th>
                    <th>Full Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php

                // SQL query to retrieve user data and associated names
                $query1 = "SELECT user_data.uuid, user_data.isActive, user_data.onbreak, users.name, users.surname 
                            FROM user_data 
                            JOIN users ON user_data.uuid = users.uuid";

                // Execute the query and get the result set
                $result1 = mysqli_query($con, $query1);

                // Loop through the rows in the result set and display each user in a table row
                while ($row = mysqli_fetch_assoc($result1)) {
                    echo "<tr>";
                    echo "<td>" . $row['uuid'] . "</td>";
                    echo "<td>" . $row['name'] . " " . $row['surname'] . "</td>";
                    echo "<td>";
                    if ($row['isActive'] == "true" && $row['onbreak'] == "true") {
                        echo "<span title='On Break' style='color:#f7ff14;'>&#x25CF;</span> On Break";
                    } elseif ($row['isActive'] == "true") {
                        echo "<span title='Active' style='color:#04f500;'>&#x25CF;</span> Active";
                    } else {
                        echo "<span title='Offline' style='color:#f50000;'>&#x25CF;</span> Offline";
                    }
                    echo "</td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>

    <!-- <div class="table-box">

        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

                <?php

            
                ?>

            </tbody>
        </table>
    </div> -->

    <!-- Other features or widgets can be added here -->

    <script>
        
    </script>

</body>

</html>