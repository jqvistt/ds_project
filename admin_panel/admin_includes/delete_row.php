<?php
include('../../includes/connection.inc.php');

// Get the table name and ID of the row to delete from the query parameter
$table_name = $_GET["table_name"];
$id = $_GET["id"];

// Delete the row from the database
$query = "DELETE FROM $table_name WHERE id = $id";
mysqli_query($con, $query);

// Send a response indicating success
http_response_code(200);
