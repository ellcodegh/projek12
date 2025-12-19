<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "universitas"; // ganti sesuai nama databse anda

$koneksi = mysqli_connect($host, $user, $pass, $db);

// cek kondisi
if (!$koneksi) {
    die("koneksi gagal : " . mysqli_connect_error());
}
?>