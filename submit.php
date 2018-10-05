<?php
require_once("db.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$tgl_lahir = $_POST["tgl_lahir"];

$sql = "INSERT INTO mahasiswa(nama,nim,tgl_lahir) VALUES('$nama','$nim','$tgl_lahir')";

if (mysqlI_query($connection, $sql)) {
    echo "New record created successfully<br>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
echo "<a href='list.php'>link ini</a>";