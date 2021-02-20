<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "my_db";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (mysqli_connect_errno()) {
    echo "Koneksi error";
    exit();
}
echo "Koneksi berhasil";
