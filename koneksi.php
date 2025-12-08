<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "hotel_db"; // Pastikan nama database benar

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>