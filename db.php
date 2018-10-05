<?php
$sname = "localhost";
$user = "root";
$pass = "";
$db = "webdas";

$connection = mysqli_connect($sname,$user,$pass,$db);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}