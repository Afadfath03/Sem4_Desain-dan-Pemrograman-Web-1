<?php

$host = "localhost";
$dbname = "test_dpw1_crud";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// else {
//     echo "Koneksi berhasil";
// }