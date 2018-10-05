<?php
require_once("db.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$tgl_lahir = $_POST["tgl_lahir"];

$sql = "UPDATE mahasiswa SET nama='$nama', tgl_lahir='$tgl_lahir' WHERE nim=$nim";
if (mysqli_query($connection, $sql)) {
    echo "Record updated successfully";
}else {
    echo "Error updating: " . $sql . "<br>" . mysqli_error($connection);
}