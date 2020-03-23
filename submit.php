<?php
$username = "username";
$password = "pass";
$database = "db";

$mysqli = new mysqli("localhost", $username, $password, $database);

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$field1 = $mysqli->real_escape_string($_POST['Name']);
$field2 = $mysqli->real_escape_string($_POST['Birth Month']);
$field3 = $mysqli->real_escape_string($_POST['Birth Year']);
$field4 = $mysqli->real_escape_string($_POST['Passed Month']);
$field5 = $mysqli->real_escape_string($_POST['Passed Year']);

$query = "INSERT INTO table_name (col1, col2, col3, col4, col5)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}')";

$mysqli->query($query);
$mysqli->close();
