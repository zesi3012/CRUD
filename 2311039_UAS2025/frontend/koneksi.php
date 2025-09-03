<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = '2311039_uas2025';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Koneksi gagal: '. $conn->connect_error);
}
?>