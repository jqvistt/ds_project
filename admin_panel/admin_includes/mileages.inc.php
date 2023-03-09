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
        <title>Mileage Allowances</title>
    </head>

    <body>
        <h1 id="main-header">Mileage Allowances</h1>

        <br>

        <div class="table-box">
            <table id="users-table">
                <thead>
                    <tr>
                        <th title='Date of Submission'>Entry Submitted</th>
                        <th title='Universally Unique Identifier'>UUID</th>
                        <th>Full Name</th>
                        <th>Starting Location</th>
                        <th>Ending Location</th>
                        <th>Distance Traveled</th>
                        <th>Date of Trip</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    //SQL query to retrieve all the entries from mileage allowance table
                    $query1 = "SELECT * FROM mileage_allowance";

                    $result1 = mysqli_query($con, $query1);

                    while ($row = mysqli_fetch_assoc($result1)) {

                        echo "<tr>";
                        echo "<td>" . $row['date_submitted'] . "</td>";
                        echo "<td>" . $row['uuid'] . "</td>";
                        echo "<td>" . $row['name'] . " " . $row['surname'] . "</td>";
                        echo "<td>" . $row['starting_location'] . "</td>";
                        echo "<td>" . $row['ending_location'] . "</td>";
                        echo "<td>" . $row['km_traveled'] . "km" . "</td>";
                        echo "<td>" . $row['date_traveled'] . "</td>";
                        echo "<td title='Removes the specified row'>" . "<button data-id='" . $row['id'] . "'>Remove</button>" . "</td>";
                        echo "<td title='Edits the specified row'>" . "<button>Edit</button>" . "</td>";

                        echo "</tr>";

                    }

                    ?>
                </tbody>
            </table>
        </div>

        <!-- Other features or widgets can be added here -->

        <script>

            removeButtons = document.querySelectorAll("#users-table button[data-id]");

            removeButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const id = button.dataset.id;

                    // Prompt the user to confirm the deletion
                    if (confirm("Are you sure you want to delete this row?")) {
                        // Send an AJAX request to the server to delete the corresponding row
                        fetch(`admin_includes/delete_row.php?table_name=mileage_allowance&id=${id}`)
                            .then(response => {
                                if (response.ok) {
                                    // Remove the row from the table
                                    const tr = button.closest("tr");
                                    tr.parentNode.removeChild(tr);
                                }
                            });
                    }
                });
            });
        </script>

    </body>

</html>