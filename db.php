<?php
$servername = "localhost";
$username   = "admin";
$password   = "1234";
$db         = "WebDasar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>