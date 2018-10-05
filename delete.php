<?php
require_once("db.php");

$id = $_GET["nim"];

$sql = "DELETE FROM mahasiswa WHERE nim=$id";

if (mysqli_query($connection, $sql)) {
    echo "Record deleted succesfully";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}