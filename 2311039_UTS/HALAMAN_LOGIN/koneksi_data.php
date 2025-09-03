<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "akademik_2311039";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal :" . mysqli_connect_error();
}
?>